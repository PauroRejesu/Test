<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicoalianza-Nomina</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="dark rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
        <div class="px-10">
            <nav class="px-10">
                <a href="{{ route('home') }}">
                    <img src="{{asset('images/psicoalianzaLogo.png')}}" 
                    class="h-10">
                </a>
            </nav>
        </div>
    </header>
    <main class="py=500">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="py-4 text-center">
        @auth
            
        @endauth
        <a href="{{url('logout')}}" class="text-sm text-gray-70 underline">Cerrar Sesion</a>
        <a href="{{url('login')}}" class="ml-4 text-sm text-gray-70 underline">Reportar un Error</a>
    </footer>
</body>
</html>