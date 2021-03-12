<x-app-layout>
    
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GATE</title>

        <style>
            .container{
                width: 80%;
                margin: 0 auto;
            }
            body{
                background-color: rgba(209, 213, 219);
            }
        </style>

    </head>
    <body>
        <header>
         <div class="relative bg-white overflow-hidden">
          <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-1 bg-white sm:pb-1 md:pb-1 lg:max-w-2xl lg:w-full lg:pb-1 xl:pb-1">
              <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100" />
            </svg>

            <div class="relative pt-6 px-1 sm:px-6 lg:px-96">
                <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                  <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                    <div class="flex items-center justify-between w-full md:w-auto">
                      <a href="#">
                        <span class="sr-only">GATE</span>
                        <img class="h-8 w-auto sm:h-24 mx-16" src="../../logo_gate2.png">
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" id="main-menu" aria-haspopup="true">

                        </button>
                    </div>
                </div>
            </div>
            <div class="-ml-2">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>
        </div>

        <div class="ml-96 mb-5 -mt-10">
            <!-- Authentication -->
            <form  class="mx-96" method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ __('Logout') }}
            </x-responsive-nav-link>
        </form>
    </div>
</nav>
</div>

<div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
      <div class="px-5 pt-4 flex items-center justify-between">
        <div>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
      </div>
      <div class="-mr-2">
          <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
      </button>
  </div>
</div>

</header>

@php
$attendances = App\Models\Attendance::where('service_id', $service->id)->paginate(3);
@endphp

<div class="max-w-7xl mt-5 mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-5 bg-white border-b border-gray-200">
            <div class="block text-center textx1 pb-3">
                <h2 class="text-center text-2xl my-1">Histórico de atendimento</h2>
                
                <div class="mt-3 px-2 border-b">
                    <table class="min-w-full">
                        <tr>
                            <th class="px-16 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Data</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Descrição atual</th>
                        </tr>
                    </table>

                    @foreach($attendances as $attendance)

                    <div class="mt-3 px-2 border-b">
                        <table class="min-w-full">
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">{{ $attendance->updated_at}}</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">{{ $attendance->description}}</th>
                            </tr>
                        </table>
                        @endforeach
                        {{ $attendances->links('pagination-links') }}
                        <form method="POST" action="{{route('add-attend', $service)}}">
                            @csrf
                            <!-- Status -->
                            <h2 class="text-center text-2xl my-5">Descrição de atualização</h2>
                            <div>
                                <x-input id="description" class="block ml-auto mr-auto w-3/4" type="textarea" name="description" placeholder="Digite aqui o que foi feito" :value="old('description')" required autofocus />
                            </div>
                            <!-- Chamado Id -->
                            <div>
                                <x-input id="service_id" class="block mt-1 w-full" type="hidden" name="service_id" value="{{$service->id}}" required/>
                                </div>
                                <!-- Botão de atualizar -->
                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('') }}
                                    </a>

                                    <x-button class="ml-4">
                                        {{ __('Atualizar') }}
                                    </x-button>
                                </div>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</x-app-layout>
