<x-guest-layout>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>GATE</title>
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <!-- Validation Errors -->
  <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center">
      <div
        class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md"
      >
        <div
          class="p-4 py-6 text-white bg-gray-700 md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly"
        >
          <div class="my-3 text-4xl font-bold tracking-wider text-center">
            <a href="/">GATE</a>
          </div>
          <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
            Monitore e acompanhe os seus equipamentos!
          </p>
          <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
            Um gestor de ativos para relatar problemas e obter soluções rápidas.
          </p>
          <p class="flex flex-col items-center justify-center mt-10 text-center">
            <span>Você não tem uma conta?</span>
            <a href="/register" class="underline">Cadastre-se agora!</a>
          </p>
        </div>
        <div class="p-5 bg-white md:flex-1">
          <form method="POST" action="{{ route('login') }}" class="flex flex-col space-y-5">
            @csrf
            <div class="flex flex-col space-y-1">
              <label for="email" class="text-sm font-semibold text-gray-600" :value="__('Email')">Email</label>
              <input type="email" id="email" name="email" class="px-4 py-2 transition duration-300 border border-gray-400 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-gray-300" :value="old('email')" required autofocus/>
            </div>
            <div class="flex flex-col space-y-1">
              <div class="flex items-center justify-between">
                <label for="password" class="text-sm font-semibold text-gray-600" :value="__('Senha')">Senha</label>
              </div>
              <input type="password" id="password" name="password" class="px-4 py-2 transition duration-300 border border-gray-400 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-gray-300" required autocomplete="current-password"/>
            </div>
            <div class="flex items-center space-x-2">
              <input type="checkbox" id="remember_me" name="remember" class="w-4 h-4 transition duration-300 rounded focus:ring-2 focus:ring-offset-0 focus:outline-none focus:ring-gray-300"/>
              <label for="remember_me" class="text-sm font-semibold text-gray-600">{{ __('Lembre de mim') }}</label>
            </div>
            <div>
              <button type="submit" class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-gray-600 rounded-md shadow hover:bg-gray-700 focus:outline-none focus:ring-gray-300 focus:ring-4">
                {{ __('Entrar') }}
              </button>
              <a href="/" class="block mx-auto mt-4 w-10">Voltar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</x-guest-layout>
