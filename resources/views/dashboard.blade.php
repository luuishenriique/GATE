<x-app-layout>
    

    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
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
            <div class="-ml-10">
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

<div>
    <div class="max-w-7xl mx-auto mt-5 sm:px-6 lg:px-8">
        <div class="bg-white mb-5 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @php
                $val = $_GET['slc-src'] ?? 'status_id';
                $services = Auth::user()->services->sortBy($val);
                @endphp
                <!-- Colocar para avisar quando não tiver chamados em aberto -->
                <div class="flex">
                    <form method="GET" action="{{ route('dashboard') }}">
                        @csrf
                        <div class="flex">
                            <select name="slc-src" id="val" class="full block rounded-mg mr-5">
                                <option disabled selected >Selecione uma opção de pesquisa</option>
                                <option value="id">Código</option>
                                <option value="equipment_id">Equipamento</option>
                                <option value="status_id">Status</option>
                                <option value="description">Descrição</option>
                                <option value="created_at">Data de início</option>
                                <option value="updated_at">Última atualização</option>
                            </select>
                            <button class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gradient-to-r font-bold from-gray-600 to-gray-900 transform hover:scale-110">
                                Ordenar
                            </button>
                        </div>
                    </form>
                    <a href="{{ route('services') }}" class="focus:outline-none text-white text-sm py-2.5 px-5 ml-5 rounded-md bg-gradient-to-r font-bold from-gray-600 to-gray-900 transform hover:scale-110">Abrir um chamado</a>
                </div>
                <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-20 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Código</th>
                                <th class="px-10 py-3 border-b-2 border-gray-300 text-center text-sm leading-4 text-gray-700 tracking-wider">Código do Equipamento</th>
                                <th class="px-10 py-3 border-b-2 border-gray-300 text-center text-sm leading-4 text-gray-700 tracking-wider">Problema</th>
                                <th class="px-10 py-3 border-b-2 border-gray-300 text-center text-sm leading-4 text-gray-700 tracking-wider">Situação</th>
                                <th class="px-20 py-3 border-b-2 border-gray-300 text-center text-sm leading-4 text-gray-700 tracking-wider">Ações</th>
                            </tr>
                        </thead>
                    </table>
                </div>

                <!-- Gerando lista de chamados de usuário -->
                @foreach($services as $service)

                <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                   <div class="mt-3 px-2 border-b">
                    <table class="min-w-full">
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">{{ $service->id}}</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">{{ $service->equipment_id}}</th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">{{ $service->description}}</th>
                            @if($service->status_id < 2)
                            <th class="px-3 py-3 border-b-2 border-gray-300 text-center tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">Análise</th>
                            @elseif($service->status_id > 2)
                            <th class="px-3 py-3 border-b-2 border-gray-300 text-center tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">Encerrado</th>
                            @else
                            <th class="px-3 py-3 border-b-2 border-gray-300 text-center tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">Aberto</th>
                            @endif
                            <th class="px-2 py-3 border-b-2 border-gray-300 text-center tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">
                                <a class="bg-green-300 rounded px-1" href="{{route('show-user', $service)}}">Ver</a>
                            </th>
                            <th class="px-2 py-3 border-b-2 border-gray-300 text-center tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">
                                <a class="bg-yellow-300 rounded px-1" href="{{route('edit-service', $service)}}">Editar</a>
                            </th>
                            @if($service->status_id == 1)
                            <th class="px-2 py-3 border-b-2 border-gray-300 text-center tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">
                                <a class="cursor-pointer bg-red-300 rounded px-1" onclick="javascript: if (confirm('Você realmente deseja excluir este chamado?'))location.href='{{ route('rm-service', $service)}}'" >Excluir</a>
                            </th>
                            @else
                            <th class="px-2 py-3 border-b-2 border-gray-300 text-center tracking-wider max-w-0 overflow-hidden overflow-ellipsis whitespace-nowrap">
                                <a class="cursor-pointer bg-red-300 rounded px-1" onclick="javascript: if (alert('Você não pode excluir este chamado!'))location.href='{{ route('rm-service', $service)}}'" >Excluir</a>
                            </th>
                            @endif

                        </tr>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
    </div>  
</x-app-layout>
