<x-app-layout>

@php
$materiels = [
    [
        'id'      => 'bac',
        'num'     => '01',
        'name'    => 'Bac de Déchets Plastique',
        'tagline' => 'Solution Polyvalente · 240 à 1000L',
        'desc'    => 'Robuste et ergonomique, le bac plastique s\'adapte à tous les environnements professionnels. Couvercles colorés pour un tri sélectif simplifié.',
        'specs'   => ['240L · 340L · 660L · 750L · 1000L', 'Bureaux & entrepôts & chantiers', 'DIB · Carton · Plastique · Verre'],
        'color'   => 'from-emerald-500 to-teal-600',
        'img'     => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=800&q=80',
        'accent'  => '#14b8a6',
    ],
    [
        'id'      => 'caisse',
        'num'     => '02',
        'name'    => 'Caisse Palette Plastique',
        'tagline' => 'Grande Capacité · 660 Litres',
        'desc'    => 'Idéale pour les flux importants, la caisse palette facilite la collecte de DEEE, carton, encombrants et archives. Compatible transpalette.',
        'specs'   => ['660 litres', 'DEEE · Carton · Encombrants · Archives', 'Manipulation au transpalette'],
        'color'   => 'from-slate-600 to-slate-800',
        'img'     => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=800&q=80',
        'accent'  => '#64748b',
    ],
    [
        'id'      => 'roll',
        'num'     => '03',
        'name'    => 'Roll Métallique',
        'tagline' => 'Mobilité Maximale · 1m³',
        'desc'    => 'Conçu pour les déchets volumineux, le roll métallique optimise la logistique interne sur vos sites de production ou de traitement.',
        'specs'   => ['1m³ de capacité', 'DIB · Recyclables légers · Chutes', 'Mobilité sur sites industriels'],
        'color'   => 'from-cyan-500 to-blue-600',
        'img'     => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=800&q=80',
        'accent'  => '#06b6d4',
    ],
    [
        'id'      => 'benne',
        'num'     => '04',
        'name'    => 'Benne',
        'tagline' => 'Grande Échelle · 10 à 20m³',
        'desc'    => 'Pour les chantiers et zones industrielles, les bennes 10, 15 et 20m³ absorbent les volumes importants de déchets en un seul enlèvement.',
        'specs'   => ['10m³ · 15m³ · 20m³', 'Gravats · DIB · Déchets de démolition', 'Chantiers & zones industrielles'],
        'color'   => 'from-orange-500 to-red-600',
        'img'     => 'https://images.unsplash.com/photo-1590907047706-ee9c08cf3189?w=800&q=80',
        'accent'  => '#f97316',
    ],
    [
        'id'      => 'pav',
        'num'     => '05',
        'name'    => 'Points d\'Apport Volontaire',
        'tagline' => 'Collecte Systématique · Fixes ou Mobiles',
        'desc'    => 'Les PAV permettent aux usagers de déposer leurs déchets dans des conteneurs dédiés, assurant une séparation efficace des flux à la source.',
        'specs'   => ['Recyclables · Organiques · Textiles', 'Piles · Batteries · Déchets spécifiques', 'Dispositifs fixes ou mobiles'],
        'color'   => 'from-violet-500 to-purple-700',
        'img'     => 'https://images.unsplash.com/photo-1542601254-ca7983637e6f?w=800&q=80',
        'accent'  => '#8b5cf6',
    ],
    [
        'id'      => 'bioseau',
        'num'     => '06',
        'name'    => 'Bioseau Tri Organique',
        'tagline' => 'Bio-déchets · Conformité AGEC',
        'desc'    => 'Le bioseau accompagne chaque foyer et entreprise dans la collecte des déchets organiques, en conformité avec la réglementation AGEC 2024.',
        'specs'   => ['Déchets alimentaires', 'Conformité loi AGEC Jan. 2024', 'Biodégradable & compostable'],
        'color'   => 'from-lime-500 to-green-600',
        'img'     => 'https://images.unsplash.com/photo-1567393528677-d6df60367584?w=800&q=80',
        'accent'  => '#84cc16',
    ],
];
@endphp

