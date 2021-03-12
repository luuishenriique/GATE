<x-guest-layout>
    
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
                    <img class="h-8 w-auto sm:h-24 mx-16" src="../../logo_gate2.png">
                </a>
                <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" id="main-menu" aria-haspopup="true">

                    </button>
                </div>
            </div>
        </div>

        <x-responsive-nav-link>
                      <a class="text-gray-900 -mx-22" href="/dashboard">Voltar</a>
                    </x-responsive-nav-link>
        </header>

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <a href=""><img src="logo_gate.jpeg" alt="logo" class="logo" width="150px" height="150px"></a>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        @php
        $equipamentos = App\Models\Equipment::where('status', 0)->get();
        @endphp

        <form method="POST" action="{{ route('add-service') }}">
            @csrf

            <!-- Id do equipamento -->
                <select id="equipment_id" class="block mt-1 w-full" type="text" name="equipment_id"   required x-model="equipment_id" >
                 <option class="block mt-1 w-full" value="" disabled selected>Selecione um equipamento</option>
                 @foreach($equipamentos as $equipamento)
                 <option class="block mt-1 w-full"  value="{{$equipamento->id}}" >{{$equipamento->name}}&ensp;|&ensp;{{$equipamento->model}}&ensp;|&ensp;{{$equipamento->manufacturer}}</option>
                 @endforeach
                </select>
                <!-- Usuário -->
                <div>
                    <x-label for="user_id" :value="__('Usuário')" class="hidden"/>

                    <x-input id="user_id" class="hidden block mt-1 w-full" placeholder="Usuário" type="text" name="user_id" :value="old('user_id')" />
                </div>
                <!-- Status -->
                <div>
                    <x-label for="status_id" :value="__('Status')" class="hidden"/>

                    <x-input id="status_id" class="hidden block mt-1 w-full" placeholder="Status" type="number" name="status_id" :value="1" required />
                </div>
                <!-- Descrição -->
                <div>
                    <x-label for="description" :value="__('Descrição')" class="text-sm font-semibold text-gray-600"/>

                    <x-input id="description" class="transition duration-300 border border-gray-400 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-gray-300 block mt-1 w-full" placeholder="Descreva seu problema" type="text" name="description" :value="old('description')" required autofocus />
                </div>
                <!-- Botão de cadastro -->
                <div class="flex items-center justify-end mt-4">
                    <a class="block mt-2 w-1/6" href="/dashboard">
                        {{ __('Voltar') }}
                    </a>

                    <button class="px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-gray-600 rounded-md shadow hover:bg-gray-700 focus:outline-none focus:ring-gray-300 focus:ring-4">
                        {{ __('Cadastrar') }}
                    </button>
                </div>
            </form>
    </x-auth-card>
</x-guest-layout>
