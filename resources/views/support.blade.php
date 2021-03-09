<x-app-layout>
    

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GATE</title>

        <style>
            body{
                margin: 0;
                font-family: 'Work Sans', sans-serif;
                font-weight: 300;
            }
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
                float: right;
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
            <div class="container">
                <a href=""><img src="logo_gate.jpeg" alt="logo" class="logo"></a>
                <h3>ABRIR CHAMADO</h3>
                <nav>
                    <ul>
                        <li><a href="/">Voltar</a></li>
                    </ul>
                </nav>
            </div>
        
            <div class="flex-shrink-0 flex items-center">                
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                  
                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-white-700 focus:border-white-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
              
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

        </header>


    <x-slot name="content">
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('equipments') }}" class="button1">Adicionar equipamento</a>
                    <a href="{{ route('equipments_list') }}" class="button1">Ver equipamentos</a>
                    <br>
                    <br>
                    <!-- Colocar para avisar quando não tiver chamados em aberto -->
                    <form method="GET" action="{{ route('support') }}">
                    @csrf
                    <div>
                        <select name="slc-src" id="val" class="full block rounded-mg">
                            <option disabled selected >Selecione uma opção de pesquisa</option>
                            <option value="id">Id</option>
                            <option value="equipment_id">Equipamento</option>
                            <option value="status_id">Status</option>
                            <option value="description">Descrição</option>
                            <option value="created_at">Data de início</option>
                            <option value="updated_at">Última atualização</option>
                        </select>
                    </div>
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
                    <form method="GET" action="{{ route('support') }}">
                    @csrf
                <!-- Texto a ser procurado -->
                <div>
                    <x-label for="value" :value="__('Pesquisa por texto')" />

                    <x-input id="input" inputclass="block mt-1 w-full" placeholder="Digite aqui o que procura" type="text" name="input" :value="old('input')" required autofocus/>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Pesquisar') }}
                    </x-button>
                </div>
                    </form>
                    <div class="block text-center textx1 pb-3">
                        <h2>Chamados em atendimento</h2>
                    </div>
                    <br>
                    <br>
                    <!-- Gerando lista de chamados de usuário -->
                    @php
                        $val = $_GET['slc-src'] ?? '';
                        $val2 = $_GET['input'] ?? '';
                        $services = App\Models\Service::where('support_id', Auth::user()->id)->where('status_id', 2)->get();
                        $filter = $services->sortBy($val);
                        $services_not_open = App\Models\Service::where('status_id', 1)->get();
                        $filter2 = $services_not_open->sortBy($val);
                        $services_closed = App\Models\Service::where('status_id', 3)->where('support_id', Auth::user()->id)->get();
                        $filter3 = $services_closed->sortBy($val);
                    @endphp
                    @foreach($filter as $service)   
                     <div class="p-3 border">
                         @if($service->status_id < 2)
                         <div class="mt-3 px-2 border-b">Id do chamado -> {{ $service->id}} | Id do Equipamento -> {{ $service->equipment_id}} | Problema -> {{ $service->description}} | Situação -> Em análise</div>
                         @elseif($service->status_id > 2)
                         <div class="mt-3 px-2 border-b">Id do chamado -> {{ $service->id}} | Id do Equipamento -> {{ $service->equipment_id}} | Problema -> {{ $service->description}} | Situação -> Encerrado</div>
                         @else
                         <div class="mt-3 px-2 border-b">Id do chamado -> {{ $service->id}} | Id do Equipamento -> {{ $service->equipment_id}} | Problema -> {{ $service->description}} | Situação -> Aberto</div>
                         @endif
                          <div class="grid grid-cols-3 text-center">
                          <a class="bg-green-200 rounded-bl-lg hover:bg-green-300" href="{{route('show-service', $service)}}">Ver mais</a>
                          <a class="bg-blue-200 hover:bg-blue-300" href="{{route('new-attend', $service)}}">Atualizar Atendimento</a>
                          <a class="bg-red-200 rounded-br-lg hover:bg-red-300" onclick="javascript: if (confirm('Você deseja encerrar este chamado?'))location.href='{{route('close-service', $service)}}'" >Encerrar</a>
                          <!-- Lembrar de colocar confirmação de exclusão e testar se não está aberto o chamado -->
                        </div>
                     </div>
                     @endforeach
                     <br>
                     <br>
                     <div>
                         <h2>Chamados em análise para atendimento</h2>
                     </div>
                     @foreach($filter2 as $service)   
                     <div class="p-3 border">
                       <div class="mt-3 px-2 border-b">Id do chamado -> {{ $service->id}} | Id do Equipamento -> {{ $service->equipment_id}} | Problema -> {{ $service->description}} | Situação -> Em análise</div>
                       <div class="grid grid-cols-3 text-center">
                          <a class="bg-green-200 rounded-bl-lg hover:bg-green-300" href="{{route('show-service', $service)}}">Ver mais</a>
                          <a class="bg-yellow-200 hover:bg-yellow-300" href="{{ route('edit-service', $service )}}">Editar</a>
                          <a class="bg-blue-200 rounded-br-lg hover:bg-blue-300" href="{{ route('show-attend', $service)}}'" >Atender</a>
                          <a class="bg-red-200 rounded-br-lg hover:bg-red-300" onclick="javascript: if (confirm('Você realmente deseja excluir este chamado?'))location.href='{{ route('rm-service', $service)}}'" >Excluir</a>
                </div>
            </div>            
        @endforeach
            <br>
            <br>
            <div>
                <h2>Chamados encerrados</h2>
            </div>
            @foreach($filter3 as $service)
             <div class="p-3 border">
                    <div class="mt-3 px-2 border-b">Id do chamado -> {{ $service->id}} | Id do Equipamento -> {{ $service->equipment_id}} | Problema -> {{ $service->description}} | Situação -> Encerrado</div>
                    <div class="grid grid-cols-3 text-center">
                    <a class="bg-green-200 rounded-bl-lg hover:bg-green-300" href="{{route('show-service', $service)}}">Ver mais</a>
                    <a class="bg-red-200 rounded-br-lg hover:bg-red-300" onclick="javascript: if (confirm('Você realmente deseja excluir este chamado?'))location.href='{{ route('rm-service', $service)}}'" >Excluir</a>
                </div>
            </div>            
        @endforeach
        </div>
    </div>  
</x-app-layout>
