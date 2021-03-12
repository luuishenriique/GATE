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

<div class="max-w-7xl mx-auto mt-5 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="px-6 py-2 bg-white border-b border-gray-200">
            <div class="block text-center textx1 pb-3">
                <h2 class="text-center text-2xl my-5">Detalhes do chamado</h2>
                <div class="mt-3 px-2 border-b">
                    <table class="min-w-full">
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Nº do Chamado</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Data de criação</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">ID do equipamento</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Descrição do problemma</th>
                        </tr>
                    </table>

                    <div class="mt-3 px-2 border-b">
                        <table class="min-w-full">
                            <tr>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider">{{ $service->id}}</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider">{{ $service->created_at}}</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider">{{ $service->equipment_id}}</th>
                                <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider">{{ $service->description}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <form class="mt-5" method="POST" action="{{route('attend-service', $service)}}">
                    @method('PUT')
                    @csrf
                    <!-- Status -->
                    <div>
                        <x-input id="status_id" class="block mt-1 w-full" type="hidden" name="status_id" :value="2" required autofocus />
                    </div>
                    <!-- Botão de atender -->
                    <div class="flex items-center justify-end mt-4">
                        <a class="block mt-2" href="/dashboard/support">
                            {{ __('Voltar') }}
                        </a>

                        <button class="focus:outline-none text-white text-sm py-2.5 px-5 ml-5 rounded-md bg-gradient-to-r font-bold from-gray-600 to-gray-900 transform hover:scale-110">
                            Confirmar atendimento
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</x-app-layout>
