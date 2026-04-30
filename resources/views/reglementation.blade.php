<x-app-layout>

@php
$timeline = [
    ['year' => '1992', 'label' => 'Directive sur l\'incinération des déchets', 'desc' => "En 1992, l'Union européenne a introduit la directive 92/100/CEE sur l'incinération des déchets, établissant des normes environnementales pour la gestion des déchets incinérables. Cette directive marque le début d'une réglementation stricte visant à contrôler les émissions polluantes provenant des installations d'incinération.", 'tag' => 'Union Européenne'],
    ['year' => '2004', 'label' => 'Directive relative aux emballages', 'desc' => "L'année 2004 a été marquée par l'adoption d'une directive européenne visant à réduire l'impact environnemental des emballages. Cette directive impose des objectifs de réduction, de réutilisation et de recyclage des emballages, encourageant ainsi la transition vers une économie circulaire.", 'tag' => 'Union Européenne'],
    ['year' => '2005', 'label' => 'Plan national prévention des déchets (PNPPD)', 'desc' => "En 2005, la France a lancé le Plan national prévention des déchets (PNPPD), une initiative visant à réduire la quantité de déchets produits et à promouvoir des pratiques de consommation durables. Ce plan encourage la prévention à la source, le réemploi et le recyclage des déchets.", 'tag' => 'France'],
    ['year' => '2012', 'label' => 'Loi Grenelle — tri obligatoire 50 employés', 'desc' => "La loi de Grenelle de l'Environnement de 2012 a introduit des mesures visant à renforcer la gestion des déchets en entreprise. Elle impose aux entreprises de plus de 50 employés l'obligation de trier leurs déchets, favorisant ainsi une meilleure gestion des ressources et la réduction de l'impact environnemental.", 'tag' => 'France'],
    ['year' => '2014', 'label' => 'Valorisation obligatoire — 100 salariés dès 2016', 'desc' => "À partir de 2016, les entreprises de plus de 100 salariés sont tenues de mettre en place des dispositifs de valorisation de leurs déchets, conformément à la législation environnementale en vigueur. Cette mesure vise à réduire l'enfouissement des déchets et à promouvoir le recyclage et la valorisation matière.", 'tag' => 'France'],
    ['year' => '2016', 'label' => 'Tri obligatoire — 100 employés', 'desc' => "En 2016, les entreprises de plus de 100 employés sont légalement tenues de trier leurs déchets, contribuant ainsi à la réduction de l'enfouissement et à la promotion du recyclage. Cette mesure vise à améliorer la gestion des déchets en entreprise et à favoriser une économie circulaire.", 'tag' => 'France'],
    ['year' => '2018', 'label' => 'Loi AGEC', 'desc' => "Adoption de la loi Anti-Gaspillage pour une Économie Circulaire (AGEC). Texte fondateur qui réorganise toute la filière des déchets en France, fixant des objectifs ambitieux de réduction des plastiques, de réemploi et de traçabilité.", 'tag' => 'Loi Majeure'],
    ['year' => '2020', 'label' => 'Tri biodéchets obligatoire', 'desc' => "Entrée en vigueur de l'obligation de tri des biodéchets pour les gros producteurs (restauration collective, grande distribution). Premiers pas concrets vers le tri à la source des déchets organiques pour tous.", 'tag' => 'France'],
    ['year' => '2022', 'label' => 'Renforcement biodéchets — 100 personnes', 'desc' => "Renforcement de l'obligation de tri des biodéchets étendue aux entreprises de plus de 100 personnes. La filière organique se structure progressivement pour préparer l'obligation universelle.", 'tag' => 'France'],
    ['year' => '2024', 'label' => 'Tri universel — quel que soit l\'effectif', 'desc' => "Depuis janvier 2024, l'obligation du tri des déchets s'applique à toutes les entreprises, quel que soit leur effectif. Aucune structure n'est désormais exemptée de la mise en place d'un tri sélectif à la source.", 'tag' => 'Étape Clé'],
];
@endphp

