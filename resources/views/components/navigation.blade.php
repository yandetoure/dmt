<nav x-data="{ open: false, scrolled: false }"
     @scroll.window="scrolled = window.pageYOffset > 30"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-500">
    <div :class="scrolled ? 'bg-[#050f0d]/95 backdrop-blur-2xl border-b border-white/5 shadow-2xl' : 'bg-transparent'"
         class="transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center h-20">
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-dmt-teal rounded-xl flex items-center justify-center font-black text-white text-xl group-hover:rotate-12 transition-transform duration-300">D</div>
                <span class="font-black text-xl text-white tracking-tighter">DMT <span class="text-dmt-teal">Recyclage</span></span>
            </a>
            <div class="hidden md:flex items-center gap-10">
                <a href="/a-propos" class="text-white/60 hover:text-white text-sm font-bold uppercase tracking-widest transition-colors">À Propos</a>
                <a href="/#services" class="text-white/60 hover:text-white text-sm font-bold uppercase tracking-widest transition-colors">Services</a>
                <a href="/#contact" class="px-7 py-3 bg-dmt-teal text-white font-bold rounded-xl hover:bg-dmt-teal-600 transition-all hover:scale-105 text-sm">Devis Gratuit</a>
            </div>
            <button @click="open=!open" class="md:hidden text-white/60 hover:text-white p-2">
                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden bg-[#050f0d]/98 backdrop-blur-2xl border-t border-white/5 px-6 py-8 space-y-4">
        <a href="/a-propos" class="block py-4 text-white/70 font-bold hover:text-white text-lg">À Propos</a>
        <a href="/#services" class="block py-4 text-white/70 font-bold hover:text-white text-lg">Services</a>
        <a href="/#contact" class="block mt-4 py-5 text-center bg-dmt-teal text-white font-bold text-lg rounded-2xl">Obtenir un Devis</a>
    </div>
</nav>
