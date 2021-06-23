<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @livewireStyles
    </head>
    
    <body class="bg-gray-100">
        <div class="flex-1 max-w-4xl p-10 mx-auto">
            <div class="mx-auto px-8">
                <img class="h-100 mx-auto py-2" src="img/taxiaereologo_shadow_trans.png" alt="logo">
            </div> 
               
            <div>
                <img class="h-400 rounded-2xl shadow-lg mx-auto" src="img/flamenco_tank.jpg" alt="Playa Caracas Vieques PR">
                </div>
                <div class="mx-auto">
                <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8 mt-3">
            </div> 
       

        @livewireScripts  
    </body>
</html>
