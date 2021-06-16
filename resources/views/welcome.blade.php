<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body class="bg-gray-100">
        <div class="flex-1 max-w-4xl p-10 mx-auto">
           <div class="grid grid-cols-5">
            <div class="mx-auto">
                <img class="h-auto" src="img/tx_transparent.jpg" alt="logo">
            </div> 
                <div>
                <h1 class="mt-5 ml-0 font-sans text-3xl font-bold text-green-600 ">AeroTaxi</h1>
            </div>    
        </div> 
        </div>   
    </body>
</html>
