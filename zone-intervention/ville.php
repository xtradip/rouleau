<?php
// Zone d'intervention - Page de ville dynamique
require_once __DIR__ . '/data.php';

// Get city slug from query parameter
$city_slug = isset($_GET['ville']) ? $_GET['ville'] : '';
$city = getZoneBySlug($city_slug);

// 404 if city not found
if (!$city) {
    header("HTTP/1.0 404 Not Found");
    echo "<h1>Page non trouvée</h1>";
    exit;
}

$page_title = "Abattage d'arbres et taillage de haies à " . $city['name'] . " | Élagage Urbain TR";
$page_description = "Services d'arboriculture à " . $city['name'] . " : abattage d'arbres, élagage, taillage de haies de cèdres, plantation, déboisement. Soumission gratuite 819-212-8222.";
$base_path = "../";
$css_path = "../";
$canonical_url = "https://elagageurbaintr.ca/zone-intervention/" . $city_slug;

include '../includes/header.php';
?>



<!-- Hero Section -->
<section class="hero section-padding"
    style="background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('../images/abattage2.webp'); background-size: cover; background-position: center; color: white; text-align: center; min-height: 500px; display: flex; align-items: center;">
    <div class="container">
        <h1>Abattage d'arbres et taillage de haies à
            <?php echo $city['name']; ?> — Services d'Arboriculture en Estrie
        </h1>
        <p style="font-size: 1.15rem; margin: 1rem 0 2rem; color: #f0f0f0;">
            Abattage d'arbres, élagage, taillage de haies de cèdres, plantation, déboisement et haubanage<br>
            à
            <?php echo $city['name']; ?> et ses environs | Soumission gratuite
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

<!-- Breadcrumb -->
<nav style="background: var(--bg-light); padding: 0.75rem 0; font-size: 0.9rem;" aria-label="Fil d'Ariane">
    <div class="container">
        <a href="<?php echo $base_path; ?>" style="color: var(--primary);">Accueil</a>
        <span style="color: var(--text-secondary);"> › </span>
        <a href="<?php echo $base_path; ?>zone-intervention" style="color: var(--primary);">Zone d'intervention</a>
        <span style="color: var(--text-secondary);"> › </span>
        <span style="color: var(--text-secondary);">
            <?php echo $city['name']; ?>
        </span>
    </div>
</nav>

<!-- Description de la ville -->
<section class="section-padding">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2>Abattage d'arbres et taillage de haies à
                <?php echo $city['name']; ?>
            </h2>
            <p style="font-size: 1.05rem; color: var(--text-secondary); line-height: 1.8; margin-bottom: 1.5rem;">
                <?php echo $city['description']; ?>
            </p>
            <p style="font-size: 1.05rem; line-height: 1.8;">
                <?php echo $city['seo_text']; ?>
            </p>
        </div>
    </div>
</section>

<!-- Services offerts -->
<section class="section-padding" style="background: var(--bg-light);">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 2rem;">Nos Services d'Arboriculture à
            <?php echo $city['name']; ?>
        </h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.25rem;">
            <?php foreach ($services_list as $service): ?>
                <a href="<?php echo $base_path; ?>services/<?php echo $service['slug']; ?>.php"
                    style="text-decoration: none; color: inherit;">
                    <div
                        style="background: white; border-radius: 10px; padding: 1.5rem; box-shadow: 0 2px 8px rgba(0,0,0,0.06); transition: transform 0.2s ease, box-shadow 0.2s ease; height: 100%;">
                        <h3 style="margin: 0 0 0.75rem 0; font-size: 1.1rem; color: var(--primary-dark);">
                            <?php echo $service['icon']; ?>
                            <?php echo $service['name']; ?> à
                            <?php echo $city['name']; ?>
                        </h3>
                        <p style="color: var(--text-secondary); font-size: 0.95rem; margin: 0; line-height: 1.6;">
                            <?php echo str_replace('.', ' à ' . $city['name'] . '.', $service['description']); ?>
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php if (!empty($city['districts'])): ?>
    <!-- Quartiers desservis -->
    <section class="section-padding">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 0.75rem;">Quartiers et Secteurs Desservis à
                <?php echo $city['name']; ?>
            </h2>
            <p style="text-align: center; color: var(--text-secondary); margin-bottom: 2rem;">
                Nous intervenons dans tous les arrondissements et quartiers de
                <?php echo $city['name']; ?>
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 1.25rem;">
                <?php foreach ($city['districts'] as $districtSlug => $district): ?>
                    <a href="<?php echo $base_path; ?>zone-intervention/district.php?ville=<?php echo $city_slug; ?>&district=<?php echo $districtSlug; ?>"
                        style="text-decoration: none; color: inherit;" class="zone-district-card">
                        <div
                            style="background: white; border-radius: 12px; padding: 1.5rem; box-shadow: 0 2px 10px rgba(0,0,0,0.07); transition: transform 0.3s ease, box-shadow 0.3s ease; border-left: 4px solid var(--accent);">
                            <h3 style="margin: 0 0 0.5rem 0; color: var(--primary-dark); font-size: 1.05rem;">
                                📍
                                <?php echo $district['name']; ?>
                            </h3>
                            <p style="color: var(--text-secondary); font-size: 0.9rem; margin: 0; line-height: 1.6;">
                                <?php echo mb_substr($district['description'], 0, 150) . '...'; ?>
                            </p>
                            <span
                                style="display: inline-block; margin-top: 0.75rem; color: var(--primary); font-size: 0.85rem; font-weight: 500;">
                                Voir les services →
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- CTA Section -->
<section class="section-padding" style="background: var(--primary);  text-align: center;">
    <div class="container">
        <h2>Besoin d'un Arboriculteur à
            <?php echo $city['name']; ?> ?
        </h2>
        <p style="font-size: 1.1rem; max-width: 600px; margin: 1rem auto;">
            Obtenez une soumission gratuite pour l'abattage, l'élagage, le taillage de haies ou tout autre service
            d'arboriculture
            à
            <?php echo $city['name']; ?> et ses environs.
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
    {"@type": "ListItem", "position": 3, "name": "<?php echo $city['name']; ?>", "item": "https://elagageurbaintr.ca/zone-intervention/<?php echo $city_slug; ?>"}
  ]
}
</script>

<!-- Local Business + areaServed Schema -->
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
    "@type": "City",
    "name": "<?php echo $city['name']; ?>",
    "containedIn": {
      "@type": "AdministrativeArea",
      "name": "Estrie, Québec, Canada"
    }
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Services d'arboriculture à <?php echo $city['name']; ?>",
    "itemListElement": [
      <?php
      $offers = [];
      foreach ($services_list as $s) {
          $offers[] = '{"@type": "Offer", "itemOffered": {"@type": "Service", "name": "' . $s['name'] . ' à ' . $city['name'] . '"}}';
      }
      echo implode(",\n      ", $offers);
      ?>
    ]
  }
}
</script>

<style>
    .zone-district-card div:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12) !important;
    }
</style>

<?php include '../includes/footer.php'; ?>