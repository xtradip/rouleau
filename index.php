<?php
// Page configuration
$page_title = "Elagage Urbain TR - Abattage et Élagage d'Arbres à Sherbrooke";
$page_description = "Expert en abattage, élagage, taillage et plantation d'arbres à Sherbrooke et en Estrie. Service professionnel et sécuritaire. Soumission gratuite au 819-212-8222.";
$base_path = "";
$css_path = "";

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero section-padding"
    style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('images/abattage2.jpeg'); background-size: cover; background-position: center; color: white; text-align: center;">
    <div class="container">
        <h1>Services d'Arboriculture Professionnels à Sherbrooke</h1>
        <p style="font-size: 1.2rem; margin: 1rem 0 2rem; color: #f0f0f0;">Abattage, Élagage, Plantation et Soins
            aux Arbres en Estrie.</p>
        <a href="tel:8192128222" class="btn btn-accent" style="display: inline-flex; align-items: center; gap: 0.5rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                </path>
            </svg>
            819-212-8222
        </a>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section-padding">
    <div class="container">
        <h2 class="text-center">Nos Services d'Arboriculture à Sherbrooke et en Estrie</h2>
        <p class="text-center" style="margin-bottom: 3rem;">Des solutions complètes pour la santé et la sécurité de
            vos arbres à Sherbrooke, Magog, Orford et partout en Estrie.</p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <!-- Service 1 -->
            <div class="service-card" style="border: 1px solid #eee; border-radius: 8px; overflow: hidden;">
                <img src="images/abattage2.jpeg" alt="Abattage d'arbres Sherbrooke">
                <div style="padding: 0 2rem 2rem 2rem;">
                    <h3>Abattage d'Arbres à Sherbrooke</h3>
                    <p>Service d'<strong>abattage d'arbres professionnel</strong> à Sherbrooke et en Estrie. Que votre
                        arbre soit dangereux, malade ou simplement mal situé, notre équipe certifiée procède à un
                        abattage sécuritaire et contrôlé. Nous utilisons des techniques de démontage par section pour
                        les espaces restreints et garantissons un nettoyage complet de votre terrain.</p>
                    <a href="services/abattage.php"
                        style="color: var(--primary-color); font-weight: 600; margin-top: 1rem; display: inline-block;">En
                        savoir plus &rarr;</a>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="service-card" style="border: 1px solid #eee; border-radius: 8px; overflow: hidden;">
                <img src="images/elagage.png" alt="Élagage d'arbres Estrie">
                <div style="padding: 0 2rem 2rem 2rem;">
                    <h3>Élagage d'Arbres en Estrie</h3>
                    <p><strong>Élagage professionnel</strong> pour améliorer la santé, la sécurité et l'esthétique de
                        vos arbres. Nos arboriculteurs certifiés pratiquent l'élagage de sécurité, d'assainissement et
                        d'éclaircissage selon les normes de l'industrie. Idéal pour prévenir les chutes de branches lors
                        de tempêtes de verglas fréquentes dans la région de Sherbrooke.</p>
                    <a href="services/elagage.php"
                        style="color: var(--primary-color); font-weight: 600; margin-top: 1rem; display: inline-block;">En
                        savoir plus &rarr;</a>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="service-card" style="border: 1px solid #eee; border-radius: 8px; overflow: hidden;">
                <img src="images/taillage.png" alt="Taillage de haies Sherbrooke">
                <div style="padding: 0 2rem 2rem 2rem;">
                    <h3>Taillage de Haies de Cèdres</h3>
                    <p>Spécialistes du <strong>taillage de haies de cèdres</strong> à Sherbrooke et Magog. Nous
                        maintenons vos haies denses, droites et en santé grâce à une taille annuelle précise. Service
                        rapide avec ramassage complet des retailles. Parfait pour préserver votre intimité et
                        l'apparence soignée de votre propriété en Estrie.</p>
                    <a href="services/taillage.php"
                        style="color: var(--primary-color); font-weight: 600; margin-top: 1rem; display: inline-block;">En
                        savoir plus &rarr;</a>
                </div>
            </div>
            <!-- Service 4 -->
            <div class="service-card" style="border: 1px solid #eee; border-radius: 8px; overflow: hidden;">
                <img src="images/plantation.png" alt="Plantation d'arbres Estrie">
                <div style="padding: 0 2rem 2rem 2rem;">
                    <h3>Plantation d'Arbres</h3>
                    <p><strong>Plantation d'arbres adaptés au climat de l'Estrie.</strong> Nous vous conseillons sur les
                        meilleures essences pour votre terrain à Sherbrooke, résistantes aux hivers rigoureux et aux
                        conditions locales. Service complet incluant la préparation du sol, la plantation
                        professionnelle et les conseils d'entretien pour assurer la croissance optimale de vos arbres.
                    </p>
                    <a href="services/plantation.php"
                        style="color: var(--primary-color); font-weight: 600; margin-top: 1rem; display: inline-block;">En
                        savoir plus &rarr;</a>
                </div>
            </div>
            <!-- Service 5 -->
            <div class="service-card" style="border: 1px solid #eee; border-radius: 8px; overflow: hidden;">
                <img src="images/deboisement.png" alt="Déboisement terrain Sherbrooke">
                <div style="padding: 0 2rem 2rem 2rem;">
                    <h3>Déboisement de Terrain</h3>
                    <p>Service de <strong>déboisement et préparation de terrain</strong> pour vos projets de
                        construction à Sherbrooke et en Estrie. Déboisement sélectif ou complet, débroussaillage et
                        essouchement. Équipement professionnel pour terrains résidentiels et commerciaux. Travail
                        rapide, propre et conforme aux réglementations municipales de la région.</p>
                    <a href="services/deboisement.php"
                        style="color: var(--primary-color); font-weight: 600; margin-top: 1rem; display: inline-block;">En
                        savoir plus &rarr;</a>
                </div>
            </div>
            <!-- Service 6 -->
            <div class="service-card" style="border: 1px solid #eee; border-radius: 8px; overflow: hidden;">
                <img src="images/haubanage.jpeg" alt="Haubanage arbres Sherbrooke">
                <div style="padding: 0 2rem 2rem 2rem;">
                    <h3>Haubanage d'Arbres</h3>
                    <p><strong>Haubanage professionnel</strong> pour sauver vos arbres matures à Sherbrooke. Cette
                        technique de consolidation prévient la rupture de branches et prolonge la vie de vos arbres
                        précieux. Particulièrement recommandé pour les arbres exposés aux vents violents et aux
                        accumulations de neige typiques de l'Estrie.</p>
                    <a href="services/haubanage.php"
                        style="color: var(--primary-color); font-weight: 600; margin-top: 1rem; display: inline-block;">En
                        savoir plus &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About / Local SEO Section -->
