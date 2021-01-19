<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <a href=""><img src="logo_gate.jpeg" alt="logo" class="logo" width="150px" height="150px"></a>
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                    <x-label for="name" :value="__('Nome')" />

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <div>
                    <x-label for="username" :value="__('Nome de usuário')" />

                    <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
                </div>

                <div>
                    <x-label for="phone" :value="__('Telefone')" />

                    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required/>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('E-mail')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Senha')" />

                    <x-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirme sua senha')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                    type="password"
                    name="password_confirmation" required />
                </div>



                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Já possui uma conta? Conecte-se!') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Cadastrar') }}
                    </x-button>
                </div>
            </form>
    </x-auth-card>
</x-guest-layout>
