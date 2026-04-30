<x-app-layout>

@php
// Simuler la récupération de l'article par slug
$allArticles = [
    'gerer-recyclage-dechets-entreprise' => [
        'tag'    => 'News',
        'date'   => '21 Décembre 2017',
        'title'  => 'Comment (bien) gérer le recyclage des déchets en entreprise ?',
        'read'   => '5 min',
        'img'    => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=1600&q=90',
        'body'   => [
            'intro' => "Maintenant que vous avez convaincu vos associés de mettre en place le recyclage des déchets dans votre entreprise, reste à savoir comment procéder concrètement pour que cette démarche soit efficace, pérenne et conforme à la réglementation en vigueur.",
            'sections' => [
                ['title' => '1. Réaliser un diagnostic de vos flux de déchets', 'text' => "Avant de mettre en place quoi que ce soit, commencez par cartographier vos déchets : quels types, en quelle quantité, à quelle fréquence ? Ce diagnostic vous permettra de choisir les bons équipements (bacs, rolls, compacteurs) et la bonne fréquence de collecte."],
                ['title' => '2. Former et sensibiliser vos équipes', 'text' => "Le tri ne fonctionne que si tout le monde joue le jeu. Organisez une séance de sensibilisation, affichez les consignes de tri clairement à chaque poste, et désignez un référent déchets en interne qui sera l'interlocuteur de votre prestataire."],
                ['title' => '3. Choisir le bon prestataire', 'text' => "Un bon prestataire doit vous fournir les BSD (Bordereau de Suivi des Déchets) ou les certificats de valorisation pour chaque flux collecté. DMT Recyclage assure une traçabilité complète et vous accompagne dans votre mise en conformité."],
                ['title' => '4. Mesurer et améliorer en continu', 'text' => "Tenez un registre de vos tonnages par flux et par mois. Ces données vous permettront d'identifier vos marges de progression, de valoriser votre démarche RSE auprès de vos clients et d'ajuster votre contrat de collecte en conséquence."],
            ],
        ],
    ],
    'dmt-recyclage-arrive-a-bordeaux' => [
        'tag'    => 'News',
        'date'   => '28 Août 2017',
        'title'  => 'DMT Recyclage arrive à Bordeaux',
        'read'   => '3 min',
        'img'    => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=1600&q=90',
        'body'   => [
            'intro' => "Acteur majeur de la gestion des déchets en Île-de-France depuis plusieurs années, DMT Recyclage s'étend aujourd'hui sur le plan national en ouvrant un nouveau bureau à Bordeaux.",
            'sections' => [
                ['title' => 'Un ancrage national progressif', 'text' => "Depuis sa création, DMT Recyclage a bâti sa réputation en Île-de-France sur des valeurs de proximité, de réactivité et de traçabilité totale. L'ouverture bordelaise marque une étape décisive dans notre développement national."],
                ['title' => 'Même qualité de service, nouvelle région', 'text' => "Nos clients bordelais bénéficieront exactement du même niveau de service : collecte sur-mesure, pesée certifiée, certificats de valorisation et accompagnement réglementaire. Notre équipe locale est déjà opérationnelle."],
            ],
        ],
    ],
    'decret-tri-dechets-entreprise' => [
        'tag'    => 'News',
        'date'   => '25 Novembre 2016',
        'title'  => 'Décret sur le tri des déchets en entreprise : ça change quoi ?',
        'read'   => '4 min',
        'img'    => 'https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?w=1600&q=90',
        'body'   => [
            'intro' => "C'était dans l'air depuis quelque temps, c'est effectif depuis le 1er juillet : le décret du 10 mars concernant le tri obligatoire des déchets en entreprise est entré en vigueur. Que faut-il retenir ?",
            'sections' => [
                ['title' => 'Ce que dit le texte', 'text' => "Le décret impose aux producteurs de déchets non ménagers de trier à la source cinq flux prioritaires : papier/carton, métal, plastique, verre, bois. Ces matières doivent être orientées vers des filières de valorisation et ne peuvent plus être envoyées en mélange vers l'incinération ou l'enfouissement."],
                ['title' => 'Qui est concerné ?', 'text' => "Toutes les entreprises, collectivités et administrations qui produisent des quantités significatives de ces déchets. Les seuils varient selon le flux et la taille de la structure, mais la tendance est à l'extension progressive vers toutes les entreprises."],
                ['title' => 'Comment se mettre en conformité ?', 'text' => "Contactez un prestataire agréé comme DMT Recyclage pour réaliser un audit de vos flux. Nous vous proposerons une solution clé-en-main : équipements de tri, collecte planifiée, et tous les documents réglementaires."],
            ],
        ],
    ],
    'prevenir-reduire-production-dechets' => [
        'tag'    => 'Réglementation',
        'date'   => '1er Octobre 2014',
        'title'  => 'Prévenir ou réduire la production et la nocivité des déchets',
        'read'   => '6 min',
        'img'    => 'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=1600&q=90',
        'body'   => [
            'intro' => "Déjà en 1975, l'État se préoccupait de prévenir ou réduire la production et la nocivité des déchets, notamment en agissant sur la fabrication et sur la distribution des produits. Un principe toujours plus d'actualité.",
            'sections' => [
                ['title' => 'Le principe fondateur de la loi de 1975', 'text' => "La loi du 15 juillet 1975 relative à l'élimination des déchets et à la récupération des matériaux pose les bases de la politique française en matière de déchets. Elle consacre pour la première fois la notion de prévention à la source."],
                ['title' => 'Des décennies d\'évolution réglementaire', 'text' => "De 1975 à aujourd'hui, la réglementation n'a cessé de se renforcer : directive européenne de 2008, loi Grenelle, loi AGEC. Chaque texte réduit les possibilités d'élimination et augmente les obligations de valorisation."],
            ],
        ],
    ],
    'grenelle-de-lenvironnement' => [
        'tag'    => 'Réglementation',
        'date'   => '1er Septembre 2014',
        'title'  => 'Grenelle de l\'environnement',
        'read'   => '5 min',
        'img'    => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=1600&q=90',
        'body'   => [
            'intro' => "Il existe deux principales lois sur l'élimination des déchets et les installations classées pour la protection de l'environnement. Le Grenelle a profondément reconfiguré le paysage réglementaire français.",
            'sections' => [
                ['title' => 'Le Grenelle 1 : fixer le cap', 'text' => "La loi Grenelle 1 (août 2009) fixe les grands objectifs : réduire la production d'ordures ménagères de 7% par habitant sur 5 ans, augmenter le taux de recyclage de 35% à 45%, et atteindre 75% de recyclage pour les déchets des entreprises."],
                ['title' => 'Impact sur les entreprises', 'text' => "Pour les entreprises, le Grenelle marque un tournant : les obligations de tri deviennent progressivement contraignantes, avec des sanctions en cas de non-conformité. La traçabilité des déchets dangereux est renforcée."],
            ],
        ],
    ],
    'grenelle-2-loi-environnement' => [
        'tag'    => 'Réglementation',
        'date'   => '1er Août 2014',
        'title'  => 'Grenelle 2 : une nouvelle loi en faveur de l\'environnement',
        'read'   => '4 min',
        'img'    => 'https://images.unsplash.com/photo-1604187351574-c75ca79f5807?w=1600&q=90',
        'body'   => [
            'intro' => "À l'issue du premier Grenelle de l'environnement, une loi relative à sa mise en œuvre a été votée, mais le Grenelle 2 a permis d'aller plus loin en fixant des obligations opérationnelles précises.",
            'sections' => [
                ['title' => 'Des objectifs aux obligations', 'text' => "Là où le Grenelle 1 fixait des objectifs généraux, le Grenelle 2 (juillet 2010) crée les outils juridiques pour les atteindre : extension de la responsabilité élargie du producteur, obligation de reporting environnemental pour les grandes entreprises."],
                ['title' => 'Ce qui change concrètement', 'text' => "Le texte renforce l'obligation de collecte séparée des biodéchets pour les gros producteurs et pose les jalons de ce qui deviendra l'obligation universelle de tri des biodéchets en 2024. Une avancée majeure dans la structuration de la filière."],
            ],
        ],
    ],
];