<section id="about" class="section-padding"
    style="background: linear-gradient(rgba(26, 26, 26, 0.85), rgba(26, 26, 26, 0.85)), url('images/abattage2.jpeg'); background-size: cover; background-position: center; background-attachment: fixed; color: white;">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            <h2 style="text-align: center; margin-bottom: 2rem; color: white;">Votre Expert Arboricole en Estrie</h2>

            <p style="margin-bottom: 1.5rem; color: #f0f0f0;">Chez <strong>Elagage Urbain TR</strong>, nous sommes fiers
                de servir la communauté de <strong>Sherbrooke et ses environs</strong>. Avec une
                expertise locale approfondie et un équipement de pointe, nous garantissons des travaux d'arboriculture
                sécuritaires et respectueux de votre propriété. Notre équipe d'arboriculteurs certifiés connaît
                parfaitement les essences d'arbres de la région et les défis climatiques spécifiques à l'Estrie.</p>

            <p style="margin-bottom: 1.5rem; color: #f0f0f0;">Nous desservons fièrement <strong>Sherbrooke, Magog,
                    Orford, North Hatley, Waterville, Coaticook, Windsor, Cookshire-Eaton, East Angus, Brompton, Ayer's
                    Cliff et Austin</strong>. Peu importe où vous vous trouvez dans les Cantons-de-l'Est, notre équipe
                se déplace rapidement pour évaluer vos besoins et vous offrir une soumission gratuite sans engagement.
            </p>

            <p style="margin-bottom: 1.5rem; color: #f0f0f0;">Notre engagement envers la sécurité est primordial. Nous
                sommes pleinement assurés et respectons rigoureusement les normes de l'industrie arboricole. Chaque
                intervention est planifiée méticuleusement pour protéger votre propriété, vos bâtiments et vos
                aménagements paysagers. Nous utilisons des équipements professionnels modernes incluant nacelles, grues,
                broyeuses et matériel de grimpe certifié.</p>

            <p style="margin-bottom: 2rem; color: #f0f0f0;">La satisfaction de nos clients est au cœur de nos priorités.
                Nous offrons un service courtois, ponctuel et transparent. Chaque projet se termine par un nettoyage
                complet du site, laissant votre terrain impeccable. Contactez-nous dès aujourd'hui pour discuter de vos
                besoins en arboriculture – notre équipe se fera un plaisir de vous conseiller et de vous accompagner
                dans tous vos projets d'entretien d'arbres et d'aménagement paysager.</p>

            <!-- Google Maps -->
            <div style="margin: 2rem 0; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.3);">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2801.7551175463177!2d-71.97978882334999!3d45.39411043811204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb7b5930e2feeef%3A0xd36a37f5b5ffeb26!2s%C3%89lagage%20Urbain%20TR!5e0!3m2!1sfr!2sca!4v1763952875025!5m2!1sfr!2sca"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="text-center">
                <a href="tel:8192128222" class="btn btn-accent">Obtenir une soumission gratuite</a>
            </div>
        </div>
    </div>
</section>

