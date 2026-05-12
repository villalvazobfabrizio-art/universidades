@extends('layout.app')
@section('content')
<section class="max-w-5xl mx-auto px-6 py-12">
    <img src="{{ asset('storage/' . $universidad->imagen) }}"
         class="w-full h-[400px] object-cover rounded-xl shadow mb-8"
         alt="{{ $universidad->nombre }}"> 
    <h1 class="text-4xl font-bold mb-6">
        {{ $universidad->nombre }}
    </h1> 
    <div class="text-gray-700 leading-relaxed space-y-4">
        {!! $universidad->descripcion !!}
    </div>
    {{-- Botón regresar --}}
    <div class="mt-10">
        <a href="{{ url('/') }}"
           class="inline-block bg-gray-800 text-white px-6 py-3 rounded-lg hover:bg-gray-900 transition">
            ← Regresar
        </a>
    </div>
</section>
@endsection