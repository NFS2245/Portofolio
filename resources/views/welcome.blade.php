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
                        <h2 class='font-medium text-secondary text-lg mb-5 lg:text-2xl'>Frontend Web Dev</h2>
                    <p class="font-medium text-secondary mb-10 leading-relaxed">Mahasiswa Politeknik Negeri Jember</p>
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

        {{-- About Section Start --}}
        <section id="about" class="pt-36 pb-32">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full px-4 mb-10 lg:w-1/2">
                        <h4 class="font-bold uppercase text-primary text-lg">Tentang Saya</h4>
                        <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Lorem Ipsum</h2>
                        <p class="font-medium text-base text-secondary max-w-xl lg:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut voluptas corrupti inventore harum praesentium officiis consectetur eligendi sit!</p>
                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Mari Berteman</h3>
                        <p class="font-medium text-base text-secondary mb-6 lg:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil sunt fuga nobis illum?</p>
                    <div class="flex items-center">
                        {{-- github --}}
                        <a href="https://github.com/NFS2245"
                        target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-dark hover:border-primary hover:bg-primary hover:text-white">
                            <svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                    </div>
                    </div>
                </div>
            </div>

        </section>

        {{-- About Section End --}}
    </body>
</html>
