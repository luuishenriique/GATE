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

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e nós lhe enviaremos um link de redefinição de senha que permitirá que você escolha uma nova.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Resetar senha') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
