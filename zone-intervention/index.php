<?php
// Zone d'intervention - Page principale
require_once __DIR__ . '/data.php';

$page_title = "Zone d'Intervention | Arboriculteur en Estrie";
$page_description = "Élagage Urbain TR dessert Sherbrooke, Magog, Orford et toute l'Estrie. Abattage, élagage, taillage de haies, plantation, déboisement. Trouvez votre ville.";
$base_path = "../";
$css_path = "../";
$canonical_url = "https://elagageurbaintr.ca/zone-intervention";

include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero section-padding"
    style="background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)), url('../images/abattage2.webp'); background-size: cover; background-position: center; color: white; text-align: center; min-height: 350px; display: flex; align-items: center;">
    <div class="container">
        <h1>Nos Zones d'Intervention en Estrie</h1>
        <p style="font-size: 1.2rem; margin: 1rem 0 2rem; color: #f0f0f0;">
            Arboriculteur professionnel à Sherbrooke, Magog, Orford et dans toute la région de l'Estrie.<br>
            Abattage, élagage, taillage de haies de cèdres, plantation, déboisement et haubanage.
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

<!-- Introduction SEO -->
<section class="section-padding" style="background: var(--bg-light);">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <h2>Abattage d'arbres et taillage de haies en Estrie</h2>
            <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                Élagage Urbain TR dessert <strong>plus de 12 villes et municipalités</strong> en Estrie pour tous vos
                besoins
                en arboriculture. Que vous soyez à Sherbrooke, Magog, Orford ou dans les municipalités environnantes,
                notre équipe d'arboriculteurs certifiés se déplace chez vous pour une <strong>soumission
                    gratuite</strong>.
            </p>
        </div>
    </div>
</section>

<!-- Villes desservies -->
<section class="section-padding">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 2rem;">Sélectionnez Votre Ville</h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 1.5rem;">
            <?php foreach ($zones as $slug => $city): ?>
                <a href="<?php echo $base_path; ?>zone-intervention/ville.php?ville=<?php echo $slug; ?>"
                    style="text-decoration: none; color: inherit;" class="zone-city-card">
                    <div
                        style="background: white; border-radius: 12px; padding: 1.5rem; box-shadow: 0 2px 12px rgba(0,0,0,0.08); border-left: 4px solid var(--primary);">
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                            <h3 style="margin: 0; color: var(--primary-dark);">📍
                                <?php echo $city['name']; ?>
                            </h3>
                            <span
                                style="font-size: 0.85rem; color: var(--text-secondary); background: var(--bg-light); padding: 0.25rem 0.75rem; border-radius: 20px;">
                                Pop.
                                <?php echo $city['population']; ?>
                            </span>
                        </div>
                        <p
                            style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.6; margin-bottom: 0.75rem;">
                            <?php echo mb_substr($city['description'], 0, 150) . '...'; ?>
                        </p>
                        <?php if (!empty($city['districts'])): ?>
                            <div style="font-size: 0.85rem; color: var(--primary); font-weight: 500;">
                                <?php echo count($city['districts']); ?>
                                quartier<?php echo count($city['districts']) > 1 ? 's' : ''; ?>
                                desservi<?php echo count($city['districts']) > 1 ? 's' : ''; ?> →
                            </div>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Services offerts -->
<section class="section-padding" style="background: var(--bg-light);">
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 2rem;">Nos Services d'Arboriculture</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.25rem;">
            <?php foreach ($services_list as $service): ?>
                <a href="<?php echo $base_path; ?>services/<?php echo $service['slug']; ?>"
                    style="text-decoration: none; color: inherit;">
                    <div
                        style="background: white; border-radius: 10px; padding: 1.25rem; box-shadow: 0 2px 8px rgba(0,0,0,0.06); transition: transform 0.2s ease;">
                        <h3 style="margin: 0 0 0.5rem 0; font-size: 1.1rem;">
                            <?php echo $service['icon']; ?>
                            <?php echo $service['name']; ?>
                        </h3>
                        <p style="color: var(--text-secondary); font-size: 0.9rem; margin: 0; line-height: 1.5;">
                            <?php echo $service['description']; ?>
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding" style="background: var(--primary); text-align: center;">
    <div class="container">
        <h2>Votre Ville N'est Pas Listée ?</h2>
        <p style="font-size: 1.1rem; max-width: 600px; margin: 1rem auto;">
            Nous desservons aussi d'autres municipalités de l'Estrie selon la disponibilité.
            Contactez-nous pour vérifier si nous intervenons dans votre secteur.
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

<!-- Zone Intervention Schema -->
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
  "areaServed": [
    <?php
    $areas = [];
    foreach ($zones as $slug => $city) {
        $areas[] = '{"@type": "City", "name": "' . $city['name'] . '", "containedIn": {"@type": "AdministrativeArea", "name": "Estrie, Québec"}}';
    }
    echo implode(",\n    ", $areas);
    ?>
  ],
  "description": "Services d'arboriculture professionnels en Estrie. Abattage d'arbres, élagage, taillage de haies de cèdres, plantation, déboisement et haubanage."
}
</script>

<style>
    .zone-city-card div:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12) !important;
    }
</style>

<?php include '../includes/footer.php'; ?>