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
                    <h2>Detalhes do chamado</h2>
                    <div class="mt-3 px-2 border-b">
                        
                        <div class="mt-3 px-2 border-b">
                            <table class="min-w-full mb-10">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Nº do Chamado</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Data de criação</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Código do equipamento</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Descrição do problemma</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider" colspan="2" scope="colgroup">Ações</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider">{{ $service->id}}</th>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider">{{ $service->created_at}}</th>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider">{{ $service->equipment_id}}</th>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider">{{ $service->description}}</th>
                                    @if($service->status_id < 2)
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider"><a class="" href="{{ route('edit-service', $service )}}">Editar</a></th>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider"><a class="cursor-pointer" onclick="javascript: if (confirm('Você realmente deseja excluir este chamado?'))location.href='{{ route('rm-service', $service)}}'" >Excluir</a></th>
                                    @endif
                                    @if($service->status_id == 2)
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider "><a class="cursor-pointer" onclick="javascript: if (confirm('Você realmente deseja encerrar este chamado?'))location.href='{{ route('close-service', $service)}}'" >Encerrar</a></th>
                                    @endif
                                </tr>
                            </table>

                            <h2>Histórico de acompanhamento</h2>
                            @foreach($attendances as $attendance)
                            <table class="min-w-full">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Data</th>
                                        <th class="px-6 py-3 border-b-2 border-gray-300 text-center leading-4 text-gray-700 tracking-wider">Descrição atual</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider">{{ $attendance->updated_at}}</th>
                                    <th class="px-6 py-3 border-b-2 border-gray-300 text-center text-gray-700 tracking-wider">{{ $attendance->description}}</th>
                                </tr>
                            </table>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>  
        </x-app-layout>
