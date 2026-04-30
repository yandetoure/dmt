<x-app-layout>

{{-- ════════════════════════════════════════════════════════════
     PAGE SERVICES — Design Premium Animé
     ════════════════════════════════════════════════════════════ --}}

<style>
/* ---------- Animations ---------- */
@keyframes float-up {
  from { opacity:0; transform:translateY(30px); }
  to   { opacity:1; transform:translateY(0); }
}
@keyframes reveal-line {
  from { transform:scaleX(0); }
  to   { transform:scaleX(1); }
}
@keyframes pulse-ring {
  0%   { box-shadow: 0 0 0 0 rgba(15,169,150,.4); }
  70%  { box-shadow: 0 0 0 18px rgba(15,169,150,0); }
  100% { box-shadow: 0 0 0 0 rgba(15,169,150,0); }
}
@keyframes marquee {
  from { transform:translateX(0); }
  to   { transform:translateX(-50%); }
}
@keyframes spin-slow {
  from { transform:rotate(0deg); }
  to   { transform:rotate(360deg); }
}

.anim-float { animation: float-up .7s ease both; }
.anim-float-d1 { animation-delay:.1s; }
.anim-float-d2 { animation-delay:.2s; }
.anim-float-d3 { animation-delay:.3s; }
.anim-float-d4 { animation-delay:.4s; }

.service-card:hover .card-icon { animation: pulse-ring 1.2s ease infinite; }

.marquee-track { animation: marquee 22s linear infinite; }

/* scroll reveal */
.reveal { opacity:0; transform:translateY(24px); transition:opacity .6s ease, transform .6s ease; }
.reveal.visible { opacity:1; transform:none; }
</style>

