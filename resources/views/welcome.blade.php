<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        {{-- Hero Section Start --}}
        <section id="home" class="pt-36">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full self-center px-4 lg:w-1/2">
                        <h1 class="text-base font-semibold text-primary md:text-xl">Halo Semua, Saya 
                            <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Nafis Athallah</span></h1>
                        <h2 class='font-medium text-slate-500 text-lg mb-5 lg:text-2xl'>Frontend Web Dev</h2>
                    <p class="font-medium text-slate-400 mb-10 leading-relaxed">Mahasiswa Politeknik Negeri Jember</p>
                </div>
                    <div class="w-full self-end px-4 lg:w-1/2">
                        <div class="relative mt-10 lg:mt-9 lg:right-0">
                            <img src="assets/img-1.png" alt="Nafis Athallah"
                            class="max-w-full mx-auto"/>
                            <span class="absolute -bottom-7 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                                <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#0ea5e9" d="M40.3,-51.2C45.2,-43.8,37.5,-24.5,42.9,-5.8C48.3,12.9,66.9,31.1,65.8,
                                    42.6C64.7,54,43.8,58.6,27.5,56.1C11.2,53.5,-0.6,43.7,-12.7,38C-24.9,32.3,-37.5,30.6,-44.3,
                                    23.4C-51.1,16.1,-52.1,3.4,-48.6,-7.3C-45.2,-17.9,-37.3,-26.5,-28.5,-33.2C-19.6,-39.9,-9.8,
                                    -44.7,3.9,-49.3C17.6,-54,35.3,-58.6,40.3,-51.2Z" transform="translate(100 100) scale(1.2)"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        {{-- Hero Section End --}}
    </body>
</html>
