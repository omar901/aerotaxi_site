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


@livewire('picture-expand')

            </div> 
        </div> 
        
        <h1 class="text-center font-bold font-4xl text-blue-300 py-6">
                    787 718-8869
                    
                </h1>
                <h1 class="text-center font-bold font-4xl text-blue-300 py-6">
                    reservations@taxiaereopr.travel
                    
                </h1>


        @livewireScripts  
    </body>
</html>