$slug = request()->route('slug');
$article = $allArticles[$slug] ?? null;

// Articles recommandés (tous sauf l'actuel)
$related = array_filter($allArticles, fn($k) => $k !== $slug, ARRAY_FILTER_USE_KEY);
$related = array_slice($related, 0, 3, true);
@endphp

@if(!$article)
<section class="min-h-screen flex items-center justify-center bg-white pt-32">
    <div class="text-center">
        <div class="text-8xl font-black text-slate-100 mb-6">404</div>
        <h1 class="text-2xl font-black text-slate-900 mb-4">Article introuvable</h1>
        <a href="/actualites" class="text-dmt-teal font-bold hover:underline">← Retour aux actualités</a>
    </div>
</section>
@else

{{-- ── HERO ARTICLE ──────────────────────────────────── --}}
<section class="relative pt-36 pb-0 bg-white overflow-hidden">
    <div class="max-w-4xl mx-auto px-6">
        {{-- Breadcrumb --}}
        <div class="flex items-center gap-2 text-xs text-slate-400 font-medium mb-10">
            <a href="/" class="hover:text-dmt-teal transition-colors">Accueil</a>
            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <a href="/actualites" class="hover:text-dmt-teal transition-colors">Actualités</a>
            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            <span class="text-slate-600 truncate max-w-xs">{{ $article['title'] }}</span>
        </div>

        {{-- Tag + meta --}}
        <div class="flex items-center gap-4 mb-8">
            <span class="text-[10px] font-black uppercase tracking-[0.25em] px-4 py-2 rounded-full
                {{ $article['tag'] === 'News' ? 'bg-dmt-teal text-white' : 'bg-violet-500 text-white' }}">
                {{ $article['tag'] }}
            </span>
            <span class="text-slate-400 text-sm flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                {{ $article['date'] }}
            </span>
            <span class="text-slate-300">·</span>
            <span class="text-slate-400 text-sm flex items-center gap-1.5">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                {{ $article['read'] }} de lecture
            </span>
        </div>

        {{-- Title --}}
        <h1 class="text-4xl md:text-6xl font-black text-slate-900 leading-[1.1] mb-12">
            {{ $article['title'] }}
        </h1>
    </div>

    {{-- Full-width image --}}
    <div class="max-w-6xl mx-auto px-6">
        <div class="aspect-[16/7] rounded-[2.5rem] overflow-hidden shadow-2xl shadow-slate-200">
            <img src="{{ $article['img'] }}" alt="{{ $article['title'] }}" class="w-full h-full object-cover">
        </div>
    </div>
