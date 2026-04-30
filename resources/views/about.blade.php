<x-app-layout>
    <!-- Hero Section -->
    <header class="relative pt-48 pb-32 overflow-hidden bg-slate-950">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1530124560677-bdaeaeb3ef55?auto=format&fit=crop&q=80&w=2070" alt="Background" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-b from-slate-950/20 via-slate-950/80 to-slate-950"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="section-tag !bg-white/10 !text-white !border-white/20">Notre Histoire</div>
            <h1 class="text-6xl md:text-8xl font-black text-white mb-8 tracking-tighter">
                DMT <span class="text-dmt-teal">Recyclage</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 max-w-3xl mx-auto leading-relaxed mb-12">
                Votre Partenaire de Collecte et de Transition Vers un Avenir Durable et Responsable.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <a href="#nous" class="btn-primary text-xl px-12 py-5">Découvrir notre mission</a>
                <a href="/#contact" class="px-12 py-5 rounded-full border border-white/20 text-white font-bold hover:bg-white/10 transition-all backdrop-blur-md">Nous contacter</a>
            </div>
        </div>
    </header>

    <!-- Content Sections -->
    <section id="nous" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <div class="aspect-square rounded-[4rem] overflow-hidden shadow-2xl relative z-10">
                        <img src="https://images.unsplash.com/photo-1522071823991-b99c22303091?auto=format&fit=crop&q=80&w=2070" 
                             alt="L'équipe DMT Recyclage" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-dmt-teal/10 rounded-full blur-3xl"></div>
                </div>
                
                <div>
                    <div class="section-tag">Qui sommes-nous ?</div>
                    <h2 class="text-4xl md:text-6xl font-black mb-8 tracking-tight text-slate-900">Engagés pour l'économie <span class="text-dmt-teal">circulaire</span>.</h2>
                    <div class="space-y-8 text-xl text-slate-600 leading-relaxed">
                        <p>
                            Chez DMT Recyclage, nous incarnons l'engagement en faveur d'un avenir durable. En tant que votre partenaire de confiance, nous vous accompagnons dans votre transition vers une entreprise plus écologique et responsable.
                        </p>
                        <p>
                            Notre mission est de vous aider à réduire votre empreinte environnementale en adoptant des pratiques durables et en favorisant le recyclage.
                        </p>
                        <div class="pt-8 border-t border-slate-100">
                            <div class="grid grid-cols-2 gap-12">
                                <div>
                                    <div class="text-5xl font-black text-dmt-teal mb-3">15+</div>
                                    <div class="text-sm font-bold text-slate-500 uppercase tracking-widest">Ans d'Expertise</div>
                                </div>
                                <div>
                                    <div class="text-5xl font-black text-dmt-teal mb-3">100%</div>
                                    <div class="text-sm font-bold text-slate-500 uppercase tracking-widest">Traçabilité</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valeurs -->
    <section class="py-32 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-24">
                <div class="section-tag">Nos Fondations</div>
                <h2 class="text-5xl md:text-6xl font-black text-slate-900">Valeurs & Mission</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="card-premium group">
                    <div class="w-20 h-20 bg-white shadow-xl rounded-3xl flex items-center justify-center text-dmt-teal mb-10 group-hover:bg-dmt-teal group-hover:text-white transition-all duration-500">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 text-slate-900">Notre Passion</h3>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        L'énergie que nous mettons chaque jour pour transformer la gestion des déchets en source de durabilité pour nos clients.
                    </p>
                </div>

                <div class="card-premium group">
                    <div class="w-20 h-20 bg-white shadow-xl rounded-3xl flex items-center justify-center text-dmt-teal mb-10 group-hover:bg-dmt-teal group-hover:text-white transition-all duration-500">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.040L3 20l9 2 9-2-1.382-14.016z"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 text-slate-900">Notre Expertise</h3>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        Un savoir-faire technique inégalé pour le démantèlement industriel et la collecte optimisée de toutes matières.
                    </p>
                </div>

                <div class="card-premium group">
                    <div class="w-20 h-20 bg-white shadow-xl rounded-3xl flex items-center justify-center text-dmt-teal mb-10 group-hover:bg-dmt-teal group-hover:text-white transition-all duration-500">
                        <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 text-slate-900">Notre Mission</h3>
                    <p class="text-slate-600 text-lg leading-relaxed">
                        Accompagner les entreprises et collectivités vers le Zéro Déchet grâce à des processus transparents et efficaces.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Engagement 3R Section -->
    <section class="py-32 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <div class="lg:w-1/2">
                    <div class="section-tag">Engagement Environnemental</div>
                    <h2 class="text-4xl md:text-6xl font-black mb-10 tracking-tight text-slate-900">Au-delà de la <span class="text-dmt-teal">Collecte</span>.</h2>
                    <p class="text-xl text-slate-600 mb-12 leading-relaxed">
                        Le modèle DMT Recyclage s'inscrit dans une approche proactive de réduction des déchets, guidée par les principes fondamentaux des 3R.
                    </p>
                    
                    <div class="space-y-12">
                        <div class="flex items-start gap-8 group">
                            <div class="text-6xl font-black text-slate-100 group-hover:text-dmt-teal/20 transition-colors">01</div>
                            <div>
                                <h3 class="text-2xl font-bold mb-3 text-slate-900">Réduire</h3>
                                <p class="text-slate-600 text-lg">
                                    Minimiser la génération de déchets à la source par l'innovation des processus internes.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-8 group">
                            <div class="text-6xl font-black text-slate-100 group-hover:text-dmt-teal/20 transition-colors">02</div>
                            <div>
                                <h3 class="text-2xl font-bold mb-3 text-slate-900">Réutiliser</h3>
                                <p class="text-slate-600 text-lg">
                                    Favoriser la seconde vie des équipements et matériaux pour prolonger leur cycle de vie utile.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-8 group">
                            <div class="text-6xl font-black text-slate-100 group-hover:text-dmt-teal/20 transition-colors">03</div>
                            <div>
                                <h3 class="text-2xl font-bold mb-3 text-slate-900">Recycler</h3>
                                <p class="text-slate-600 text-lg">
                                    Transformer chaque déchet en matière première secondaire de haute qualité.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 relative">
                    <div class="aspect-square rounded-[5rem] overflow-hidden shadow-2xl relative z-10">
                        <img src="https://images.unsplash.com/photo-1567393528677-d6df60367584?auto=format&fit=crop&q=80&w=2070" 
                             alt="Recyclage industriel responsable" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -top-20 -right-20 w-80 h-80 bg-dmt-teal/5 rounded-full blur-[100px]"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-32 bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-dmt-teal rounded-[5rem] p-12 md:p-32 text-center text-white relative overflow-hidden shadow-2xl">
                <h2 class="text-5xl md:text-7xl font-black mb-10 leading-[1.1] relative z-10">Prêt pour votre transition écologique ?</h2>
                <div class="relative z-10">
                    <a href="/#contact" class="px-16 py-6 bg-white text-dmt-teal text-2xl font-black rounded-full hover:scale-105 transition-transform shadow-2xl inline-block">
                        Demander une étude gratuite
                    </a>
                </div>
                <div class="absolute inset-0 bg-black/10"></div>
                <div class="absolute -top-48 -left-48 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-48 -right-48 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            </div>
        </div>
    </section>
</x-app-layout>
