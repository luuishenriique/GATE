<x-guest-layout>
        
 <html lang="pt-br">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
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
            text-color: white;
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
            <nav>
                <ul>
                    <li><a href="/">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <a href=""><img src="logo_gate.jpeg" alt="logo" class="logo" width="150px" height="150px"></a>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('add-service') }}">
            @csrf

            <!-- Id do equipamento -->
                <div>
                    <x-label for="equipment_id" :value="__('Código')" class="text-sm font-semibold text-gray-600"/>

                    <x-input id="equipment_id" class="transition duration-300 border border-gray-400 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-gray-300 block mt-1 w-full" placeholder="Código do equipamento" type="text" name="equipment_id" :value="old('equipment_id')" required autofocus />
                </div>
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
