<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('login') }}">
            @csrf

             <!-- Titulo -->
             <div>
                <x-label for="Titulo" :value="__('Titulo')" />

                <x-input id="Titulo" class="block mt-1 w-full" type="text" name="Titulo" :value="old('Titulo')" required autofocus />
            </div>

            <!-- Titulo -->
            <div>
                <x-label for="Descripcion" :value="__('Descripcion')" />

                <x-input id="Descripcion" class="block mt-1 w-full" type="text" name="Descripcion" :value="old('Descripcion')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">           
                <x-button class="ml-3">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>