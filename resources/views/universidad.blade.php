@extends('layout.app')
@section('content')
@php
use Illuminate\Support\Facades\Storage;
@endphp

<!--Seccion de foto Principal-->
<section class="w-screen relative left-1/2 -translate-x-1/2">
    <img src="universidad.jpg" alt="Universidad" class="w-full [h-400] object-cover">
    <!--Div de opacidad-->
    <div class="absolute inset-0 bg-black/50"></div>
    <!--div para titulo y parrafo sobre la foto-->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-whute text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Encuentra tu universidad ideal</h1>
        <p class="text-lg md:text-xl max-w-2x1">Explora las mejores opciones académicas y descubre tu futuro profesional.</p>
    </div>
</section>

<!--Sección de titulo y parrafo-->
<section class="pt-20">
    <h1 class="text 3xl font bold text-center mb-10">Universidades destacadas</h1>
    <p class="pb-4 text-gray-600 leading-relaxed">Esta página web tiene como objetivo principal brindar informacion clara, organizada y acceso a datos relevantes sobre universidades, carreras y opciones educativas disponibles.</p>
    <p class="pb-4 text-gray-600 leading-relaxed">A través de esta plataforma, los estudiantes podrán explorar distintas instituciones, conocer características generales de cada una y comparar alternativas que se ajusten a tus intereses y metas personales. La intención es ofrecer una herramienta informativa que ayude a tomar desiciones más seguras y fundamentales sobre tu formación profesional.</p>
</section>

<!--Sección de universidades-->
<section class="w-full pt-10 grid grid-cols-2 gap-8 ">
    @foreach($universidades as $universidad)
    <!--Card1-->
    <div class="bg-white rounded-lg shadow">
        <img src="{{ Storage::url($universidad->imagen) }}" alt="Unam" class="w-full object-cover h-50">
        <h3 class="text-lg font-semibold text-center">{{ $universidad->nombre }}</h3>
       <a href="{{ route('universidades.show', $universidad) }}" class="block w-full text-center bg-indigo-600
text-white py-2 rounded-lg hover:bg-indigo-700 transition">Más detalles</a>
    </div>
@endforeach
    
</section>
@endsection