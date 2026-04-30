<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos | DMT Recyclage - Votre Partenaire Zéro Déchet</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800;900&family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --dmt-teal: #14b8a6;
            --dmt-teal-dark: #0f766e;
        }
        body { font-family: 'Inter', sans-serif; cursor: default; }
        h1, h2, h3, h4, .font-outfit { font-family: 'Outfit', sans-serif; }
        .bg-dmt-teal { background-color: var(--dmt-teal); }
        .text-dmt-teal { color: var(--dmt-teal); }
        .border-dmt-teal { border-color: var(--dmt-teal); }
        .btn-primary {
            background-color: var(--dmt-teal);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            font-weight: 700;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 15px -3px rgba(20, 184, 166, 0.3);
        }
        .btn-primary:hover {
            background-color: var(--dmt-teal-dark);
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(20, 184, 166, 0.4);
        }
        .card-premium {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 2.5rem;
            padding: 2.5rem;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-premium:hover {
            transform: translateY(-10px);
            background: white;
            box-shadow: 0 40px 60px -20px rgba(0, 0, 0, 0.08);
        }
        .section-tag {
            background: #f0fdfa;
            color: var(--dmt-teal);
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            display: inline-block;
            margin-bottom: 1rem;
            border: 1px solid #ccfbf1;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 selection:bg-teal-100 selection:text-teal-900">

    <x-navigation />

    <!-- Hero Section -->
    <header class="relative pt-48 pb-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1530124560677-bdaeaeb3ef55?auto=format&fit=crop&q=80&w=2070" alt="Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-slate-950/70 backdrop-blur-sm"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="section-tag !bg-teal-500/10 !text-teal-400 !border-teal-500/20">A Propos</div>
            <h1 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tighter">
                DMT Recyclage : <br/>
                <span class="text-dmt-teal">Votre Partenaire Zéro Déchet</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-3xl mx-auto leading-relaxed mb-12">
                Votre Partenaire de Collecte et de Transition Vers un Avenir Durable et Responsable.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#nous" class="btn-primary">Découvrir notre histoire</a>
                <a href="/#contact" class="px-8 py-3 rounded-full border border-white/30 text-white font-bold hover:bg-white/10 transition-all backdrop-blur-md">Contactez-nous</a>
            </div>
        </div>
    </header>

    <!-- Qui sommes-nous Section -->
    <section id="nous" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative">
                    <div class="aspect-square rounded-[3rem] overflow-hidden shadow-2xl relative z-10">
                        <img src="https://images.unsplash.com/photo-1522071823991-b99c22303091?auto=format&fit=crop&q=80&w=2070" 
                             alt="L'équipe DMT Recyclage" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-dmt-teal/10 rounded-full blur-3xl -z-10"></div>
                </div>
                
                <div>
                    <div class="section-tag">Qui sommes-nous ?</div>
                    <h2 class="text-3xl md:text-5xl font-black mb-8 tracking-tight">Notre Engagement en Faveur d'un Avenir Durable</h2>
                    <div class="space-y-6 text-lg text-slate-600 leading-relaxed">
                        <p>
                            Chez DMT Recyclage, nous incarnons l'engagement en faveur d'un avenir durable. En tant que votre partenaire de confiance, nous vous accompagnons dans votre transition vers une entreprise plus écologique et responsable.
                        </p>
                        <p>
                            Notre mission est de vous aider à réduire votre empreinte environnementale en adoptant des pratiques durables et en favorisant le recyclage. Nous mettons à votre disposition notre expertise en gestion des déchets pour vous fournir des solutions personnalisées, adaptées à vos besoins spécifiques.
                        </p>
                        <div class="pt-6">
                            <div class="grid grid-cols-2 gap-8">
                                <div>
                                    <div class="text-4xl font-black text-dmt-teal mb-2">10+</div>
                                    <div class="text-sm font-bold text-slate-500 uppercase tracking-widest">Ans d'Expertise</div>
                                </div>
                                <div>
                                    <div class="text-4xl font-black text-dmt-teal mb-2">100%</div>
                                    <div class="text-sm font-bold text-slate-500 uppercase tracking-widest">Sur mesure</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Valeurs Section -->
    <section class="py-24 bg-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="section-tag">Nos Fondations</div>
                <h2 class="text-3xl md:text-5xl font-black tracking-tight">Valeurs & Mission</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Valeur 1 -->
                <div class="card-premium">
                    <div class="w-16 h-16 bg-teal-50 rounded-2xl flex items-center justify-center text-dmt-teal mb-8">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Notre Passion</h3>
                    <p class="text-slate-600 leading-relaxed">
                        L'énergie que nous mettons chaque jour pour transformer la gestion des déchets en source de durabilité pour nos clients.
                    </p>
                </div>

                <!-- Valeur 2 -->
                <div class="card-premium">
                    <div class="w-16 h-16 bg-teal-50 rounded-2xl flex items-center justify-center text-dmt-teal mb-8">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.040L3 20l9 2 9-2-1.382-14.016z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Notre Expertise</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Un savoir-faire technique inégalé pour le démantèlement industriel et la collecte optimisée de toutes matières.
                    </p>
                </div>

                <!-- Valeur 3 -->
                <div class="card-premium">
                    <div class="w-16 h-16 bg-teal-50 rounded-2xl flex items-center justify-center text-dmt-teal mb-8">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Notre Mission</h3>
                    <p class="text-slate-600 leading-relaxed">
                        Accompagner les entreprises et collectivités vers le Zéro Déchet grâce à des processus transparents et efficaces.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Engagement 3R Section -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <div class="section-tag">Engagement Environnemental</div>
                    <h2 class="text-3xl md:text-5xl font-black mb-8 tracking-tight">Aller Au-delà de la Collecte Traditionnelle</h2>
                    <p class="text-lg text-slate-600 mb-12">
                        Le modèle DMT Recyclage s'inscrit dans une approche proactive de réduction des déchets, guidée par les principes fondamentaux des 3R :
                    </p>
                    
                    <div class="space-y-8">
                        <!-- R1 -->
                        <div class="flex items-start gap-6 group">
                            <div class="text-5xl font-black text-slate-100 group-hover:text-teal-100 transition-colors">01</div>
                            <div>
                                <h3 class="text-2xl font-bold mb-2">Réduire</h3>
                                <p class="text-slate-600">
                                    Nous travaillons en étroite collaboration avec nos clients pour minimiser la génération de déchets à la source par l'innovation des processus.
                                </p>
                            </div>
                        </div>
                        <!-- R2 -->
                        <div class="flex items-start gap-6 group">
                            <div class="text-5xl font-black text-slate-100 group-hover:text-teal-100 transition-colors">02</div>
                            <div>
                                <h3 class="text-2xl font-bold mb-2">Réutiliser</h3>
                                <p class="text-slate-600">
                                    Favoriser la seconde vie des équipements et matériaux pour éviter l'extraction de nouvelles ressources.
                                </p>
                            </div>
                        </div>
                        <!-- R3 -->
                        <div class="flex items-start gap-6 group">
                            <div class="text-5xl font-black text-slate-100 group-hover:text-teal-100 transition-colors">03</div>
                            <div>
                                <h3 class="text-2xl font-bold mb-2">Recycler</h3>
                                <p class="text-slate-600">
                                    Transformer chaque déchet en matière première secondaire de haute qualité pour réintégration dans le circuit industriel.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2 relative">
                    <div class="aspect-video lg:aspect-square rounded-[4rem] overflow-hidden shadow-2xl skew-y-1">
                        <img src="https://images.unsplash.com/photo-1567393528677-d6df60367584?auto=format&fit=crop&q=80&w=2070" 
                             alt="Recyclage industriel responsable" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -top-10 -right-10 w-48 h-48 bg-teal-500/10 rounded-full blur-3xl"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vous êtes ? Section -->
    <section class="py-24 bg-slate-900 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-16">
            <div class="section-tag !bg-white/10 !text-teal-400 !border-white/10 uppercase tracking-widest">Solutions</div>
            <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight">Des solutions pour tout profil</h2>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Professionnel -->
            <div class="p-10 rounded-[3rem] bg-slate-800 border border-slate-700 hover:border-dmt-teal transition-all group">
                <div class="text-white text-4xl mb-8 font-black opacity-10 group-hover:opacity-100 transition-opacity">01</div>
                <h3 class="text-2xl font-bold text-white mb-6">Professionnel</h3>
                <p class="text-slate-400 mb-8 leading-relaxed">
                    Optimisez votre chaîne d'approvisionnement écologique. De l'enlèvement au traitement, nous gérons toute votre logistique.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center text-sm text-slate-300 gap-3">
                        <svg class="w-5 h-5 text-dmt-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Accompagnement expert
                    </div>
                    <div class="flex items-center text-sm text-slate-300 gap-3">
                        <svg class="w-5 h-5 text-dmt-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Solutions adaptables
                    </div>
                </div>
            </div>

            <!-- Collectivités -->
            <div class="p-10 rounded-[3rem] bg-slate-800 border border-slate-700 hover:border-dmt-teal transition-all group">
                <div class="text-white text-4xl mb-8 font-black opacity-10 group-hover:opacity-100 transition-opacity">02</div>
                <h3 class="text-2xl font-bold text-white mb-6">Collectivités / Syndics</h3>
                <p class="text-slate-400 mb-8 leading-relaxed">
                    Simplifiez la gestion des biodéchets et des encombrants pour vos résidents avec nos services de collecte programmés.
                </p>
                 <div class="space-y-4">
                    <div class="flex items-center text-sm text-slate-300 gap-3">
                        <svg class="w-5 h-5 text-dmt-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Conformité Loi AGEC
                    </div>
                    <div class="flex items-center text-sm text-slate-300 gap-3">
                        <svg class="w-5 h-5 text-dmt-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Tri à la source
                    </div>
                </div>
            </div>

            <!-- Particulier -->
            <div class="p-10 rounded-[3rem] bg-slate-800 border border-slate-700 hover:border-dmt-teal transition-all group">
                <div class="text-white text-4xl mb-8 font-black opacity-10 group-hover:opacity-100 transition-opacity">03</div>
                <h3 class="text-2xl font-bold text-white mb-6">Particulier</h3>
                <p class="text-slate-400 mb-8 leading-relaxed">
                    Besoin de vider un appartement ou une cave ? Notre service de débarras est rapide, propre et éco-responsable.
                </p>
                 <div class="space-y-4">
                    <div class="flex items-center text-sm text-slate-300 gap-3">
                        <svg class="w-5 h-5 text-dmt-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Intervention rapide
                    </div>
                    <div class="flex items-center text-sm text-slate-300 gap-3">
                        <svg class="w-5 h-5 text-dmt-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Tri sélectif inclus
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Témoignages Section -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="section-tag">Ils nous font confiance</div>
                <h2 class="text-3xl md:text-5xl font-black mb-4">Paroles de Clients</h2>
                <p class="text-slate-600">La confiance de nos clients est notre plus grande récompense.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Témoignage 1 -->
                <div class="bg-white p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100">
                    <div class="flex text-teal-400 mb-6 font-bold">★★★★★</div>
                    <p class="text-slate-600 italic mb-8">
                        "Une équipe réactive et professionnelle pour notre démantèlement de ligne de production. Travail propre et traçabilité exemplaire."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-100 rounded-full"></div>
                        <div>
                            <div class="font-bold">Jean-Marc T.</div>
                            <div class="text-sm text-slate-500">Directeur Industriel</div>
                        </div>
                    </div>
                </div>
                <!-- Témoignage 2 -->
                <div class="bg-white p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100">
                    <div class="flex text-teal-400 mb-6 font-bold">★★★★★</div>
                    <p class="text-slate-600 italic mb-8">
                        "Nous collaborons avec DMT pour la collecte de nos biodéchets depuis 2024. Service fiable et précieux pour notre conformité AGEC."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-100 rounded-full"></div>
                        <div>
                            <div class="font-bold">Sophie L.</div>
                            <div class="text-sm text-slate-500">Responsable RSE</div>
                        </div>
                    </div>
                </div>
                <!-- Témoignage 3 -->
                <div class="bg-white p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100">
                    <div class="flex text-teal-400 mb-6 font-bold">★★★★★</div>
                    <p class="text-slate-600 italic mb-8">
                        "Rangement de cave et débarras industriel effectué en une journée. Rapport qualité-prix imbattable sur le secteur."
                    </p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-100 rounded-full"></div>
                        <div>
                            <div class="font-bold">Marc D.</div>
                            <div class="text-sm text-slate-500">Gérant de Syndic</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi nous choisir Section (CTA) -->
    <section class="py-24 bg-dmt-teal text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-black mb-8 tracking-tighter">Prêt pour votre transition écologique ?</h2>
            <p class="text-xl text-teal-50 mb-12 max-w-2xl mx-auto">
                Rejoignez les entreprises qui font bouger les lignes. DMT Recyclage vous accompagne pas à pas.
            </p>
            <a href="/#contact" class="px-10 py-5 bg-white text-dmt-teal text-lg font-black rounded-full hover:scale-110 transition-transform shadow-2xl">
                Demander une étude gratuite
            </a>
        </div>
    </section>

    <x-footer />

</body>
</html>
