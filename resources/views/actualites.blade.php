<x-app-layout>

@php
$articles = [
    [
        'slug'    => 'gerer-recyclage-dechets-entreprise',
        'tag'     => 'News',
        'date'    => '21 Décembre 2017',
        'title'   => 'Comment (bien) gérer le recyclage des déchets en entreprise ?',
        'excerpt' => 'Maintenant que vous avez convaincu vos associés de mettre en place le recyclage des déchets dans votre entreprise, reste à savoir comment procéder concrètement. Voici nos conseils terrain.',
        'read'    => '5 min',
        'img'     => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=1200&q=80',
        'featured'=> true,
    ],
    [
        'slug'    => 'dmt-recyclage-arrive-a-bordeaux',
        'tag'     => 'News',
        'date'    => '28 Août 2017',
        'title'   => 'DMT Recyclage arrive à Bordeaux',
        'excerpt' => 'Acteur majeur de la gestion des déchets en Île-de-France depuis plusieurs années, DMT Recyclage s\'étend aujourd\'hui sur le plan national.',
        'read'    => '3 min',
        'img'     => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=800&q=80',
        'featured'=> false,
    ],
    [
        'slug'    => 'decret-tri-dechets-entreprise',
        'tag'     => 'News',
        'date'    => '25 Novembre 2016',
        'title'   => 'Décret sur le tri des déchets en entreprise : ça change quoi ?',
        'excerpt' => 'C\'était dans l\'air depuis quelque temps, c\'est effectif depuis le 1er juillet : le décret du 10 mars concernant le tri obligatoire des déchets est entré en vigueur.',
        'read'    => '4 min',
        'img'     => 'https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?w=800&q=80',
        'featured'=> false,
    ],
    [
        'slug'    => 'prevenir-reduire-production-dechets',
        'tag'     => 'Réglementation',
        'date'    => '1er Octobre 2014',
        'title'   => 'Prévenir ou réduire la production et la nocivité des déchets',
        'excerpt' => 'Déjà en 1975, l\'État se préoccupait de prévenir ou réduire la production et la nocivité des déchets, notamment en agissant sur la fabrication et sur la distribution des produits.',
        'read'    => '6 min',
        'img'     => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=800&q=80',
        'featured'=> false,
    ],
    [
        'slug'    => 'grenelle-de-lenvironnement',
        'tag'     => 'Réglementation',
        'date'    => '1er Septembre 2014',
        'title'   => 'Grenelle de l\'environnement',
        'excerpt' => 'Il existe deux principales lois sur l\'élimination des déchets et les installations classées pour la protection de l\'environnement. Décryptage complet.',
        'read'    => '5 min',
        'img'     => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=800&q=80',
        'featured'=> false,
    ],
    [
        'slug'    => 'grenelle-2-loi-environnement',
        'tag'     => 'Réglementation',
        'date'    => '1er Août 2014',
        'title'   => 'Grenelle 2 : une nouvelle loi en faveur de l\'environnement',
        'excerpt' => 'À l\'issue du premier Grenelle de l\'environnement, une loi relative à sa mise en œuvre a été votée, mais le Grenelle 2 a permis d\'aller plus loin en fixant des objectifs ambitieux.',
        'read'    => '4 min',
        'img'     => 'https://images.unsplash.com/photo-1604187351574-c75ca79f5807?w=800&q=80',
        'featured'=> false,
    ],
];
$featured = $articles[0];
$rest = array_slice($articles, 1);
@endphp

{{-- ── HERO ─────────────────────────────────────────── --}}
<section class="relative pt-40 pb-20 bg-white overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-32 right-1/4 w-[600px] h-[600px] bg-dmt-teal/5 rounded-full blur-[120px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="flex items-center gap-3 mb-8">
            <span class="w-10 h-px bg-dmt-teal"></span>
            <span class="text-dmt-teal text-xs font-black uppercase tracking-[0.45em]">News & Blog</span>
        </div>

        <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-16">
            <h1 class="text-5xl md:text-7xl font-black text-slate-900 leading-[1.05] max-w-2xl">
                Actualités &<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-dmt-teal to-emerald-500">Points de vue</span>.
            </h1>
            <p class="text-slate-500 text-lg max-w-xs leading-relaxed">
                Réglementation, bonnes pratiques et actualités du monde du recyclage professionnel.
            </p>
        </div>

        {{-- ── FEATURED ARTICLE ──────────────────────── --}}
        <a href="/actualites/{{ $featured['slug'] }}"
           class="group relative rounded-[3rem] overflow-hidden bg-white border border-slate-200 shadow-xl cursor-pointer hover:shadow-2xl hover:border-dmt-teal/30 transition-all duration-500 block">
            <div class="grid grid-cols-1 lg:grid-cols-5 min-h-[500px]">
                {{-- Image --}}
                <div class="lg:col-span-3 relative overflow-hidden">
                    <img src="{{ $featured['img'] }}" alt="{{ $featured['title'] }}"
                         class="w-full h-72 lg:h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent to-white/80 hidden lg:block"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white/20 to-transparent lg:hidden"></div>
                    <span class="absolute top-8 left-8 bg-dmt-teal text-white text-xs font-black uppercase tracking-widest px-4 py-2 rounded-full shadow-lg">
                        {{ $featured['tag'] }}
                    </span>
                </div>

                {{-- Content --}}
                <div class="lg:col-span-2 flex flex-col justify-center p-10 lg:pl-2 lg:pr-14">
                    <div class="flex items-center gap-3 text-slate-400 text-xs font-medium mb-6">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        {{ $featured['date'] }}
                        <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        {{ $featured['read'] }} de lecture
                    </div>

                    <h2 class="text-2xl md:text-3xl font-black text-slate-900 leading-tight mb-5 group-hover:text-dmt-teal transition-colors duration-300">
                        {{ $featured['title'] }}
                    </h2>

                    <p class="text-slate-500 text-base leading-relaxed mb-10">
                        {{ $featured['excerpt'] }}
                    </p>

                    <div class="flex items-center gap-3 text-dmt-teal font-bold text-sm">
                        <span>Lire l'article</span>
                        <div class="w-8 h-8 rounded-full border-2 border-dmt-teal/30 flex items-center justify-center group-hover:bg-dmt-teal group-hover:border-dmt-teal transition-all duration-300">
                            <svg class="w-4 h-4 group-hover:text-white text-dmt-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</section>

