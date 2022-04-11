<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Ebook</title>

    

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/submit.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/submit.js') }}" defer></script>
    <link rel="shortcut icon" href="{{asset('img/icon.png')}}" type="image/x-icon">


</head>

<body class="antialiased">
    <div>

        <!-- Section 1 -->
        <section class="w-full bg-white">

            <div class="mx-auto max-w-7xl">
                <div class="flex flex-col lg:flex-row">
                    <div class="relative w-full  bg-cover lg:w-6/12 xl:w-7/12 bg-pink-100">
                        <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                            <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                                <div class="relative mt-8">
                                    <img src="{{asset('img/masajes.jpg')}}" alt="masajes">
                                    <h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">Te interesa acceder a nuevas técnicas de masajes</h2>
                                    <img src="https://i.postimg.cc/T1J0hFRh/ebook.png" alt="ebook">
                                </div>
                                <p class="text-2xl text-gray-700 py-4">Con esta información podras ofrecer un mejor servicio, o en caso tal, aprender a dar un excelente masaje vas a quedar como un rey o una reina. Descarga nuestro Ebook Totalmente gratis y vuélvete profesional con esta técnica.</p>
                              
                                
                            </div>
                        </div>
                      
                    </div>

                    <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                        <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                            <h4 class="w-full text-3xl font-bold">Descarga nuestro Ebook Totalmente gratis</h4>
                            
                            
                           @livewire('form-submit')

                            
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>

    @stack('modals')

        @livewireScripts
    
</body>
</html>