{{-- ── HERO ─────────────────────────────────────────────────── --}}
<section class="relative min-h-screen flex flex-col justify-center bg-slate-950 overflow-hidden pt-28">

    {{-- Ambient blobs --}}
    <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-dmt-teal/8 rounded-full blur-[180px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-[150px] pointer-events-none"></div>

    {{-- Dot grid overlay --}}
    <div class="absolute inset-0 opacity-[0.035] pointer-events-none" style="background-image:radial-gradient(circle,white 1px,transparent 1px);background-size:28px 28px;"></div>

    <div class="max-w-7xl mx-auto px-6 py-20 relative z-10">

        {{-- Eyebrow --}}
        <div class="flex items-center gap-3 mb-10 anim-float">
            <div class="w-8 h-8 rounded-xl bg-dmt-teal/20 border border-dmt-teal/30 flex items-center justify-center">
                <svg class="w-4 h-4 text-dmt-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <span class="text-dmt-teal text-xs font-black uppercase tracking-[0.45em]">Nos Prestations</span>
        </div>

        {{-- Main title --}}
        <h1 class="text-6xl md:text-8xl font-black text-white leading-[1.0] mb-6 anim-float anim-float-d1">
            Tout gérer.<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-dmt-teal via-emerald-300 to-teal-200">
                Rien perdre.
            </span>
        </h1>
        <p class="text-slate-400 text-xl max-w-2xl mb-16 leading-relaxed anim-float anim-float-d2">
            De la collecte quotidienne au démantèlement de site industriel, DMT Recyclage prend en charge l'intégralité de vos flux de déchets professionnels, avec traçabilité totale.
        </p>

        {{-- Bento stat grid --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 anim-float anim-float-d3">
            @php
            $stats = [
                ['6', 'Prestations'],
                ['15+', "Ans d'expérience"],
                ['100%', 'Traçabilité'],
                ['0', 'Déchet non valorisé'],
            ];
            @endphp
            @foreach($stats as $s)
            <div class="bg-white/5 border border-white/10 rounded-3xl p-6 text-center backdrop-blur-md hover:bg-white/8 hover:border-white/20 transition-all duration-300 group">
                <div class="text-4xl font-black text-white mb-2 group-hover:text-dmt-teal transition-colors">{{ $s[0] }}</div>
                <div class="text-xs text-slate-500 uppercase tracking-widest font-bold">{{ $s[1] }}</div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Scroll cue --}}
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-2 text-slate-600">
        <span class="text-[10px] font-bold uppercase tracking-widest">Découvrir</span>
        <div class="w-px h-10 bg-gradient-to-b from-slate-600 to-transparent"></div>
    </div>
</section>

{{-- ── MARQUEE BAND ─────────────────────────────────────────── --}}
<div class="bg-dmt-teal py-4 overflow-hidden">
    <div class="flex whitespace-nowrap">
        <div class="marquee-track flex gap-12 pr-12 text-white font-black uppercase tracking-widest text-sm">
            @foreach(['Collecte & Recyclage','Bio-déchets','Débarras Archives','Débarras Mobilier','Démantèlement Industriel','Chantiers BTP','Collecte & Recyclage','Bio-déchets','Débarras Archives','Débarras Mobilier','Démantèlement Industriel','Chantiers BTP'] as $item)
            <span class="flex items-center gap-4">{{ $item }} <span class="opacity-50">✦</span></span>
            @endforeach
        </div>
    </div>
</div>

{{-- ── SERVICE SECTIONS ─────────────────────────────────────── --}}
@php
$services = [
  [
    'id'      => 'collecte',
    'num'     => '01',
    'title'   => 'Collecte & Recyclage',
    'lead'    => 'Enlèvement planifié, tri optimisé, valorisation matière maximale. Nous adaptons fréquences et équipements à votre production réelle.',
    'color'   => '#0FA996',
    'bg'      => 'bg-white',
    'img'     => 'https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=900&q=80',
    'features'=> [
      ['Bacs 120L à 1100L fournis', 'Pesée certifiée sur site'],
      ['BSD & certificats de valorisation', 'Fréquence adaptée à vos flux'],
      ['Rapport mensuel de tonnage', 'Conformité réglementaire garantie'],
    ],
  ],
  [
    'id'      => 'biod',
    'num'     => '02',
    'title'   => 'Les Biodéchets',
    'lead'    => 'Les biodéchets sont des déchets organiques d\'origine végétale ou animale. En 2024, la loi impose aux entreprises la collecte séparée et la valorisation des biodéchets.',
    'color'   => '#22c55e',
    'bg'      => 'bg-slate-950',
    'img'     => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=900&q=80',
    'features'=> [
      ['Collecte des Biodéchets', 'Des bacs 240L pour les restaurants d\'entreprise jusqu\'aux bioréacteurs en étages'],
      ['Filières de Valorisation', 'Orientation vers les filières de compostage ou de méthanisation certifiées'],
      ['Méthanisation', 'Production de biogaz et d\'énergie renouvelable à partir de vos déchets organiques'],
      ['Compostage', 'Valorisation en amendement agricole de qualité certifiée'],
      ['Avantages Environnementaux', 'Réduction des GES, préservation des ressources naturelles, conformité AGEC'],
    ],
  ],
  [
    'id'      => 'debarras',
    'num'     => '03',
    'title'   => 'Débarras Archives & Mobilier',
    'lead'    => 'Pour une tranquillité d\'esprit totale, confiez vos archives et votre mobilier à des experts. DMT Recyclage offre des prestations exhaustives adaptées à vos besoins spécifiques.',
    'color'   => '#f59e0b',
    'bg'      => 'bg-white',
    'img'     => 'https://images.unsplash.com/photo-1522071823991-b99c22303091?w=900&q=80',
    'features'=> [
      ['Prestations Exhaustives', 'Prise en charge complète de vos archives papier, mobilier de bureau, équipements IT'],
      ['Opérations sur-Mesure', 'Intervention planifiée à votre convenance, même en dehors des heures ouvrées'],
      ['Preuve de Destruction', 'Certificat de destruction pour la conformité RGPD et audit interne'],
      ['La Confiance', 'Équipes formées, discrètes et assurées. Références vérifiables sur demande'],
    ],
  ],
  [
    'id'      => 'debarras-meubles',
    'num'     => '04',
    'title'   => 'Débarras de Meubles',
    'lead'    => 'Lorsque le débarras de meubles devient une tâche complexe, DMT Recyclage se présente comme la solution idéale pour simplifier la vie des particuliers et des entreprises.',
    'color'   => '#8b5cf6',
    'bg'      => 'bg-slate-50',
    'img'     => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=900&q=80',
    'features'=> [
      ['Simple & Efficace', 'Contactez les experts pour un devis gratuit. Nos équipes assurent une évacuation rapide et sans stress de vos meubles inutiles ou endommagés.'],
      ['Gestion Responsable', 'Tri systématique : réemploi, recyclage matière ou valorisation énergétique selon l\'état de chaque meuble.'],
      ['Tarification Transparente', 'Devis clair au volume ou à la vacation. Aucun frais caché, facturation sur intervention réelle.'],
    ],
  ],
  [
    'id'      => 'demantelement',
    'num'     => '05',
    'title'   => 'Démantèlement Industriel',
    'lead'    => 'DMT Recyclage vous propose des solutions de démantèlement industriel adaptées à vos besoins. Nos équipes interviennent sur site pour démanteler vos installations et gérer vos déchets.',
    'color'   => '#64748b',
    'bg'      => 'bg-white',
    'img'     => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=900&q=80',
    'features'=> [
      ['Enlèvement des cloisons dans les bureaux', 'Retrait des câblages et des plateaux informatiques'],
      ['Démantèlement des armoires d\'archives mobiles', 'Retrait des installations de climatisation industrielles'],
      ['Petites démolitions de cloisonnement', 'Démantèlement des meubles informatiques'],
    ],
  ],
  [
    'id'      => 'btp',
    'num'     => '06',
    'title'   => 'Chantiers BTP',
    'lead'    => 'Gestion des déchets de chantier de construction ou de rénovation. Bennes livrées sur site, enlèvement planifié, conformité PPNG et traçabilité des inertes garantie.',
    'color'   => '#f97316',
    'bg'      => 'bg-slate-950',
    'img'     => 'https://images.unsplash.com/photo-1590907047706-ee9c08cf3189?w=900&q=80',
    'features'=> [
      ['Bennes 8m³ à 30m³ livrées sur site', 'Gravats, bois, plâtre, ferraille triés'],
      ['Reporting chantier inclus', 'Conformité PPNG & BSDD'],
      ['Enlèvement sous 48h possible', 'Certificat de valorisation des inertes'],
    ],
  ],
];
@endphp

@foreach($services as $idx => $svc)
@php
$dark = in_array($svc['bg'], ['bg-slate-950']);
$textMain = $dark ? 'text-white' : 'text-slate-900';
$textSub  = $dark ? 'text-slate-400' : 'text-slate-500';
$borderC  = $dark ? 'border-white/10' : 'border-slate-100';
$cardBg   = $dark ? 'bg-white/5' : 'bg-slate-50';
@endphp

<section id="{{ $svc['id'] }}" class="{{ $svc['bg'] }} py-32 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        {{-- Top row: Number + Title --}}
        <div class="reveal flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-20 pb-8 border-b {{ $borderC }}">
            <div class="flex items-start gap-6">
                <span class="text-8xl font-black leading-none opacity-10 {{ $textMain }}" style="color:{{ $svc['color'] }}">{{ $svc['num'] }}</span>
                <div>
                    <h2 class="text-4xl md:text-5xl font-black {{ $textMain }} leading-tight">{{ $svc['title'] }}</h2>
                </div>
            </div>
            <a href="{{ url('/#contact') }}"
               class="shrink-0 inline-flex items-center gap-2 px-6 py-3 rounded-2xl font-bold text-sm transition-all hover:scale-105"
               style="background:{{ $svc['color'] }}20; color:{{ $svc['color'] }}; border:1px solid {{ $svc['color'] }}40;">
                Devis gratuit
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-[1fr_420px] gap-16 items-start">

            {{-- Left: Lead + features --}}
            <div>
                <p class="reveal text-xl {{ $textSub }} leading-relaxed mb-14 max-w-2xl">{{ $svc['lead'] }}</p>

                <div class="space-y-4">
                    @foreach($svc['features'] as $fi => $feat)
                    @php $isArr = is_array($feat); @endphp
                    <div class="reveal service-card group {{ $cardBg }} border {{ $borderC }} rounded-2xl p-6 hover:border-opacity-50 transition-all duration-300 hover:-translate-x-1"
                         style="--card-color:{{ $svc['color'] }}; transition-delay:{{ $fi * 80 }}ms;"
                         onmouseover="this.style.borderColor='{{ $svc['color'] }}40'"
                         onmouseout="this.style.borderColor=''">
                        @if($isArr)
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach($feat as $point)
                            <div class="flex items-start gap-3">
                                <span class="mt-0.5 w-5 h-5 rounded-lg flex items-center justify-center shrink-0" style="background:{{ $svc['color'] }}20;">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="{{ $svc['color'] }}"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                <span class="{{ $textMain }} text-sm font-medium">{{ $point }}</span>
                            </div>
                            @endforeach
                        </div>
                        @else
                        {{-- key:value pair --}}
                        @php [$k,$v] = array_pad(explode(':', $feat, 2), 2, ''); @endphp
                        <div class="flex items-start gap-4">
                            <span class="mt-0.5 w-6 h-6 rounded-xl flex items-center justify-center shrink-0" style="background:{{ $svc['color'] }}20;">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="{{ $svc['color'] }}"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <div>
                                <div class="font-black {{ $textMain }} text-sm mb-1">{{ trim($k) ?: $feat }}</div>
                                @if($v)<div class="{{ $textSub }} text-sm leading-relaxed">{{ trim($v) }}</div>@endif
                            </div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right: Visual card --}}
            <div class="reveal lg:sticky lg:top-32">
                <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[3/4]">
                    <img src="{{ $svc['img'] }}" alt="{{ $svc['title'] }}"
                         class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0" style="background:linear-gradient(to top, {{ $svc['color'] }}cc 0%, transparent 60%)"></div>
                    {{-- Bottom label --}}
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <div class="text-white font-black text-2xl leading-tight">{{ $svc['title'] }}</div>
                        <div class="w-12 h-1 rounded-full mt-3" style="background:{{ $svc['color'] }}"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@if(!$loop->last)