{{-- ── ARTICLES GRID ─────────────────────────────────── --}}
<section class="bg-slate-50 py-24">
    <div class="max-w-7xl mx-auto px-6">

        <div class="flex items-center justify-between mb-14">
            <h2 class="text-2xl font-black text-slate-900">Tous les articles</h2>
            <div class="hidden md:flex gap-2">
                @foreach(['Tout', 'News', 'Réglementation'] as $f)
                <button class="px-5 py-2 rounded-full text-xs font-bold uppercase tracking-widest transition-all
                    {{ $loop->first ? 'bg-dmt-teal text-white shadow-lg shadow-dmt-teal/20' : 'bg-white text-slate-500 hover:bg-slate-100 hover:text-slate-700 border border-slate-200' }}">
                    {{ $f }}
                </button>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($rest as $a)
            <a href="/actualites/{{ $a['slug'] }}"
               class="group bg-white rounded-[1.75rem] overflow-hidden border border-slate-100 hover:border-dmt-teal/30 hover:shadow-xl transition-all duration-400 hover:-translate-y-1 block">

                {{-- Image --}}
                <div class="relative h-52 overflow-hidden">
                    <img src="{{ $a['img'] }}" alt="{{ $a['title'] }}"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <span class="absolute top-4 left-4 text-[10px] font-black uppercase tracking-[0.2em] px-3 py-1.5 rounded-full
                        {{ $a['tag'] === 'News' ? 'bg-dmt-teal text-white' : 'bg-violet-500 text-white' }} shadow-md">
                        {{ $a['tag'] }}
                    </span>
                    <span class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-slate-600 text-[10px] font-bold px-3 py-1.5 rounded-full border border-slate-100 shadow-sm">
                        {{ $a['read'] }}
                    </span>
                </div>

                {{-- Content --}}
                <div class="p-7">
                    <time class="text-slate-400 text-xs font-medium flex items-center gap-2 mb-4">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        {{ $a['date'] }}
                    </time>

                    <h3 class="text-base font-black text-slate-900 leading-snug mb-3 group-hover:text-dmt-teal transition-colors duration-300">
                        {{ $a['title'] }}
                    </h3>

                    <p class="text-slate-500 text-sm leading-relaxed line-clamp-2 mb-5">
                        {{ $a['excerpt'] }}
                    </p>

                    <div class="flex items-center gap-2 text-dmt-teal text-xs font-bold">
                        Lire l'article
                        <svg class="w-3.5 h-3.5 translate-x-0 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ── NEWSLETTER CTA ────────────────────────────────── --}}
<section class="bg-white py-28">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <span class="inline-flex items-center gap-2 text-dmt-teal text-xs font-black uppercase tracking-[0.4em] mb-6">
            <span class="w-8 h-px bg-dmt-teal"></span>Newsletter<span class="w-8 h-px bg-dmt-teal"></span>
        </span>
        <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-5 leading-tight">
            Restez informé sur la<br><span class="text-dmt-teal">réglementation déchets</span>.
        </h2>
        <p class="text-slate-500 text-lg mb-10 max-w-xl mx-auto">
            Recevez nos analyses et actualités directement dans votre boîte mail.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 max-w-lg mx-auto">
            <input type="email" placeholder="votre@email.com"
                   class="flex-1 px-6 py-4 rounded-2xl border-2 border-slate-200 bg-slate-50 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-dmt-teal transition-colors text-sm font-medium">
            <button class="px-8 py-4 bg-dmt-teal text-white font-bold rounded-2xl hover:bg-dmt-teal-600 transition-all hover:scale-105 shadow-xl shadow-dmt-teal/20 whitespace-nowrap text-sm">
                S'inscrire →
            </button>
        </div>
    </div>
</section>

</x-app-layout>
