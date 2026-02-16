<?php
// Zone d'intervention - Page de district/quartier dynamique
require_once __DIR__ . '/data.php';

// Get city and district slugs from query parameters
$city_slug = isset($_GET['ville']) ? $_GET['ville'] : '';
$district_slug = isset($_GET['district']) ? $_GET['district'] : '';

$city = getZoneBySlug($city_slug);
$district = $city ? getDistrictBySlug($city_slug, $district_slug) : null;

// 404 if not found
if (!$city || !$district) {
    header("HTTP/1.0 404 Not Found");
    echo "<h1>Page non trouvée</h1>";
    exit;
}

$page_title = "Élagage et Abattage d'Arbres à " . $district['name'] . ", " . $city['name'] . " | Estrie";
$page_description = "Arboriculteur à " . $district['name'] . ", " . $city['name'] . ". Élagage, abattage d'arbres, taillage de haies de cèdres. Service professionnel. Soumission gratuite 819-212-8222.";
$base_path = "../";
$css_path = "../";
$canonical_url = "https://elagageurbaintr.ca/zone-intervention/" . $city_slug . "/" . $district_slug . "-elagage-abattage-arbres-et-taillage-de-haies";

include '../includes/header.php';
?>



<!-- Hero Section -->
<section class="hero section-padding"
    style="background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('../images/abattage2.webp'); background-size: cover; background-position: center; color: white; text-align: center; min-height: 500px; display: flex; align-items: center;">
    <div class="container">
        <h1>Élagage, Abattage d'Arbres et Taillage de Haies à
            <?php echo $city['name']; ?> dans le secteur de
            <?php echo $district['name']; ?>
        </h1>
        <p style="font-size: 1.15rem; margin: 1rem 0 2rem; color: #f0f0f0;">
            Arboriculteur professionnel dans le secteur
            <?php echo $district['full_name']; ?><br>
            Tous nos services d'arboriculture disponibles | Soumission gratuite
        </p>
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

<!-- Description du quartier -->
<!-- Breadcrumb -->
<nav style="background: var(--bg-light); padding: 0.75rem 0; font-size: 0.9rem;" aria-label="Fil d'Ariane">
    <div class="container">
        <a href="<?php echo $base_path; ?>" style="color: var(--primary);">Accueil</a>
        <span style="color: var(--text-secondary);"> › </span>
        <a href="<?php echo $base_path; ?>zone-intervention" style="color: var(--primary);">Zone d'intervention</a>
        <span style="color: var(--text-secondary);"> › </span>
        <a href="<?php echo $base_path; ?>zone-intervention/ville.php?ville=<?php echo $city_slug; ?>"
            style="color: var(--primary);">
            <?php echo $city['name']; ?>
        </a>
        <span style="color: var(--text-secondary);"> › </span>
        <span style="color: var(--text-secondary);">
            <?php echo $district['name']; ?>
        </span>
    </div>
</nav>
<section class="section-padding">

    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2>Arboriculteur à
                <?php echo $city['name']; ?> dans le secteur
                <?php echo $district['name']; ?>
            </h2>
            <p style="font-size: 1.05rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 1.5rem;">
                <?php echo $district['description']; ?>
            </p>
            <p style="font-size: 1.05rem; line-height: 1.8;">
                <strong>Élagage Urbain TR</strong> est votre arboriculteur de confiance à
                <strong>
                    <?php echo $city['name']; ?>
                </strong>, dans le secteur
                <strong>
                    <?php echo $district['full_name']; ?>
                </strong> de
                <?php echo $city['name']; ?>.
                Nous intervenons rapidement pour tous vos besoins en arboriculture : abattage d'arbres dangereux,
                élagage de sécurité, taillage de haies de cèdres, plantation d'arbres, déboisement de terrain et
                haubanage. Contactez-nous pour une <strong>soumission gratuite</strong>.
            </p>
        </div>
    </div>
</section>