</section>

{{-- ── BODY ──────────────────────────────────────────── --}}
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_340px] gap-20">

            {{-- Article content --}}
            <div class="min-w-0">
                {{-- Intro --}}
                <p class="text-xl text-slate-700 leading-relaxed font-medium border-l-4 border-dmt-teal pl-8 mb-16">
                    {{ $article['body']['intro'] }}
                </p>

                {{-- Sections --}}
                @foreach($article['body']['sections'] as $s)
                <div class="mb-14">
                    <h2 class="text-2xl font-black text-slate-900 mb-5">{{ $s['title'] }}</h2>
                    <p class="text-slate-600 text-lg leading-relaxed">{{ $s['text'] }}</p>
                </div>
                @endforeach

                {{-- CTA inline --}}
                <div class="mt-16 p-10 bg-slate-50 rounded-3xl border border-slate-100">
                    <p class="text-lg font-black text-slate-900 mb-2">Besoin d'un accompagnement sur-mesure ?</p>
                    <p class="text-slate-500 mb-6 text-sm">Nos experts analysent vos flux et vous proposent une solution clé-en-main.</p>
                    <a href="/#contact" class="inline-flex items-center gap-2 px-7 py-3.5 bg-dmt-teal text-white font-bold rounded-2xl hover:scale-105 transition-transform shadow-lg shadow-dmt-teal/20 text-sm">
                        Demander un devis gratuit
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            {{-- Sidebar --}}
            <aside class="space-y-10">
                {{-- Share box --}}
                <div class="bg-slate-50 rounded-3xl border border-slate-100 p-8">
                    <h3 class="text-xs font-black uppercase tracking-widest text-slate-400 mb-6">Partager</h3>
                    <div class="flex gap-3">
                        @foreach([
                            ['LinkedIn', 'M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z M4 6a2 2 0 100-4 2 2 0 000 4z'],
                            ['Twitter', 'M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z'],
                        ] as $soc)
                        <button class="flex-1 flex items-center justify-center gap-2 py-3 rounded-xl border border-slate-200 text-xs font-bold text-slate-600 hover:border-dmt-teal hover:text-dmt-teal transition-all">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $soc[1] }}"/></svg>
                            {{ $soc[0] }}
                        </button>
                        @endforeach
                    </div>
                </div>

                {{-- Related articles --}}
                <div>
                    <h3 class="text-xs font-black uppercase tracking-widest text-slate-400 mb-6">À lire aussi</h3>
                    <div class="space-y-4">
                        @foreach($related as $rslug => $r)
                        <a href="/actualites/{{ $rslug }}"
                           class="group flex gap-4 p-4 rounded-2xl hover:bg-slate-50 transition-colors border border-transparent hover:border-slate-100">
                            <div class="w-20 h-16 rounded-xl overflow-hidden shrink-0">
                                <img src="{{ $r['img'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            </div>
                            <div>
                                <span class="text-[9px] font-black uppercase tracking-widest {{ $r['tag'] === 'News' ? 'text-dmt-teal' : 'text-violet-500' }} block mb-1">{{ $r['tag'] }}</span>
                                <p class="text-xs font-bold text-slate-700 group-hover:text-dmt-teal transition-colors leading-snug line-clamp-2">{{ $r['title'] }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>

                {{-- Back link --}}
                <a href="/actualites" class="flex items-center gap-2 text-sm font-bold text-slate-500 hover:text-dmt-teal transition-colors group">
                    <svg class="w-4 h-4 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
                    Toutes les actualités
                </a>
            </aside>
        </div>
    </div>
</section>

@endif

</x-app-layout>
