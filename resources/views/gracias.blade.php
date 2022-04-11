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
  @if  (session('info'))
    <div class="w-full py-4 px-12 bg-pink-500 text-white">
        <p class="mx-8 text-center">{!!(session('info'))!!}</p>
    </div>
  @endif
    

    <!-- Section 1 -->
    <section class="px-2 py-32 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div
                        class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                        <h1
                            class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                            <span class="block xl:inline">Hey</span>
                            <span class="block text-pink-500 xl:inline">Quiero contarte algo que te puede interesar</span>
                        </h1>
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">El drenaje linfático reductor o brasileño es una de las técnicas más populares y demandadas en el mundo de la estética, es un tratamiento no invasivo 100% manual con resultados garantizados desde la primer sesión.

                            Aprenderás 6 técnicas brasileñas: Moldeado, Linfático, Post operatorio, Auto drenaje, Lifting facial y Cierre de Costillas.
                            Podrás descargar tu Certificado y tendrás el derecho y la posibilidad de emitir tu Cédula de identidad Internacional para poder trabajar como especialista en el “Drenaje Linfático Brasileño”</p>
                        <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                            <a href="https://bit.ly/3E7LGyg"
                                class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-pink-500 rounded-md sm:mb-0 hover:bg-pink-600 sm:w-auto"  target="_blank" rel="noopener noreferrer">
                                Quiero este curso
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <a href="https://bit.ly/3E7LGyg" target="_blank" rel="noopener noreferrer">
                            <img src="https://static-media.hotmart.com/hPm0LuGpqwWUvANUdQoHZFoiqv4=/filters:background_color(white)/hotmart/product_pictures/6b12e301-f6de-4471-8f8e-b34b6b1adc0f/F631D919516B4674A774EA273F7E3F25.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Section 2 -->
    <section class="py-8 leading-7 text-gray-900 bg-white sm:py-12 md:py-16 lg:py-24">
        <div class="max-w-6xl px-4 px-10 mx-auto border-solid lg:px-12">
            <div
                class="flex flex-col items-start leading-7 text-gray-900 border-0 border-gray-200 lg:items-center lg:flex-row">
                <div class="box-border flex-1 text-center border-solid sm:text-left">
                    <h2
                        class="m-0 text-4xl font-semibold leading-tight tracking-tight text-left text-black border-0 border-gray-200 sm:text-5xl">
                        Aumenta tus posibilidaes
                    </h2>
                    <p class="mt-2 text-xl text-left text-gray-900 border-0 border-gray-200 sm:text-2xl">
                        No lo dejes para otro momento, es aquí y ahora.
                    </p>
                </div>
                <a href="https://bit.ly/3Kt6BOl"
                    class="inline-flex items-center justify-center w-full px-5 py-4 mt-6 ml-0 font-sans text-base leading-none text-white no-underline bg-pink-500 border border-pink-500 border-solid rounded cursor-pointer md:w-auto lg:mt-0 hover:bg-pink-600 hover:border-pink-600 hover:text-white focus-within:bg-pink-600 focus-within:border-pink-600 focus-within:text-white sm:text-lg lg:ml-6 md:text-xl"  target="_blank" rel="noopener noreferrer">
                    Comprar Directamente
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    @stack('modals')

    @livewireScripts

</body>

</html>
