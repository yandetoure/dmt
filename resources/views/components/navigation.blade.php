<nav x-data="{ open: false, scrolled: false, dropdown: null }"
     @scroll.window="scrolled = window.pageYOffset > 30"
     @click.away="dropdown = null"
     class="fixed top-0 left-0 right-0 z-50 px-6 pt-5">

    <div :class="scrolled
            ? 'bg-white/95 backdrop-blur-2xl shadow-xl border-slate-200/60'
            : 'bg-white/10 backdrop-blur-md border-white/20'"
         class="max-w-7xl mx-auto px-6 rounded-2xl border transition-all duration-500">
        <div class="flex justify-between items-center h-16">

            {{-- Logo --}}
            <a href="/" class="flex items-center gap-3 group shrink-0">
                <div class="w-9 h-9 bg-dmt-teal rounded-xl flex items-center justify-center font-black text-white text-lg group-hover:rotate-12 transition-transform duration-300 shadow-md shadow-dmt-teal/30">D</div>
                <span class="font-black text-lg tracking-tighter" :class="scrolled ? 'text-slate-900' : 'text-white'">
                    DMT <span class="text-dmt-teal">Recyclage</span>
                </span>
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden lg:flex items-center gap-1">

                {{-- Nos Services --}}
                <div class="relative">
                    <button @click="dropdown = dropdown === 'services' ? null : 'services'"
                            class="flex items-center gap-1.5 px-4 py-2 text-xs font-bold uppercase tracking-widest rounded-xl transition-all duration-200 hover:bg-white/10"
                            :class="scrolled ? 'text-slate-600 hover:bg-slate-100' : 'text-white/80'">
                        Nos Services
                        <svg class="w-3 h-3 transition-transform duration-200" :class="dropdown === 'services' ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="dropdown === 'services'" x-cloak
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="absolute top-full left-0 mt-2 w-56 bg-white rounded-2xl shadow-2xl border border-slate-100 overflow-hidden py-2">
                        @foreach([
                            ['Les bacs plastiques', '/materiel#bac'],
                            ['Les caisses palettes', '/materiel#caisse'],
                            ['Les rolls', '/materiel#roll'],
                            ['Les bennes', '/materiel#benne'],
                            ["Les points d'apport volontaires", '/materiel#pav'],
                            ['Les bioseaux', '/materiel#bioseau'],
                        ] as $item)
                        <a href="{{ $item[1] }}" @click="dropdown=null" class="block px-5 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-dmt-teal font-medium transition-colors">{{ $item[0] }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Matériel --}}
                <div class="relative">
                    <button @click="dropdown = dropdown === 'materiel' ? null : 'materiel'"
                            class="flex items-center gap-1.5 px-4 py-2 text-xs font-bold uppercase tracking-widest rounded-xl transition-all duration-200"
                            :class="scrolled ? 'text-slate-600 hover:bg-slate-100' : 'text-white/80 hover:bg-white/10'">
                        Le Matériel
                        <svg class="w-3 h-3 transition-transform duration-200" :class="dropdown === 'materiel' ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="dropdown === 'materiel'" x-cloak
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="absolute top-full left-0 mt-2 w-52 bg-white rounded-2xl shadow-2xl border border-slate-100 overflow-hidden py-2">
                        @foreach([
                            ['Les bacs plastiques', '/materiel#bac'],
                            ['Les caisses palettes', '/materiel#caisse'],
                            ['Les rolls', '/materiel#roll'],
                            ['Les bennes', '/materiel#benne'],
                            ["Les points d'apport volontaires", '/materiel#pav'],
                            ['Les bioseaux', '/materiel#bioseau'],
                        ] as $item)
                        <a href="{{ $item[1] }}" @click="dropdown=null" class="block px-5 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-dmt-teal font-medium transition-colors">{{ $item[0] }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Réglementation --}}
                <div class="relative">
                    <button @click="dropdown = dropdown === 'regl' ? null : 'regl'"
                            class="flex items-center gap-1.5 px-4 py-2 text-xs font-bold uppercase tracking-widest rounded-xl transition-all duration-200"
                            :class="scrolled ? 'text-slate-600 hover:bg-slate-100' : 'text-white/80 hover:bg-white/10'">
                        Réglementation
                        <svg class="w-3 h-3 transition-transform duration-200" :class="dropdown === 'regl' ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="dropdown === 'regl'" x-cloak
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 translate-y-2"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         class="absolute top-full left-0 mt-2 w-56 bg-white rounded-2xl shadow-2xl border border-slate-100 overflow-hidden py-2">
                        @foreach([
                            ['Loi AGEC', '#contact'],
                            ['Biodéchets obligatoire', '#contact'],
                            ['Traçabilité des déchets', '#contact'],
                        ] as $item)
                        <a href="{{ $item[1] }}" @click="dropdown=null" class="block px-5 py-3 text-sm text-slate-600 hover:bg-slate-50 hover:text-dmt-teal font-medium transition-colors">{{ $item[0] }}</a>
                        @endforeach
                    </div>
                </div>

                {{-- Matières --}}
                <a href="#services" class="px-4 py-2 text-xs font-bold uppercase tracking-widest rounded-xl transition-all duration-200"
                   :class="scrolled ? 'text-slate-600 hover:bg-slate-100' : 'text-white/80 hover:bg-white/10'">Matières</a>

                {{-- Actualités --}}
                <a href="#" class="px-4 py-2 text-xs font-bold uppercase tracking-widest rounded-xl transition-all duration-200"
                   :class="scrolled ? 'text-slate-600 hover:bg-slate-100' : 'text-white/80 hover:bg-white/10'">Actualités</a>

                {{-- CTA --}}
                <a href="{{ url('/#contact') }}" class="ml-2 px-5 py-2.5 bg-dmt-teal text-white font-bold rounded-xl hover:bg-dmt-teal-600 transition-all hover:scale-105 text-xs shadow-md shadow-dmt-teal/20">
                    Contact / Devis
                </a>
            </div>

            {{-- Mobile button --}}
            <button @click="open=!open" class="lg:hidden p-2 rounded-xl transition-all"
                    :class="scrolled ? 'text-slate-600 hover:bg-slate-100' : 'text-white hover:bg-white/10'">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         class="lg:hidden max-w-7xl mx-auto mt-2 bg-white/95 backdrop-blur-2xl border border-slate-200/60 rounded-2xl shadow-xl overflow-hidden">
        <div class="px-4 py-4 space-y-1">
            <div x-data="{sub: null}">
                <button @click="sub = sub === 's' ? null : 's'" class="w-full flex justify-between items-center px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50 rounded-xl">
                    Nos Services <svg class="w-4 h-4 transition-transform" :class="sub==='s'?'rotate-180':''" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
                <div x-show="sub==='s'" class="pl-4 space-y-1 mt-1">
                    @foreach(['Les bacs plastiques','Les caisses palettes','Les rolls','Les bennes',"Les points d'apport volontaires",'Les bioseaux'] as $item)
                    <a href="#services" @click="open=false" class="block px-4 py-2 text-sm text-slate-500 hover:text-dmt-teal hover:bg-slate-50 rounded-xl">{{ $item }}</a>
                    @endforeach
                </div>
            </div>
            <a href="#" @click="open=false" class="block px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50 rounded-xl">Le Matériel</a>
            <a href="#" @click="open=false" class="block px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50 rounded-xl">Réglementation</a>
            <a href="#" @click="open=false" class="block px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50 rounded-xl">Matières</a>
            <a href="#" @click="open=false" class="block px-4 py-3 text-sm font-bold text-slate-700 hover:bg-slate-50 rounded-xl">Actualités</a>
            <div class="pt-2 pb-2">
                <a href="{{ url('/#contact') }}" @click="open=false" class="block w-full py-3 text-center bg-dmt-teal text-white font-bold rounded-xl text-sm">Contact / Devis</a>
            </div>
        </div>
    </div>
</nav>