<!-- Services détaillés -->
<section class="section-padding" style="background: var(--bg-light);">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 2rem;">Services d'Arboriculture à
            <?php echo $city['name']; ?> dans le secteur
            <?php echo $district['name']; ?>
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 1.5rem;">
            <?php foreach ($services_list as $service): ?>
                <a href="<?php echo $base_path; ?>services/<?php echo $service['slug']; ?>.php"
                    style="text-decoration: none; color: inherit;">
                    <div
                        style="background: white; border-radius: 12px; padding: 1.5rem; box-shadow: 0 2px 10px rgba(0,0,0,0.07); transition: transform 0.2s ease, box-shadow 0.2s ease; height: 100%; border-bottom: 3px solid var(--primary);">
                        <h3 style="margin: 0 0 0.75rem 0; font-size: 1.1rem; color: var(--primary-dark);">
                            <?php echo $service['icon']; ?>
                            <?php echo $service['name']; ?> à
                            <?php echo $city['name']; ?> dans le secteur
                            <?php echo $district['name']; ?>
                        </h3>
                        <p style="color: var(--text-secondary); font-size: 0.95rem; margin: 0; line-height: 1.6;">
                            <?php echo $service['description']; ?>
                            Notre équipe intervient dans tout le secteur de
                            <?php echo $district['full_name']; ?> pour vous offrir un service rapide et professionnel.
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Pourquoi nous choisir -->
<section class="section-padding">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 2rem;">Pourquoi Choisir Élagage Urbain TR à
            <?php echo $district['name']; ?> ?
        </h2>
        <div
            style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 1.5rem; max-width: 900px; margin: 0 auto;">
            <div style="text-align: center; padding: 1.5rem;">
                <div style="font-size: 2.5rem; margin-bottom: 0.75rem;">⚡</div>
                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Intervention Rapide</h3>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Nous intervenons rapidement dans le secteur
                    <?php echo $district['name']; ?> de
                    <?php echo $city['name']; ?>, souvent dans les 24-48h.
                </p>
            </div>
            <div style="text-align: center; padding: 1.5rem;">
                <div style="font-size: 2.5rem; margin-bottom: 0.75rem;">🛡️</div>
                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Équipe Assurée</h3>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Notre équipe est formée, diplômée et
                    couverte par une assurance responsabilité complète.</p>
            </div>
            <div style="text-align: center; padding: 1.5rem;">
                <div style="font-size: 2.5rem; margin-bottom: 0.75rem;">💯</div>
                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">Soumission Gratuite</h3>
                <p style="color: var(--text-secondary); font-size: 0.9rem;">Estimation détaillée et sans engagement pour
                    tous vos projets d'arboriculture à
                    <?php echo $district['name']; ?>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Autres quartiers -->
<?php
$other_districts = array_diff_key($city['districts'], [$district_slug => true]);
if (!empty($other_districts)): ?>
    <section class="section-padding" style="background: var(--bg-light);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 1.5rem;">Autres Quartiers Desservis à
                <?php echo $city['name']; ?>
            </h2>
            <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; justify-content: center;">
                <?php foreach ($other_districts as $otherSlug => $other): ?>
                    <a href="<?php echo $base_path; ?>zone-intervention/district.php?ville=<?php echo $city_slug; ?>&district=<?php echo $otherSlug; ?>"
                        style=" background: white; padding: 0.5rem 1.25rem; border-radius: 25px; text-decoration: none;
                color: var(--primary-dark); font-size: 0.95rem; box-shadow: 0 1px 4px rgba(0,0,0,0.08); transition: all
                0.2s ease;">
                        📍
                        <?php echo $other['name']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- CTA Section -->
<section class="section-padding" style="background: var(--primary);  text-align: center;">
    <div class="container">
        <h2 style="">Prêt à Embellir Votre Propriété à
            <?php echo $district['name']; ?> ?
        </h2>
        <p style="font-size: 1.1rem; max-width: 600px; margin: 1rem auto;">
            Appelez-nous dès maintenant pour une soumission gratuite. Nous desservons tout le secteur
            <?php echo $district['full_name']; ?> de
            <?php echo $city['name']; ?>.
        </p>
        <a href="tel:8192128222" class="btn btn-accent"
            style="display: inline-flex; align-items: center; gap: 0.5rem; margin-top: 1rem;">
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

<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Accueil", "item": "https://elagageurbaintr.ca"},
    {"@type": "ListItem", "position": 2, "name": "Zone d'intervention", "item": "https://elagageurbaintr.ca/zone-intervention"},
    {"@type": "ListItem", "position": 3, "name": "<?php echo $city['name']; ?>", "item": "https://elagageurbaintr.ca/zone-intervention/<?php echo $city_slug; ?>"},
    {"@type": "ListItem", "position": 4, "name": "<?php echo $district['name']; ?>", "item": "<?php echo $canonical_url; ?>"}
  ]
}
</script>

<!-- Local Service Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Arboriculture",
  "provider": {
    "@type": "TreeService",
    "name": "Élagage Urbain TR",
    "telephone": "+1-819-212-8222",
    "url": "https://elagageurbaintr.ca"
  },
  "areaServed": {
    "@type": "Place",
    "name": "<?php echo $district['full_name']; ?>, <?php echo $city['name']; ?>",
    "containedIn": {
      "@type": "City",
      "name": "<?php echo $city['name']; ?>",
      "containedIn": {"@type": "AdministrativeArea", "name": "Estrie, Québec, Canada"}
    }
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Services d'arboriculture à <?php echo $district['name']; ?>",
    "itemListElement": [
      <?php
      $offers = [];
      foreach ($services_list as $s) {
          $offers[] = '{"@type": "Offer", "itemOffered": {"@type": "Service", "name": "' . $s['name'] . ' à ' . $district['name'] . ', ' . $city['name'] . '"}}';
      }
      echo implode(",\n      ", $offers);
      ?>
    ]
  }
}
</script>

<?php include '../includes/footer.php'; ?>