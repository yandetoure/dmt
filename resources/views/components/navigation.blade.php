<nav x-data="{ open: false, scrolled: false }"
     @scroll.window="scrolled = window.pageYOffset > 30"
     class="fixed top-0 left-0 right-0 z-50 px-6 pt-5">
    <div :class="scrolled
            ? 'bg-white/95 backdrop-blur-2xl shadow-xl border-slate-200/60'
            : 'bg-white/10 backdrop-blur-md border-white/20'"
         class="max-w-6xl mx-auto px-6 rounded-2xl border transition-all duration-500">
        <div class="flex justify-between items-center h-16">
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-9 h-9 bg-dmt-teal rounded-xl flex items-center justify-center font-black text-white text-lg group-hover:rotate-12 transition-transform duration-300 shadow-md shadow-dmt-teal/30">D</div>
                <span class="font-black text-lg tracking-tighter" :class="scrolled ? 'text-slate-900' : 'text-white'">
                    DMT <span class="text-dmt-teal">Recyclage</span>
                </span>
            </a>
            <div class="hidden md:flex items-center gap-8">
                <a href="/a-propos" class="text-xs font-bold transition-all duration-300 tracking-widest uppercase hover:text-dmt-teal" :class="scrolled ? 'text-slate-600' : 'text-white/80'">À Propos</a>
                <a href="/#services" class="text-xs font-bold transition-all duration-300 tracking-widest uppercase hover:text-dmt-teal" :class="scrolled ? 'text-slate-600' : 'text-white/80'">Services</a>
                <a href="/#contact" class="px-5 py-2.5 bg-dmt-teal text-white font-bold rounded-xl hover:bg-dmt-teal-600 transition-all hover:scale-105 text-xs shadow-md shadow-dmt-teal/20">Devis Gratuit</a>
            </div>
            <button @click="open=!open" class="md:hidden p-2 rounded-lg transition-all"
                    :class="scrolled ? 'text-slate-600 hover:bg-slate-100' : 'text-white hover:bg-white/10'">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="max-w-6xl mx-auto mt-2 bg-white/95 backdrop-blur-2xl border border-slate-200/60 rounded-2xl shadow-xl overflow-hidden">
        <div class="px-6 py-6 space-y-3">
            <a href="/a-propos" @click="open=false" class="block px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-100 rounded-xl transition-all">À Propos</a>
            <a href="/#services" @click="open=false" class="block px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-100 rounded-xl transition-all">Nos Services</a>
            <div class="pt-2">
                <a href="/#contact" @click="open=false" class="block w-full py-4 text-center bg-dmt-teal text-white font-bold rounded-xl text-sm">Obtenir un Devis</a>
            </div>
        </div>
    </div>
</nav>
