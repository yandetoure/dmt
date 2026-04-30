<nav x-data="{ mobileMenuOpen: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     class="fixed top-6 left-0 right-0 z-50 transition-all duration-500 px-4">
    <div :class="{ 'bg-white/90 backdrop-blur-xl shadow-2xl border-slate-200/50 py-2': scrolled, 'bg-white/20 backdrop-blur-md border-transparent py-4': !scrolled }"
         class="max-w-6xl mx-auto px-6 sm:px-8 rounded-full border transition-all duration-500">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-dmt-teal rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">D</span>
                    </div>
                    <span class="text-2xl font-extrabold tracking-tight text-slate-900">
                        DMT <span class="text-dmt-teal">Recyclage</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/a-propos" class="text-sm font-bold text-slate-600 hover:text-dmt-teal transition-colors tracking-wide uppercase">À propos</a>
                <a href="#bio-dechets" class="text-sm font-bold text-slate-600 hover:text-dmt-teal transition-colors tracking-wide uppercase">Bio-déchets</a>
                <a href="#materiel" class="text-sm font-bold text-slate-600 hover:text-dmt-teal transition-colors tracking-wide uppercase">Matériel</a>
                <a href="#demantelement" class="text-sm font-bold text-slate-600 hover:text-dmt-teal transition-colors tracking-wide uppercase">Expertise</a>
                <a href="#contact" class="btn-primary !px-6 !py-2.5 !text-sm">Contact / Devis</a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-600 hover:text-slate-900 focus:outline-none p-2 rounded-lg hover:bg-slate-100 transition-colors">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="md:hidden bg-white border-b border-slate-100 shadow-2xl">
        <div class="px-4 pt-4 pb-6 space-y-2 sm:px-3">
            <a href="#bio-dechets" class="block px-4 py-3 text-base font-bold text-slate-600 hover:bg-slate-50 rounded-xl">Bio-déchets</a>
            <a href="#materiel" class="block px-4 py-3 text-base font-bold text-slate-600 hover:bg-slate-50 rounded-xl">Le Matériel</a>
            <a href="#demantelement" class="block px-4 py-3 text-base font-bold text-slate-600 hover:bg-slate-50 rounded-xl">Démantèlement</a>
            <a href="#contact" class="block px-4 py-4 text-center btn-primary">Obtenir un Devis</a>
        </div>
    </div>
</nav>