{{-- HERO --}}
<section class="relative pt-40 pb-24 bg-slate-950 overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-0 left-1/3 w-[500px] h-[500px] bg-dmt-teal/10 rounded-full blur-[120px]"></div>
        <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <span class="text-dmt-teal text-xs font-black uppercase tracking-[0.4em]">Le Matériel Proposé</span>
        <h1 class="text-5xl md:text-7xl font-black text-white mt-4 leading-tight">
            L'équipement <span class="text-transparent bg-clip-text bg-gradient-to-r from-dmt-teal to-emerald-300">juste</span>,<br>pour chaque besoin.
        </h1>
        <p class="text-slate-400 text-lg mt-6 max-w-2xl">
            6 solutions de collecte et de stockage sélectionnées pour couvrir tous vos flux de déchets — du bureau au chantier industriel.
        </p>
    </div>
</section>

{{-- HORIZONTAL QUICK NAV --}}
<div class="bg-slate-900 border-b border-white/5 sticky top-[84px] z-40">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex gap-1 overflow-x-auto no-scrollbar py-3">
            @foreach($materiels as $m)
            <a href="#{{ $m['id'] }}" class="shrink-0 px-5 py-2 rounded-xl text-xs font-bold text-slate-400 hover:text-white hover:bg-white/10 transition-all whitespace-nowrap">
                <span class="text-dmt-teal mr-1.5">{{ $m['num'] }}</span>{{ $m['name'] }}
            </a>
            @endforeach
        </div>
    </div>
</div>

{{-- MATERIAL SECTIONS --}}
@foreach($materiels as $i => $m)
<section id="{{ $m['id'] }}" class="{{ $i % 2 === 0 ? 'bg-white' : 'bg-slate-50' }} py-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center {{ $i % 2 !== 0 ? 'lg:grid-flow-dense' : '' }}">

            {{-- Text side --}}
            <div class="{{ $i % 2 !== 0 ? 'lg:col-start-2' : '' }}">
                <div class="flex items-center gap-4 mb-8">
                    <span class="text-7xl font-black text-slate-100 leading-none">{{ $m['num'] }}</span>
                    <div class="h-px flex-1 bg-slate-200"></div>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 mb-3 leading-tight">{{ $m['name'] }}</h2>
                <p class="text-sm font-bold uppercase tracking-widest mb-6" style="color: {{ $m['accent'] }}">{{ $m['tagline'] }}</p>
                <p class="text-slate-600 text-base leading-relaxed mb-10">{{ $m['desc'] }}</p>

                <div class="space-y-4">
                    @foreach($m['specs'] as $spec)
                    <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100">
                        <div class="w-2 h-2 rounded-full shrink-0" style="background: {{ $m['accent'] }}"></div>
                        <span class="text-slate-700 text-sm font-medium">{{ $spec }}</span>
                    </div>
                    @endforeach
                </div>

                <a href="{{ url('/#contact') }}" class="inline-flex items-center gap-3 mt-10 px-8 py-4 text-white font-bold rounded-2xl text-sm transition-all hover:scale-105 hover:shadow-xl bg-gradient-to-r {{ $m['color'] }}">
                    Demander un devis
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            {{-- Image side --}}
            <div class="{{ $i % 2 !== 0 ? 'lg:col-start-1 lg:row-start-1' : '' }} relative">
                <div class="aspect-[4/3] rounded-[3rem] overflow-hidden shadow-2xl">
                    <img src="{{ $m['img'] }}" alt="{{ $m['name'] }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br {{ $m['color'] }} opacity-20"></div>
                </div>
                <div class="absolute -bottom-6 {{ $i % 2 !== 0 ? 'left-6' : '-right-6' }} bg-white rounded-2xl shadow-xl border border-slate-100 px-6 py-4">
                    <span class="text-2xl font-black" style="color: {{ $m['accent'] }}">{{ $m['specs'][0] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach

{{-- CTA FINAL --}}
<section class="bg-slate-950 py-24">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-black text-white mb-4">Besoin d'un équipement sur mesure ?</h2>
        <p class="text-slate-400 mb-10">Notre équipe vous conseille et dimensionne la solution adaptée à votre activité.</p>
        <a href="{{ url('/#contact') }}" class="inline-flex items-center gap-3 px-10 py-5 bg-dmt-teal text-white font-bold rounded-2xl hover:bg-dmt-teal-600 transition-all hover:scale-105 shadow-xl shadow-dmt-teal/20">
            Contacter un expert
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>

<style>
.no-scrollbar::-webkit-scrollbar { display: none; }
.no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

</x-app-layout>
