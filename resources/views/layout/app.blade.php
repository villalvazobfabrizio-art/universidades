<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <tittle>Inicio</tittle>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <tittle>Inicio</tittle>
  </head>
  <body class="bg gray-100 text-gray-800 flex flex-col min-h-screen">
    <!--Encabezado-->
    <header class="bg-white shadow">
        <div class="max-w-7x1 mx-auto px-6 py-4 flex items-center justify-between">
 <div class="flex items-center gap-3">
    <img src="logo.jpg" alt="Logo" class="h-10 w-10 object contain">
<h1 class="text-xl font-bold text-indigo-700">
    Mi Sitio Web
</h1>
</div>

<nav class="space-x-6 text-sm font-medium">
    <a href="#"  class="text-gray-600 hover:text-indigo-600">Inicio</a> |
    <a href="#"  class="text-gray-600 hover:text-indigo-600">Carreras</a> |
    <a href="#"  class="text-gray-600 hover:text-indigo-600">Preguntas frecuentes</a> |
    <a href="#"  class="text-gray-600 hover:text-indigo-600">Contacto</a>
</nav>
</div>
    </header>
    <!--Contenido Principal-->
    <main class="flex-1">
        <div class="max-w-4xl mx-auto px-6 py-10">
@yield('content')
        </div>
</main>
<!--Pie de página-->
<footer class="bg-gray-900 text-gray-300">
    <div class="max-w-7x1 mx-auto px-6 py-6 text-sm text-center space-y-1">
        <p><strong>Nombre:<</strong> Fabrizio Villalvazo</p>
        <p><strong>Grupo:</strong> 5°C</p>
        <p><strong>Núm. de lista:</strong> 28</p>
<p><strong>Materia:</strong> Páginas Web</p>
    </div>
</footer>
</body>
</html>