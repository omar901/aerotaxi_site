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
<<<<<<< HEAD
    <body>
        <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        <img src="/resources/img/tx_transparent.jpg" alt="sunset at ceiba pr">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div >
=======
    <body class="bg-gray-100">
        <div class="flex-1 max-w-4xl p-10 mx-auto">
           <div class="grid grid-cols-5">
            <div class="mx-auto">
                <img class="h-auto" src="img/tx_transparent.png" alt="logo">
            </div> 
>>>>>>> db982612c0d746c56923a66420fa87cabac99ded
                <div>
                <h1 class="mt-5 ml-0 font-sans text-3xl font-bold text-green-600 ">AeroTaxi</h1>
            </div>    
        </div> 
        </div>   
    </body>
</html>
