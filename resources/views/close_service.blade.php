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
                <a href=""><img src="../../logo_gate2.png" alt="logo" class="logo"></a>
                <h3>ABRIR CHAMADO</h3>
                <nav>
                    <ul>
                        <li><a href="{{route('support')}}">Voltar</a></li>
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

    @php
    $attendances = App\Models\Attendance::where('service_id', $service->id)->get();
    @endphp

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="block text-center textx1 pb-3">
                        <h2>Histórico de atendimento</h2>
                        @foreach($attendances as $attendance)
                        <br>
                        Data --> {{$attendance->updated_at}}
                        <br>
                        Descrição --> {{$attendance->description}}
                        <br>
                        @endforeach
                        <br>
                        <br>
                        <form method="POST" action="{{route('add-attend', $service)}}">
                            @csrf
                            <!-- Status -->
                            <div>
                                <x-label for="description" :value="__('Descrição de atualização')" />

                                <x-input id="description" class="block mt-1 w-full" type="textarea" name="description" placeholder="Digite aqui o que foi feito" :value="old('description')" required autofocus />
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
                                    {{ __('Encerrar') }}
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
