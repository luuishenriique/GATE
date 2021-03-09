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
            header{
                background: #1f1f1f;
            }
            header::after{
                content: '';
                display: table;
                clear: both;
            }
            .logo{
                float: left;
                width: 130px;
                height: 70px;
            }
            nav{
                float: left;
                align-items: flex-start
            }
            nav ul{
                margin: 0;
                padding: 0;
                list-style: none;
            }
            nav li{
                display: inline-block;
                margin-left: 70px;
                padding-top: 25px;
                position: relative;
            }
            nav a{
                color: white;
                text-decoration: none;
                font-size: 20px;
            }
            nav a:hover{
                text-shadow: 2px 2px 3px #000000;
            }
            .logo2{
                padding-top: 50px;
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 400px;
                height: 200px;
            }
            h1{
                text-align: center;
                font-weight: 700;
                line-height: 120%;
                font-size: 45px;
            }
            h2{
                text-align: center;
                font-size: 25px;
            }

            h3{
                color: white;
                font-family: 'Work Sans', sans-serif;
                font-size: 15px;
                text-align: bottom;
                
            }
            
            p{
                text-align: center;
                margin-top: 50px;
            }
            .button1{
                line-height: 24px;
                cursor: pointer;
                font-weight: 500;
                display: inline-flex;
                background-color: black;
                color: white;
                border-radius: 28px;
                font-size: 20px;
                margin-right: 10px;
                padding: 16px 32px;
            }
            .button1:hover{
                background-color: #131313;
                box-shadow: 2px 2px 4px #888888;
            }
            .button2{
                line-height: 24px;
                cursor: pointer;
                font-weight: 500;
                display: inline-flex;
                background-color: black;
                color: white;
                border-radius: 28px;
                font-size: 20px;
                margin-left: 10px;
                padding: 16px 32px;
            }
            .button2:hover{
                background-color: #131313;
                box-shadow: 2px 2px 4px #888888;
            }
        </style>

    </head>
    <body>
        <header>
   <div class="relative bg-white overflow-hidden">
      <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-10">
          <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100" />
        </svg>

        <div class="relative pt-6 px-1 sm:px-6 lg:px-96">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
              <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                  <a href="#">
                    <span class="sr-only">GATE</span>
                    <img class="h-8 w-auto sm:h-24 mx-16" src="logo_gate2.png">
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

            <div class="ml-96 ">
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


    <x-slot name="content">
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('equipments') }}" class="button1">Adicionar equipamento</a>
                    <br>
                    <br>
                    <!-- Colocar para avisar quando não tiver chamados em aberto -->
                    <form method="GET" action="{{ route('equipments_list') }}">
                    @csrf
                    <div>
                        <select name="slc-src" id="val" class="full block rounded-mg">
                            <option disabled selected >Selecione uma opção de pesquisa</option>
                            <option value="id">Id</option>
                            <option value="tomb_id">Código de Tombamento</option>
                            <option value="name">Nome</option>
                            <option value="model">Modelo</option>
                            <option value="manufacturer">Fabricante</option>
                            <option value="equipment_id">Equipamento</option>
                            <option value="status">Status</option>
                            <option value="description">Descrição</option>
                            <option value="created_at">Data de início</option>
                            <option value="updated_at">Última atualização</option>
                        </select>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Pesquisar') }}
                    </x-button>
                </div>
                    </form>
                    <br>
                    <br>
                    <!-- Gerando lista de chamados de usuário -->
                    @php
                        $teste = $msg ?? '';
                        $val = $_GET['slc-src'] ?? '';
                        $equipments = App\Models\Equipment::all()->sortBy($val);
                    @endphp
                    @if($teste != '')
                    <script>alert("{{$teste}}");</script>
                    @endif
                     <div>
                         <h2>Equipamentos cadastrados {{$val}}</h2> 
                     </div>
                     @foreach($equipments as $equipment)
                     @php
                     $chamados = App\Models\Service::where('equipment_id', $equipment->id)->get();
                     $teste = strlen($chamados);
                     @endphp 
                     <div class="p-3 border">
                        @if($teste > 2)
                        <div class="text-center text-yellow-500">
                            <b>Há um chamado aberto para este equipamento!</b>
                        </div>
                        @endif
                       <div class="mt-3 px-2 border-b">Cód. do Equipamento -> {{ $equipment->id }} | Nome do Equipamento -> {{ $equipment->name }} | Cód. Tombamento -> {{ $equipment->tomb_id }} | Modelo -> {{ $equipment->model }} | Fabricante -> {{ $equipment->manufacturer }} | Descrição -> {{ $equipment->description }} | Status -> {{ $equipment->status }}</div>
                       <div class="grid grid-cols-3 text-center">
                          <a class="bg-green-200 rounded-bl-lg hover:bg-green-300" href="{{route('show-equipment', $equipment)}}">Ver mais</a>
                          @if($equipment->status == 0)
                          <a class="bg-yellow-200 hover:bg-yellow-300" href="{{route('edit-equipment', $equipment)}}">Editar</a>
                          <a class="bg-red-200 rounded-br-lg hover:bg-red-300" onclick="javascript: if (confirm('Você realmente deseja excluir este Equipamento?'))location.href='{{ route('rm-equipment', $equipment)}}'" >Excluir</a>
                          @else
                          <a class="bg-yellow-200 hover:bg-yellow-300" onclick="javascript: if (alert('Você não pode editar um equipamento em atendimento de chamado!'))location.href='{{ route('edit-equipment', $equipment)}}'">Editar</a>
                          <a class="bg-red-200 rounded-br-lg hover:bg-red-300" onclick="javascript: if (alert('Você não pode excluir este Equipamento!'))location.href='{{ route('rm-equipment', $equipment)}}'" >Excluir</a>
                          @endif
                        </div>
                    </div>
                    @endforeach
            </div>
    </div>  
</x-app-layout>
