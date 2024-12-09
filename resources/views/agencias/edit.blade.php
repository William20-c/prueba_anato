@extends('layout')
@section('main')
<div>
    <form action="{{ route('agencias.update', $agencia->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" id="name" name="name" value="{{ old('nombre', $agencia->name) }}" required class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="nit" class="block text-sm font-medium text-gray-700">NIT</label>
            <input type="text" id="nit" name="nit" value="{{ old('nit', $agencia->nit) }}" required class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
            <input type="text" id="type" name="type" value="{{ old('type', $agencia->type) }}" required class="mt-2 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
		<button type="submit" class="w-full text-black mt-2 !important">
			Actualizar Agencia
		</button>

    </form>
    </form>

</div>

@endsection