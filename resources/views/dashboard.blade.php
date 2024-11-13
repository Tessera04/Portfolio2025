<x-app-layout>
<div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">
        <!-- Left Section -->
        <div class="bg-black-portfolio p-6 lg:p-12 relative overflow-hidden">
            <!-- Decorative circle -->
            <div class="absolute left-0 top-[20%] w-[300px] h-[300px] border border-white/10 rounded-full -translate-x-1/2"></div>

            <!-- Dots pattern -->
            <div class="absolute left-24 top-32 grid grid-cols-6 gap-2">
                @for ($i = 0; $i < 12; $i++)
                    <div class="hidden lg:block w-1.5 h-1.5 rounded-full bg-grey"></div>
                @endfor
            </div>
            
            <!-- Curved line -->
            <svg class="absolute left-0 bottom-0 w-64 h-64 text-white/5" viewBox="0 0 200 200" fill="none">
                <path d="M 0 200 Q 100 100 200 0" stroke="currentColor" stroke-width="2" />
            </svg>

            <!-- Main Content -->
            <div class="mt-24 lg:mt-32 space-y-6">
                <div>
                    <h2 class="text-mint text-5xl lg:text-7xl font-bold leading-tight font-bebasNeue tracking-wide">
                        <span id="dynamic-text">Frontend</span> Developer.
                    </h2>
                    <p class="text-mint mt-6 text-xl max-w-md">
                        Transformo ideas en plataformas digitales eficientes y seguras, desde el código hasta la experiencia del usuario
                    </p>
                </div>

                <div class="pt-20 flex gap-8 mt-12 text-mint">
                    <p class="max-w-sm">
                        Desarrollador fullstack especializado en Laravel, PHP y JavaScript. Creo soluciones web escalables y seguras para maximizar la eficiencia.
                    </p>
                    <p class="max-w-sm">
                        Experiencia probada en la creación de plataformas exitosas para clientes, enfocadas en transformar ideas en resultados tangibles.
                    </p>
                </div>
            </div>

            <!-- Footer -->
            <footer class="absolute bottom-6 left-6 lg:bottom-12 lg:left-12 text-white/50 text-sm">
                © {{ date('Y') }} Tessera04 All rights reserved.
            </footer>
        </div>

        <!-- Right Section -->
        <div class="bg-green p-6 lg:p-12 relative hidden lg:block">
            <!-- Dots pattern -->
            <div class="absolute right-24 top-24 grid grid-cols-6 gap-2">
                @for ($i = 0; $i < 24; $i++)
                    <div class="w-1.5 h-1.5 rounded-full bg-indigo-700/20"></div>
                @endfor
            </div>

            <!-- Stairs pattern -->
            <div class="absolute right-12 top-1/3">
                @for ($i = 0; $i < 5; $i++)
                    <div class="w-6 h-0.5 bg-indigo-700/20 ml-[2px]"></div>
                @endfor
            </div>

            <!-- Image container -->
            <div class="relative mt-12 mx-auto max-w-md" id="imageContainer">
                <div class="absolute inset-0 border border-indigo-700/20 -translate-x-4 translate-y-4"></div>
                <div class="relative aspect-[4/5] bg-green overflow-hidden">
                    <img src="{{ asset('img/profile-pic.png') }}" alt="Portrait photo" class="object-cover w-full h-full">
                </div>
            </div>

            <!-- Dots pattern bottom -->
            <div class="absolute right-12 bottom-24 flex gap-2">
                @for ($i = 0; $i < 4; $i++)
                    <div class="w-1.5 h-1.5 rounded-full bg-indigo-700/20"></div>
                @endfor
            </div>

            <!-- Curved line -->
            <svg class="absolute right-0 bottom-0 w-64 h-64 text-indigo-700/10" viewBox="0 0 200 200" fill="none">
                <path d="M 200 200 Q 100 100 0 0" stroke="currentColor" stroke-width="2" />
            </svg>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="fixed inset-0 bg-indigo-700 z-50 hidden lg:hidden">
            <div class="p-6">
                <button id="closeMenu" class="text-white absolute right-6 top-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <nav class="flex flex-col items-center justify-center h-full space-y-8">
                    <a href="#" class="text-lime-300 text-2xl">Home</a>
                    <a href="#" class="text-white text-2xl">About</a>
                    <a href="#" class="text-white text-2xl">Projects</a>
                    <a href="#" class="text-white text-2xl">Contact</a>
                </nav>
            </div>
        </div>
    </div>

    <script>
        const words = ["Frontend", "Backend", "Fullstack"];
        let wordIndex = 0;

        function changeWord() {
        const dynamicText = document.getElementById("dynamic-text");
        
        // Borra el texto actual
        dynamicText.style.animation = 'none'; // Resetea la animación
        dynamicText.offsetHeight; // Forza un repintado
        dynamicText.style.animation = ''; // Reinicia la animación

        // Cambia el texto
        dynamicText.textContent = words[wordIndex];
        
        // Reaplica las animaciones
        dynamicText.style.animation = 'typing 2s steps(' + words[wordIndex].length + ') 1s forwards, erase 2s steps(' + words[wordIndex].length + ') 5s forwards';
        
        // Incrementa el índice para la siguiente palabra
        wordIndex = (wordIndex + 1) % words.length;
        }

        // Cambiar palabra cada 7 segundos (2 segundos para el typing + 5 segundos para borrar)
        setInterval(changeWord, 3000);
    </script>
</x-app-layout>