<div class="h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>
@endif

@endforeach

{{-- ── FINAL CTA ─────────────────────────────────────────────── --}}
<section class="bg-slate-950 py-32">
    <div class="max-w-6xl mx-auto px-6">
        <div class="relative rounded-[4rem] overflow-hidden p-12 md:p-24 text-center" style="background:linear-gradient(135deg, #0FA996, #10b981);">
            <div class="absolute inset-0 opacity-[0.08]" style="background-image:radial-gradient(circle,white 1px,transparent 1px);background-size:22px 22px;"></div>
            {{-- Spinning ring decoration --}}
            <div class="absolute -top-24 -right-24 w-64 h-64 border border-white/10 rounded-full" style="animation:spin-slow 20s linear infinite;"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 border border-white/10 rounded-full" style="animation:spin-slow 30s linear infinite reverse;"></div>

            <div class="relative z-10">
                <p class="text-white/70 text-sm font-black uppercase tracking-[0.4em] mb-6">Votre projet commence ici</p>
                <h2 class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight">
                    Audit gratuit.<br>Résultats concrets.
                </h2>
                <p class="text-white/75 text-xl mb-12 max-w-xl mx-auto">
                    Nos experts analysent vos flux en 48h et vous proposent une solution clé-en-main sans engagement.
                </p>
                <a href="{{ url('/#contact') }}"
                   class="inline-flex items-center gap-3 px-12 py-5 bg-white text-dmt-teal font-black text-lg rounded-2xl hover:scale-105 transition-transform shadow-2xl">
                    Demander mon audit gratuit
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- ── SCROLL REVEAL SCRIPT ─────────────────────────────────── --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const els = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
        });
    }, { threshold: 0.12 });
    els.forEach(el => io.observe(el));
});
</script>

</x-app-layout>