{{-- HERO --}}
<section class="relative pt-40 pb-32 bg-slate-950 overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-dmt-teal/8 rounded-full blur-[150px]"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 30px 30px;"></div>
    </div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <span class="inline-flex items-center gap-2 text-dmt-teal text-xs font-black uppercase tracking-[0.4em] mb-6">
            <span class="w-8 h-px bg-dmt-teal"></span>
            Réglementation
            <span class="w-8 h-px bg-dmt-teal"></span>
        </span>
        <h1 class="text-5xl md:text-7xl font-black text-white leading-tight mb-6">
            32 ans de<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-dmt-teal to-emerald-300">réglementation</span><br>en un coup d'œil.
        </h1>
        <p class="text-slate-400 text-lg max-w-2xl mx-auto">
            De 1992 à 2024, retracez l'évolution du cadre législatif français et européen sur la gestion des déchets.
        </p>
        <div class="mt-12 inline-flex items-center gap-8 text-center">
            <div><div class="text-4xl font-black text-white">10</div><div class="text-xs text-slate-500 uppercase tracking-widest mt-1">Lois majeures</div></div>
            <div class="w-px h-10 bg-white/10"></div>
            <div><div class="text-4xl font-black text-white">32</div><div class="text-xs text-slate-500 uppercase tracking-widest mt-1">Années</div></div>
            <div class="w-px h-10 bg-white/10"></div>
            <div><div class="text-4xl font-black text-dmt-teal">2024</div><div class="text-xs text-slate-500 uppercase tracking-widest mt-1">Tri universel</div></div>
        </div>
    </div>
</section>

{{-- TIMELINE --}}
<section class="bg-white py-32">
    <div class="max-w-4xl mx-auto px-6">

        <div class="relative">
            {{-- Central line --}}
            <div class="absolute left-[3.5rem] top-0 bottom-0 w-px bg-gradient-to-b from-dmt-teal/30 via-slate-200 to-transparent md:left-1/2"></div>

            @foreach($timeline as $i => $item)
            <div class="relative flex items-start gap-8 mb-16 {{ $i % 2 !== 0 ? 'md:flex-row-reverse' : '' }}">

                {{-- Year bubble --}}
                <div class="relative z-10 shrink-0 flex flex-col items-center md:absolute md:left-1/2 md:-translate-x-1/2">
                    <div class="w-14 h-14 rounded-2xl bg-white border-2 border-slate-100 shadow-xl flex items-center justify-center font-black text-slate-900 text-sm leading-tight text-center shadow-slate-200/80">
                        {{ $item['year'] }}
                    </div>
                </div>

                {{-- Content card --}}
                <div class="flex-1 {{ $i % 2 !== 0 ? 'md:pr-[calc(50%+2.5rem)] md:pl-0' : 'md:pl-[calc(50%+2.5rem)] md:pr-0' }} pl-24 md:pl-0">
                    <div class="group bg-white border border-slate-100 rounded-3xl p-8 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-black uppercase tracking-widest px-3 py-1 rounded-full bg-dmt-teal/10 text-dmt-teal">
                                {{ $item['tag'] }}
                            </span>
                            <span class="text-2xl font-black text-slate-100 group-hover:text-slate-200 transition-colors">{{ $item['year'] }}</span>
                        </div>
                        <h3 class="text-lg font-black text-slate-900 mb-3">{{ $item['label'] }}</h3>
                        <p class="text-slate-500 text-sm leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- End marker --}}
            <div class="relative z-10 flex justify-start md:justify-center">
                <div class="inline-flex items-center gap-3 px-6 py-3 bg-dmt-teal rounded-2xl text-white font-bold text-sm shadow-xl shadow-dmt-teal/30">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    Aujourd'hui — Tri universel en vigueur
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="bg-slate-950 py-24">
    <div class="max-w-3xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-black text-white mb-4">Êtes-vous en conformité ?</h2>
        <p class="text-slate-400 mb-10 text-base">Depuis 2024, toutes les entreprises sont concernées par le tri obligatoire. DMT Recyclage vous accompagne dans votre mise en conformité.</p>
        <a href="{{ url('/#contact') }}" class="inline-flex items-center gap-3 px-10 py-5 bg-dmt-teal text-white font-bold rounded-2xl hover:bg-dmt-teal-600 transition-all hover:scale-105 shadow-xl shadow-dmt-teal/20">
            Diagnostic de conformité gratuit
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>

</x-app-layout>