<!-- Avis Clients Section -->
<section class="section-padding" style="background-color: var(--bg-off-white);">
    <div class="container">
        <h2 class="text-center" style="margin-bottom: 1rem;">Ce Que Disent Nos Clients</h2>
        <p class="text-center" style="margin-bottom: 3rem; color: #666;">Découvrez les avis de nos clients satisfaits à
            Sherbrooke et en Estrie</p>

        <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 2rem;">

            <!-- Avis 2 -->
            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                    <div
                        style="width: 50px; height: 50px; border-radius: 50%; background: var(--primary-color); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem; margin-right: 1rem;">
                        ZV</div>
                    <div>
                        <h4 style="margin: 0; font-size: 1rem;">Zacky Vengence</h4>
                        <div style="color: #FFB800; font-size: 1.1rem;">★★★★★</div>
                    </div>
                </div>
                <p style="color: #555; font-style: italic; line-height: 1.6;">"Service impeccable du début à la fin.
                    Bons conseils, je recommande. La taille de haies est parfaite et la coupe de mon arbre très bien
                    exécutée. Très satisfaite du service professionnel reçu."
                </p>
                <p style="color: #999; font-size: 0.9rem; margin-top: 1rem;">11-16-2025</p>
            </div>

            <!-- Avis 3 -->
            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                    <div
                        style="width: 50px; height: 50px; border-radius: 50%; background: var(--primary-color); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem; margin-right: 1rem;">
                        PE</div>
                    <div>
                        <h4 style="margin: 0; font-size: 1rem;">Paolo Espinoza</h4>
                        <div style="color: #FFB800; font-size: 1.1rem;">★★★★★</div>
                    </div>
                </div>
                <p style="color: #555; font-style: italic; line-height: 1.6;">"Ma haie n’a jamais été aussi bien taillée
                    avant l’hiver, un grand merci !!"
                </p>
                <p style="color: #999; font-size: 0.9rem; margin-top: 1rem;">11-19-2025</p>
            </div>

            <!-- Avis 4 -->
            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                    <div
                        style="width: 50px; height: 50px; border-radius: 50%; background: var(--primary-color); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem; margin-right: 1rem;">
                        ML</div>
                    <div>
                        <h4 style="margin: 0; font-size: 1rem;">Maggy Lemieux</h4>
                        <div style="color: #FFB800; font-size: 1.1rem;">★★★★★</div>
                    </div>
                </div>
                <p style="color: #555; font-style: italic; line-height: 1.6;">"Service impeccable ! L’équipe d’Élagage
                    Urbain TR a abattu un arbre dangereux derrière ma maison à Sherbrooke. Travail rapide, sécuritaire
                    et super propre. Je recommande fortement !"</p>
                <p style="color: #999; font-size: 0.9rem; margin-top: 1rem;">11-13-2025</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                    <div
                        style="width: 50px; height: 50px; border-radius: 50%; background: var(--primary-color); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem; margin-right: 1rem;">
                        JR</div>
                    <div>
                        <h4 style="margin: 0; font-size: 1rem;">Jean-Raphaël Rioux</h4>
                        <div style="color: #FFB800; font-size: 1.1rem;">★★★★</div>
                    </div>
                </div>
                <p style="color: #555; font-style: italic; line-height: 1.6;">"Très bon service ! Ils ont élagué
                    plusieurs arbres sur mon terrain et tout a été laissé impeccable après leur passage. Prix
                    raisonnable, explications claires et super attitude."</p>
                <p style="color: #999; font-size: 0.9rem; margin-top: 1rem;">11-17-2025</p>
            </div>

            <!-- Avis 5 -->
            <!-- <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                    <div
                        style="width: 50px; height: 50px; border-radius: 50%; background: var(--primary-color); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 1.2rem; margin-right: 1rem;">
                        RC</div>
                    <div>
                        <h4 style="margin: 0; font-size: 1rem;">Robert Côté</h4>
                        <div style="color: #FFB800; font-size: 1.1rem;">★★★★★</div>
                    </div>
                </div>
                <p style="color: #555; font-style: italic; line-height: 1.6;">"Plantation de plusieurs arbres sur mon
                    terrain. Excellents conseils sur les essences adaptées au climat de l'Estrie. Très satisfait du
                    résultat !"</p>
                <p style="color: #999; font-size: 0.9rem; margin-top: 1rem;">Il y a 3 mois</p>
            </div> -->
        </div>

        <div class="text-center">
            <a href="https://maps.app.goo.gl/uw1UcRu17q9qKFKd7" target="_blank" rel="noopener noreferrer" class="btn"
                style="background-color: #4285F4; color: white;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"
                    style="vertical-align: middle; margin-right: 0.5rem;">
                    <path
                        d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                        fill="#4285F4" />
                    <path
                        d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                        fill="#34A853" />
                    <path
                        d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                        fill="#FBBC05" />
                    <path
                        d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                        fill="#EA4335" />
                </svg>
                Voir tous nos avis Google
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>