<!-- Folded Corner Platform Button - RIGHT SIDE -->
<div class="fixed top-0 right-0 z-[1000] cursor-pointer group"
    onclick="document.getElementById('login-modal').classList.remove('hidden')">
    <div class="corner-ribbon-triangle drop-shadow-md transition-all duration-300"></div>
    <div class="corner-ribbon-text pointer-events-none">PLATAFORMA</div>
</div>

<style>
    /* Responsive corner ribbon — scales with viewport */
    .corner-ribbon-triangle {
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 clamp(120px, 14vw, 160px) clamp(120px, 14vw, 160px) 0;
        border-color: transparent #0a2342 transparent transparent;
    }

    .group:hover .corner-ribbon-triangle {
        border-width: 0 clamp(130px, 15vw, 170px) clamp(130px, 15vw, 170px) 0;
        border-right-color: #1e4d8c;
    }

    .corner-ribbon-text {
        position: absolute;
        top: clamp(30px, 4vw, 45px);
        right: clamp(-35px, -3vw, -25px);
        width: clamp(140px, 16vw, 180px);
        text-align: center;
        font-weight: 800;
        color: white;
        font-size: clamp(0.5rem, 0.75vw, 0.7rem);
        letter-spacing: 3px;
        transform: rotate(45deg);
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        font-family: 'Montserrat', sans-serif;
    }
</style>

<!-- Navigation -->
<nav class="bg-[#0a0a0a] shadow-md fixed w-full z-50 top-0">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex-shrink-0 flex items-center">
                <img src="<?php echo htmlspecialchars($OUTPUT->image_url('logo', 'theme_ced'), ENT_QUOTES, 'UTF-8'); ?>"
                    alt="Colegio CED Logo" class="h-12 w-auto object-contain">
            </div>
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#inicio" class="nav-link font-heading font-semibold text-white">Inicio</a>
                <a href="#nosotros" class="nav-link font-heading font-semibold text-white">Nosotros</a>
                <a href="#pilares" class="nav-link font-heading font-semibold text-white">Pilares</a>
                <a href="#atletas" class="nav-link font-heading font-semibold text-white">Atletas</a>
                <a href="#oferta" class="nav-link font-heading font-semibold text-white">Oferta</a>
                <a href="#contacto"
                    class="bg-ced-blue text-white px-5 py-2 rounded-full font-heading font-semibold hover:bg-ced-light transition duration-300 transform hover:scale-105">Contacto</a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="text-ced-blue hover:text-ced-accent focus:outline-none"
                    onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#0a0a0a] border-t">
        <div class="px-4 py-4 space-y-3">
            <a href="#inicio" class="block text-white font-semibold">Inicio</a>
            <a href="#nosotros" class="block text-white font-semibold">Nosotros</a>
            <a href="#pilares" class="block text-white font-semibold">Pilares</a>
            <a href="#atletas" class="block text-white font-semibold">Atletas</a>
            <a href="#oferta" class="block text-white font-semibold">Oferta</a>
            <a href="#contacto" class="block text-white font-semibold">Contacto</a>
        </div>
    </div>
</nav>