@extends('layout.app')
@section('content')
@php
use Illuminate\Support\Facades\Storage;
@endphp

<!--Seccion de foto Principal-->
<section class="w-screen relative left-1/2 -translate-x-1/2">
    <img src="carreras.jpg" alt="Carrera" class="w-full [h-400] object-cover">
    <!--Div de opacidad-->
    <div class="absolute inset-0 bg-black/50"></div>
    <!--div para titulo y parrafo sobre la foto-->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-whute text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Encuentra tu carrera ideal</h1>
        <p class="text-lg md:text-xl max-w-2x1">Explora las mejores opciones académicas y descubre tu futuro profesional.</p>
    </div>
</section>

<!--Sección de titulo y parrafo-->
<section class="pt-20">
    <h1 class="text 3xl font bold text-center mb-10">Carreras destacadas</h1>
    <p class="pb-4 text-gray-600 leading-relaxed">Esta página web tiene como objetivo principal brindar informacion clara, organizada y acceso a datos relevantes sobre universidades, carreras y opciones educativas disponibles.</p>
    <p class="pb-4 text-gray-600 leading-relaxed">Elegir una carrera es una de las decisiones más importantes en la vida de una persona porque influye directamente en su futuro profesional, económico y personal. No se trata solo de decidir qué estudiar por algunos años, sino de definir el camino que marcará gran parte de tu tiempo, tus oportunidades y tu desarrollo como individuo. Una buena elección puede brindarte satisfacción, estabilidad y crecimiento, mientras que una decisión tomada sin reflexión puede generar frustración, desmotivación o incluso la necesidad de empezar de nuevo. Además, la carrera que elijas determinará en gran medida el entorno en el que te desenvolverás, las habilidades que desarrollarás y el impacto que tendrás en la sociedad. Por eso, es fundamental considerar tus intereses, habilidades, valores y las oportunidades del campo laboral antes de tomar una decisión, ya que esta elección no solo afecta lo que harás para ganarte la vida, sino también la calidad de vida que tendrás a largo plazo.</p>
</section>

<!--Sección de universidades-->
<section class="w-full pt-10 grid grid-cols-2 gap-8 ">
    @foreach($carreras as $carrera)
    <!--Card1-->
    <div class="bg-white rounded-lg shadow">
        <img src="{{ Storage::url($carrera->imagen) }}" alt="Medicina" class="w-full object-cover h-50">
        <h3 class="text-lg font-semibold text-center">{{ $carrera->nombre }}</h3>
       <a href="{{ route('carreras.show', $carrera) }}" class="block w-full text-center bg-indigo-600
text-white py-2 rounded-lg hover:bg-indigo-700 transition">Más detalles</a>
    </div>
@endforeach
    
</section>
@endsection