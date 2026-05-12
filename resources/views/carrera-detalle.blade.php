@extends('layout.app')

@section('content')

<section class="max-w-5xl mx-auto px-6 py-12">

    <img src="{{ asset('storage/' . $carrera->imagen) }}"
         class="w-full h-[400px] object-cover rounded-xl shadow mb-8">

    <h1 class="text-4xl font-bold mb-6">
        {{ $carrera->nombre }}
    </h1>

    <div class="text-gray-700 space-y-4">
        {!! $carrera->descripcion !!}
    </div>

    <div class="mt-6 space-y-6">

        <div>
            <h2 class="text-xl font-semibold">Perfil de ingreso</h2>
            {!! $carrera->perfil_ingreso !!}
        </div>

        <div>
            <h2 class="text-xl font-semibold">Perfil de egreso</h2>
            {!! $carrera->perfil_egreso !!}
        </div>

        <div>
            <h2 class="text-xl font-semibold">Contacto</h2>
            <p>{{ $carrera->contacto }}</p>
        </div>

    </div>

    <div class="mt-10">
        <a href="{{ route('carreras.index') }}"
           class="bg-gray-800 text-white px-4 py-2 rounded">
            ← Regresar
        </a>
    </div>

</section>

@endsection