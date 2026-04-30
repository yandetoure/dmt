<x-app-layout>

{{-- ═══════════ HERO ═══════════ --}}
<section class="relative min-h-screen flex flex-col justify-center items-center overflow-hidden bg-[#050f0d]">
    {{-- animated background --}}
    <div class="absolute inset-0 z-0">
        <div class="absolute top-1/4 left-1/4 w-[600px] h-[600px] bg-dmt-teal/20 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[400px] h-[400px] bg-emerald-400/10 rounded-full blur-[80px] animate-pulse delay-700"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-transparent via-[#050f0d]/80 to-[#050f0d]"></div>
        {{-- grid overlay --}}
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(69,139,145,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(69,139,145,0.5) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    <div class="relative z-10 text-center max-w-5xl mx-auto px-6 pt-32">
        <div class="inline-flex items-center gap-3 mb-8 px-5 py-2.5 rounded-full border border-dmt-teal/30 bg-dmt-teal/5 backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-dmt-teal animate-ping"></span>
            <span class="text-dmt-teal text-xs font-bold uppercase tracking-[0.3em]">Île-de-France · Zéro Déchet</span>
        </div>
        <h1 class="text-7xl md:text-9xl font-black text-white leading-none tracking-tighter mb-8">
            La <span class="text-transparent bg-clip-text bg-gradient-to-r from-dmt-teal to-emerald-300">nouvelle</span><br>ère du<br>recyclage.
        </h1>
        <p class="text-xl text-slate-400 max-w-2xl mx-auto mb-16 leading-relaxed">
            Collecte, tri, démantèlement — des solutions sur-mesure pour les entreprises et collectivités qui veulent changer les choses.
        </p>
        <div class="flex flex-col sm:flex-row gap-5 justify-center">
            <a href="#contact" class="group px-10 py-5 bg-dmt-teal text-white font-bold text-lg rounded-2xl hover:bg-dmt-teal-600 transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-dmt-teal/30">
                Démarrer ma transition
                <span class="inline-block ml-2 transition-transform group-hover:translate-x-1">→</span>
            </a>
            <a href="#services" class="px-10 py-5 border border-white/10 text-white font-bold text-lg rounded-2xl hover:bg-white/5 transition-all duration-300 hover:border-white/30 backdrop-blur-md">
                Découvrir les services
            </a>
        </div>
    </div>

    {{-- stats bar --}}
    <div class="relative z-10 w-full max-w-4xl mx-auto mt-28 px-6">
        <div class="grid grid-cols-3 divide-x divide-white/10 border border-white/10 rounded-2xl bg-white/5 backdrop-blur-xl">
            @foreach([['15+', "Ans d'expertise"], ['95%', 'Valorisation'], ['100%', 'Traçabilité']] as $s)
            <div class="py-8 text-center">
                <div class="text-4xl font-black text-white mb-1">{{ $s[0] }}</div>
                <div class="text-xs text-slate-500 uppercase tracking-widest">{{ $s[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-10 animate-bounce text-white/20">
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
    </div>
</section>

{{-- ═══════════ SERVICES ═══════════ --}}
<section id="services" class="bg-[#07110e] py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="mb-20">
            <span class="text-dmt-teal text-sm font-bold uppercase tracking-[0.3em]">Ce que nous faisons</span>
            <h2 class="text-5xl md:text-7xl font-black text-white mt-4 leading-none">Nos Services</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-white/5 rounded-3xl overflow-hidden border border-white/5">
            @php
            $services = [
                ['icon' => '♻️', 'title' => 'Collecte & Recyclage', 'desc' => 'Enlèvement planifié, tri optimisé, valorisation matière.', 'img' => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=600&q=80'],
                ['icon' => '🌿', 'title' => 'Bio-déchets', 'desc' => 'Mise en conformité loi AGEC, bacs 240L–1000L, valorisation biogaz.', 'img' => 'https://images.unsplash.com/photo-1542601254-ca7983637e6f?w=600&q=80'],
                ['icon' => '🏗️', 'title' => 'Débarras & Déblaiement', 'desc' => 'Libération totale des espaces, intérieur comme extérieur.', 'img' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&q=80'],
                ['icon' => '⚙️', 'title' => 'Démantèlement industriel', 'desc' => 'Machines, lignes de production, installation complète.', 'img' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&q=80'],
                ['icon' => '🔧', 'title' => 'Curage & Démantèlement', 'desc' => 'Curage de bureaux, entrepôts et sites tertiaires.', 'img' => 'https://images.unsplash.com/photo-1541888941259-7a9496bc7a89?w=600&q=80'],
                ['icon' => '🏢', 'title' => 'Chantiers BTP', 'desc' => 'Gravats, déchets de construction, bennes 10–20m³.', 'img' => 'https://images.unsplash.com/photo-1590907047706-ee9c08cf3189?w=600&q=80'],
            ];
            @endphp
            @foreach($services as $s)
            <div class="group relative overflow-hidden bg-[#07110e] hover:bg-[#0d1f1a] transition-colors duration-500 p-10 cursor-pointer">
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    <img src="{{ $s['img'] }}" class="w-full h-full object-cover opacity-20 scale-110 group-hover:scale-100 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#07110e] via-[#07110e]/70 to-transparent"></div>
                </div>
                <div class="relative z-10">
                    <span class="text-4xl mb-6 block">{{ $s['icon'] }}</span>
                    <h3 class="text-xl font-bold text-white mb-3">{{ $s['title'] }}</h3>
                    <p class="text-slate-500 text-sm leading-relaxed group-hover:text-slate-300 transition-colors duration-300">{{ $s['desc'] }}</p>
                    <div class="mt-8 flex items-center gap-2 text-dmt-teal text-sm font-bold opacity-0 group-hover:opacity-100 transition-all duration-300 -translate-y-2 group-hover:translate-y-0">
                        <span>En savoir plus</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════ 3R ENGAGEMENT ═══════════ --}}
<section class="bg-white py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
        <div>
            <span class="text-dmt-teal text-sm font-bold uppercase tracking-[0.3em]">Notre Engagement</span>
            <h2 class="text-5xl md:text-6xl font-black text-slate-900 mt-4 mb-12 leading-tight">
                Au-delà de la collecte <span class="text-dmt-teal">traditionnelle.</span>
            </h2>
            <div class="space-y-10">
                @foreach([['01','Réduire','Travailler à la source pour limiter la génération de déchets grâce à des processus innovants.'],['02','Réutiliser','Prolonger la vie des matériaux avant de les recycler pour éviter toute extraction nouvelle.'],['03','Recycler','Transformer chaque déchet en matière première secondaire de haute qualité.']] as $r)
                <div class="flex gap-8 items-start group cursor-default">
                    <div class="w-14 h-14 shrink-0 rounded-2xl bg-slate-50 border border-slate-100 flex items-center justify-center font-black text-dmt-teal text-lg group-hover:bg-dmt-teal group-hover:text-white group-hover:border-dmt-teal transition-all duration-300">{{ $r[0] }}</div>
                    <div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2">{{ $r[1] }}</h4>
                        <p class="text-slate-500 leading-relaxed">{{ $r[2] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="relative">
            <div class="aspect-square rounded-[3rem] overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1542601254-ca7983637e6f?w=800&q=80" class="w-full h-full object-cover">
            </div>
            <div class="absolute -top-8 -right-8 w-40 h-40 bg-dmt-teal/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-8 -left-8 w-40 h-40 bg-emerald-300/10 rounded-full blur-3xl"></div>
            <div class="absolute top-8 -left-12 bg-white rounded-2xl shadow-xl p-6 border border-slate-100">
                <div class="text-3xl font-black text-dmt-teal">Janv. 2024</div>
                <div class="text-slate-500 text-sm mt-1">Loi AGEC en vigueur</div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════ SOLUTIONS ═══════════ --}}
<section class="bg-slate-950 py-32" x-data="{tab:'pro'}">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-dmt-teal text-sm font-bold uppercase tracking-[0.3em]">Vous êtes ?</span>
            <h2 class="text-5xl md:text-6xl font-black text-white mt-4">Solutions sur-mesure</h2>
        </div>
        <div class="flex justify-center gap-3 mb-16 flex-wrap">
            @foreach([['pro','Professionnel'],['collect','Collectivités & Syndics'],['part','Particulier']] as $t)
            <button @click="tab='{{ $t[0] }}'"
                :class="tab==='{{ $t[0] }}' ? 'bg-dmt-teal text-white shadow-lg shadow-dmt-teal/30' : 'text-slate-400 border border-white/10 hover:border-white/30'"
                class="px-8 py-4 rounded-2xl font-bold transition-all duration-300 text-sm">{{ $t[1] }}</button>
            @endforeach
        </div>
        @php
        $solutions = [
            'pro' => ['Professionnel', 'Optimisez votre chaîne écologique', 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&q=80', ['Collecte & traitement complet','Accompagnement expert dédié','Traçabilité 100% numérique']],
            'collect' => ['Collectivités & Syndics', 'Gestion intégrée durable', 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=800&q=80', ['Conformité réglementaire AGEC','Rapports de gestion détaillés','Solutions long terme adaptées']],
            'part' => ['Particulier', 'Simple, rapide, éco-responsable', 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80', ['Enlèvement rapide','Bennes petits volumes','Tri sélectif garanti']],
        ];
        @endphp
        @foreach($solutions as $key => $sol)
        <div x-show="tab==='{{ $key }}'" x-transition:enter="transition duration-500" x-transition:enter-start="opacity-0 translate-y-6" x-transition:enter-end="opacity-100 translate-y-0" @if($key!='pro') x-cloak @endif
             class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h3 class="text-4xl font-black text-white mb-4">{{ $sol[0] }}</h3>
                <p class="text-slate-400 text-xl mb-12">{{ $sol[1] }}</p>
                <ul class="space-y-6">
                    @foreach($sol[3] as $item)
                    <li class="flex items-center gap-4 text-slate-300 text-lg">
                        <span class="w-8 h-8 rounded-xl bg-dmt-teal/10 text-dmt-teal flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
                <a href="#contact" class="inline-block mt-12 btn-primary">Obtenir un devis gratuit</a>
            </div>
            <div class="rounded-[2.5rem] overflow-hidden shadow-2xl ring-1 ring-white/10 aspect-video">
                <img src="{{ $sol[2] }}" class="w-full h-full object-cover">
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ═══════════ À PROPOS ═══════════ --}}
<section class="bg-white py-32" x-data="{tab:'qui'}">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-20 items-start">
        <div class="relative sticky top-32">
            <div class="aspect-[3/4] rounded-[3rem] overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&q=80" class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-6 -right-6 bg-dmt-teal text-white p-8 rounded-3xl shadow-xl max-w-xs">
                <p class="font-bold italic text-lg leading-snug">"Votre partenaire vers l'entreprise Zéro Déchet."</p>
                <p class="text-dmt-teal-200 text-sm mt-3 font-bold">— DMT Recyclage</p>
            </div>
        </div>
        <div class="pt-4">
            <span class="text-dmt-teal text-sm font-bold uppercase tracking-[0.3em]">À Propos</span>
            <h2 class="text-5xl font-black text-slate-900 mt-4 mb-10">Qui sommes-nous ?</h2>
            <div class="flex gap-3 mb-10 flex-wrap">
                @foreach([['qui','Notre Histoire'],['valeurs','Nos Valeurs'],['mission','Notre Mission']] as $t)
                <button @click="tab='{{ $t[0] }}'"
                    :class="tab==='{{ $t[0] }}' ? 'bg-slate-900 text-white' : 'text-slate-500 border border-slate-200 hover:border-slate-400'"
                    class="px-6 py-3 rounded-xl font-bold text-sm transition-all duration-200">{{ $t[1] }}</button>
                @endforeach
            </div>
            <div class="min-h-[200px]">
                <div x-show="tab==='qui'" x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <p class="text-xl text-slate-600 leading-relaxed mb-6">Fondée en Île-de-France, DMT Recyclage accompagne entreprises et collectivités dans la gestion proactive de leurs ressources.</p>
                    <p class="text-slate-500 leading-relaxed">Nous ne sommes pas simplement un collecteur — nous sommes votre partenaire stratégique pour la transition vers l'économie circulaire.</p>
                </div>
                <div x-show="tab==='valeurs'" x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-cloak>
                    <p class="text-xl text-slate-600 leading-relaxed mb-6"><strong>Transparence</strong>, <strong>réactivité</strong> et <strong>engagement durable</strong> sont les trois piliers de notre identité.</p>
                    <p class="text-slate-500 leading-relaxed">Chaque intervention est traçable, documentée et remise à vos équipes sous forme de rapport complet.</p>
                </div>
                <div x-show="tab==='mission'" x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-cloak>
                    <p class="text-xl text-slate-600 leading-relaxed mb-6">Notre mission : aider chaque client à <strong>atteindre le Zéro Déchet</strong> en valorisant 100% de ses ressources.</p>
                    <p class="text-slate-500 leading-relaxed">Grâce à une flotte équipée et une équipe expérimentée, nous intervenons partout en Île-de-France sous 24h.</p>
                </div>
            </div>
            <div class="mt-12 grid grid-cols-3 gap-6">
                @foreach([['15+','Ans'],['95%','Valorisation'],['24h','Réactivité']] as $s)
                <div class="text-center p-6 rounded-2xl bg-slate-50 border border-slate-100">
                    <div class="text-3xl font-black text-dmt-teal">{{ $s[0] }}</div>
                    <div class="text-xs text-slate-400 uppercase tracking-widest mt-1">{{ $s[1] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ═══════════ TÉMOIGNAGES ═══════════ --}}
<section class="bg-slate-50 py-32">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-20">
            <span class="text-dmt-teal text-sm font-bold uppercase tracking-[0.3em]">Confiance</span>
            <h2 class="text-5xl md:text-6xl font-black text-slate-900 mt-4">Ils témoignent.</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['"Réactivité exemplaire sur nos collectes biodéchets. Un partenaire au top."','Marc L.','Dir. Logistique · LogiTrans'],
                ['"Chantier de curage terminé à l\'heure, propre et avec rapport complet. Parfait."','Sophie B.','Dir. Exploitation · ImmoGérance'],
                ['"Les rapports de traçabilité DEEE nous ont simplifié la vie. Recommandé."','Jean-Pierre D.','Facility Manager · TechHub'],
            ] as $t)
            <div class="bg-white rounded-3xl p-10 shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-500">
                <div class="flex gap-1 text-amber-400 text-xl mb-6">★★★★★</div>
                <p class="text-slate-700 text-lg leading-relaxed mb-8 italic">{{ $t[0] }}</p>
                <div class="flex items-center gap-4 border-t border-slate-100 pt-6">
                    <div class="w-12 h-12 rounded-2xl bg-dmt-teal/10 flex items-center justify-center text-dmt-teal font-black text-lg">
                        {{ strtoupper(substr($t[1], 0, 1)) }}
                    </div>
                    <div>
                        <div class="font-bold text-slate-900 text-sm">{{ $t[1] }}</div>
                        <div class="text-slate-400 text-xs">{{ $t[2] }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════ CTA ═══════════ --}}
<section id="contact" class="bg-[#050f0d] py-32">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <div class="relative rounded-[4rem] overflow-hidden bg-gradient-to-br from-dmt-teal to-emerald-600 p-20 shadow-2xl shadow-dmt-teal/20">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 30% 50%, white 1px, transparent 1px); background-size: 30px 30px;"></div>
            <div class="relative z-10">
                <h2 class="text-5xl md:text-6xl font-black text-white mb-6 leading-tight">Prêt à changer les choses ?</h2>
                <p class="text-xl text-white/80 mb-12 max-w-xl mx-auto">Diagnostic gratuit + devis personnalisé sous 24h.</p>
                <div class="flex flex-col sm:flex-row gap-5 justify-center">
                    <a href="mailto:contact@dmt-recyclage.fr" class="px-12 py-5 bg-white text-dmt-teal font-black text-xl rounded-2xl hover:scale-105 transition-transform shadow-2xl">Obtenir mon devis</a>
                    <a href="tel:0982381798" class="px-12 py-5 border-2 border-white/40 text-white font-bold text-xl rounded-2xl hover:bg-white/10 transition-all">09 82 38 17 98</a>
                </div>
                <div class="mt-12 flex flex-wrap justify-center gap-10 text-white/60 text-sm font-bold uppercase tracking-widest">
                    <span>✓ ISO 14001</span><span>✓ Traçabilité totale</span><span>✓ Intervention 24h</span>
                </div>
            </div>
        </div>
    </div>
</section>

</x-app-layout>
