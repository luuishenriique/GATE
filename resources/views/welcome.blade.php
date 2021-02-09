<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="build/tailwind.css">
      <title>GATE</title>
  </head>
  <body>
    <!-- <header class="w-full h-20 bg-black">
        <a href=""><img class="float-left w-36 h-20 absolute ml-4" src="logo_gate.jpeg"></a>
        <nav class="float-right">
            <ul class="w-auto float-right mt-2">
                <li class="inline-block py-4 px-8 relative"><a class="text-center text-white no-underline text-xl" href="#">Home</a></li>
                <li class="inline-block py-4 px-8 relative"><a class="text-center text-white no-underline text-xl" href="#">Portfolios</a></li>
            </ul>
        </nav>
    </header> -->

    <div class="relative bg-white overflow-hidden">
      <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
          <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100" />
        </svg>

        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
            <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
              <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                  <a href="#">
                    <span class="sr-only">GATE</span>
                    <img class="h-8 w-auto sm:h-10" src="logo_gate.jpeg">
                </a>
                <div class="-mr-2 flex items-center md:hidden">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" id="main-menu" aria-haspopup="true">

                    </button>
                </div>
            </div>
        </div>
        <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">

            <a href="{{ route('register') }}" class="font-medium text-gray-500 hover:text-gray-900">Registrar</a>

            <a href="{{ route('login') }}" class="font-medium text-black-600 hover:text-gray-500">Entrar</a>
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
<div role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
    <div role="none">
      <a href="{{ route('login') }}" class="block w-full px-5 py-3 text-center font-medium text-gray-600 bg-gray-50 hover:bg-gray-100" role="menuitem">
        Entrar
    </a>
</div>
</div>
</div>
</div>

<main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
    <div class="sm:text-center lg:text-left">
      <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
        <span class="block xl:inline">Monitore e acompanhe os</span>
        <span class="block text-gray-600 xl:inline">seus equipamentos</span>
    </h1>
    <p class="mt-3 text-base text-black-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
        Um gestor de ativos para relatar problemas e obter soluções rápidas
    </p>
    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
        <div class="rounded-md shadow">
          <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-black-700 md:py-4 md:text-lg md:px-10">
            Cadastre-se
        </a>
    </div>
    <div class="mt-3 sm:mt-0 sm:ml-3">
      <a href="{{ route('login') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-black-700 bg-gray-100 hover:bg-black-200 md:py-4 md:text-lg md:px-10">
        Abrir um chamado
    </a>
</div>
</div>
</div>
</main>
</div>
</div>

<img class="lg:absolute lg:inset-y-0 lg:right-0 lg:h-full lg:w-full h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://wallpapercave.com/wp/wp5231837.jpg" alt="">
</div>

<!-- Seleção de funções-->

<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      <h2 class="text-base text-gray-600 font-semibold tracking-wide uppercase">Informações</h2>
      <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
        O GATE (Gestor de Ativos Tecnológicos Empresariais)
    </p>
    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
        tem como objetivo ajudar a gerenciar da melhor forma possível todos os equipamentos tecnológicos utilizados em um ambiente de trabalho
    </p>
</div>

<div class="mt-10">
  <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
    <div class="flex">
      <div class="flex-shrink-0">
        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-500 text-white">
          <!-- Heroicon name: globe-alt -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
        </svg>
    </div>
</div>
<div class="ml-4">
    <dt class="text-lg leading-6 font-medium text-gray-900">
      Cadastro de equipamentos
  </dt>
  <dd class="mt-2 text-base text-gray-500">
   Registro contendo todos os dados do equipamento a ser cadastrado, sendo gerado um QR Code para facilitar os processos posteriores de acompanhamento deste equipamento.
</dd>
</div>
</div>

<div class="flex">
  <div class="flex-shrink-0">
    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-500 text-white">
      <!-- Heroicon name: scale -->
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
    </svg>
</div>
</div>
<div class="ml-4">
    <dt class="text-lg leading-6 font-medium text-gray-900">
      Abertura de chamados para os equipamentos selecionados
  </dt>
  <dd class="mt-2 text-base text-gray-500">
      Chamados serão abertos para a equipe de suporte ser acionada, e, tendo o problema já declarado, iniciar o processo de manutenção do equipamento.
  </dd>
</div>
</div>

<div class="flex">
  <div class="flex-shrink-0">
    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-500 text-white">
      <!-- Heroicon name: lightning-bolt -->
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
    </svg>
</div>
</div>
<div class="ml-4">
    <dt class="text-lg leading-6 font-medium text-gray-900">
      Integração via e-mail
  </dt>
  <dd class="mt-2 text-base text-gray-500">
      Facilitando em comunicar mais abrangentemente quaisquer atualizações referentes ao chamado em questão.
  </dd>
</div>
</div>

<div class="flex">
  <div class="flex-shrink-0">
    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-gray-500 text-white">
      <!-- Heroicon name: annotation -->
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
    </svg>
</div>
</div>
<div class="ml-4">
    <dt class="text-lg leading-6 font-medium text-gray-900">
      FAQ interativo
  </dt>
  <dd class="mt-2 text-base text-gray-500">
      Sistema com perguntas frequentes, trazendo soluções para problemas mais simples que possam ser resolvidos no momento.
  </dd>
</div>
</div>
</dl>
</div>
</div>
</div>

</body>
</html>
</x-app-layout>
