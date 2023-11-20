<x-guest-layout>
    <form method="POST" action="{{ route('articulos.update', ['articulo' => $articulo],) }}">
        @csrf
        @method('PUT')

        <!-- Nombre -->
        <div>
            <x-input-label for="denominacion" :value="'Nombre de la denominacion'" />
            <x-text-input id="denominacion" class="block mt-1 w-full" type="text" name="denominacion" :value="old('denominacion', $articulo->denominacion)" required autofocus autocomplete="nombre" />
            <x-input-error :messages="$errors->get('denominacion')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="precio" :value="'Precio de la denominacion'" />
            <x-text-input id="precio" class="block mt-1 w-full" type="text" name="precio" :value="old('precio', $articulo->precio)" required autofocus autocomplete="precio" />
            <x-input-error :messages="$errors->get('precio')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="categoria_id" :value="'Catgoria a la que pertenece'" />
            <x-text-input id="categoria_id" class="block mt-1 w-full" type="text" name="categoria_id" :value="old('categoria_id', $articulo->categoria_id)" required autofocus autocomplete="categoria_id" />
            <x-input-error :messages="$errors->get('categoria_id')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('articulos.index') }}">
                <x-secondary-button class="ms-4">
                    Volver
                </x-primary-button>
            </a>
            <x-primary-button class="ms-4">
                Editar
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
