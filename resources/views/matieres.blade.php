<x-app-layout>

@php
$matieres = [
    [
        'title' => 'Papier & Carton',
        'desc' => 'Collecte et valorisation de tous vos flux de papiers de bureau, archives confidentielles, cartons d\'emballage et chutes de production.',
        'icon' => '📄',
        'img' => 'https://images.unsplash.com/photo-1605152276897-4f618f831968?w=800&q=80',
        'color' => 'bg-blue-500',
    ],
    [
        'title' => 'Plastiques',
        'desc' => 'Gestion des différents polymères (PEHD, PP, PET, Film étirable). Tri par type pour assurer une régénération de haute qualité.',
        'icon' => '🥤',
        'img' => 'https://images.unsplash.com/photo-1595273670150-db0a3bf37bca?w=800&q=80',
        'color' => 'bg-teal-500',
    ],
    [
        'title' => 'Métaux Ferreux & Non-ferreux',
        'desc' => 'Récupération de ferrailles, aluminium, cuivre, inox et câbles électriques. Valorisation optimale selon les cours du marché.',
        'icon' => '⚙️',
        'img' => 'https://images.unsplash.com/photo-1558449028-b53a39d100fc?w=800&q=80',
        'color' => 'bg-slate-500',
    ],
    [
        'title' => 'DEEE',
        'desc' => 'Démantèlement et recyclage des Déchets d\'Équipements Électriques et Électroniques (informatique, téléphonie, électroménager).',
        'icon' => '💻',
        'img' => 'https://images.unsplash.com/photo-1550009158-9ebf69173e03?w=800&q=80',
        'color' => 'bg-violet-500',
    ],
    [
        'title' => 'Biodéchets',
        'desc' => 'Solutions de tri à la source pour les déchets organiques de restauration et de bureaux, en conformité avec la loi AGEC 2024.',
        'icon' => '🍎',
        'img' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=800&q=80',
        'color' => 'bg-emerald-500',
    ],
    [
        'title' => 'Bois & Palettes',
        'desc' => 'Collecte de palettes usagées et bois de classe A ou B. Valorisation énergétique ou matière selon l\'état du matériau.',
        'icon' => '🪵',
        'img' => 'https://images.unsplash.com/photo-1589923158776-cb4485d99fd6?w=800&q=80',
        'color' => 'bg-amber-700',
    ],
];
@endphp

{{-- HERO --}}
<section class="relative pt-48 pb-32 bg-slate-950 overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-dmt-teal/10 rounded-full blur-[120px]"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="max-w-3xl">
            <span class="text-dmt-teal text-xs font-black uppercase tracking-[0.4em] mb-4 block">Matières & Flux</span>
            <h1 class="text-5xl md:text-8xl font-black text-white leading-[1.1] mb-8">
                Tout ce que nous <span class="text-transparent bg-clip-text bg-gradient-to-r from-dmt-teal to-emerald-300">valorisons</span>.
            </h1>
            <p class="text-slate-400 text-xl leading-relaxed">
                De la collecte au traitement final, nous gérons une large gamme de matières pour garantir une traçabilité totale et un impact environnemental minimal.
            </p>
        </div>
    </div>
</section>

{{-- GRID --}}
<section class="py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($matieres as $m)
            <div class="group relative bg-slate-50 rounded-[2.5rem] overflow-hidden border border-slate-100 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2">
                {{-- Image --}}
                <div class="aspect-[16/10] overflow-hidden relative">
                    <img src="{{ $m['img'] }}" alt="{{ $m['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 flex items-center gap-3">
                        <span class="w-12 h-12 rounded-2xl bg-white/20 backdrop-blur-md flex items-center justify-center text-2xl shadow-lg border border-white/20">
                            {{ $m['icon'] }}
                        </span>
                        <h3 class="text-xl font-black text-white tracking-tight">{{ $m['title'] }}</h3>
                    </div>
                </div>
                
                {{-- Content --}}
                <div class="p-8">
                    <p class="text-slate-600 text-base leading-relaxed mb-8">
                        {{ $m['desc'] }}
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-black uppercase tracking-widest text-slate-400 group-hover:text-dmt-teal transition-colors">En savoir plus</span>
                        <div class="w-10 h-10 rounded-full bg-white border border-slate-200 flex items-center justify-center text-slate-400 group-hover:bg-dmt-teal group-hover:text-white group-hover:border-dmt-teal transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- INFO SECTION --}}
<section class="py-32 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="bg-slate-950 rounded-[4rem] p-12 md:p-24 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-dmt-teal/10 rounded-full blur-[100px]"></div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center relative z-10">
                <div>
                    <h2 class="text-4xl md:text-5xl font-black text-white mb-8 leading-tight">La traçabilité au cœur de notre <span class="text-dmt-teal">engagement</span>.</h2>
                    <p class="text-slate-400 text-lg mb-10">
                        Chaque kilo de matière collectée est pesé, répertorié et suivi jusqu'à son centre de traitement final. Nous vous fournissons tous les documents réglementaires (BSDD, certificats de destruction).
                    </p>
                    <ul class="space-y-4">
                        @foreach(['Pesée sur site ou en centre', 'Certificat de valorisation garanti', 'Conformité totale avec les éco-organismes'] as $item)
                        <li class="flex items-center gap-4 text-white font-medium">
                            <span class="w-6 h-6 rounded-lg bg-dmt-teal flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="relative">
                    <div class="aspect-video rounded-3xl overflow-hidden shadow-2xl border border-white/10">
                        <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=800&q=80" alt="Traçabilité" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-8 -right-8 bg-dmt-teal p-8 rounded-3xl shadow-2xl">
                        <div class="text-4xl font-black text-white">100%</div>
                        <div class="text-xs text-white/80 font-bold uppercase tracking-widest mt-1">Serein & Conforme</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FINAL CTA --}}
<section class="py-32 bg-white text-center">
    <div class="max-w-3xl mx-auto px-6">
        <h2 class="text-4xl font-black text-slate-900 mb-6">Vous avez un gisement spécifique ?</h2>
        <p class="text-slate-600 text-lg mb-12">Nous analysons vos flux et vous proposons la meilleure filière de valorisation pour vos déchets spéciaux ou industriels.</p>
        <a href="/#contact" class="inline-flex items-center gap-3 px-10 py-5 bg-dmt-teal text-white font-bold rounded-2xl hover:bg-dmt-teal-600 transition-all hover:scale-105 shadow-xl shadow-dmt-teal/20">
            Étude personnalisée
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>

</x-app-layout>
