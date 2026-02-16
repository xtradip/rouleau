<?php
/**
 * Zone d'intervention - Données des villes et districts
 * Toutes les villes desservies par Élagage Urbain TR avec leurs quartiers/secteurs
 */

$services_list = [
    [
        'slug' => 'abattage',
        'name' => "Abattage d'arbres",
        'short' => 'Abattage',
        'icon' => '🪓',
        'description' => "Abattage sécuritaire d'arbres dangereux, malades ou mal situés. Démontage par sections en espace restreint."
    ],
    [
        'slug' => 'elagage',
        'name' => "Élagage et émondage",
        'short' => 'Élagage',
        'icon' => '✂️',
        'description' => "Taille raisonnée et élagage de sécurité pour la santé et l'esthétique de vos arbres."
    ],
    [
        'slug' => 'taillage',
        'name' => "Taillage de haies de cèdres",
        'short' => 'Taillage',
        'icon' => '🌿',
        'description' => "Taille professionnelle de haies de cèdres et arbustes pour une apparence soignée et uniforme."
    ],
    [
        'slug' => 'plantation',
        'name' => "Plantation d'arbres",
        'short' => 'Plantation',
        'icon' => '🌱',
        'description' => "Conseil et plantation d'arbres adaptés au climat de l'Estrie. Espèces indigènes et résistantes."
    ],
    [
        'slug' => 'deboisement',
        'name' => "Déboisement de terrain",
        'short' => 'Déboisement',
        'icon' => '🏗️',
        'description' => "Déboisement, essouchement et préparation de terrain pour construction résidentielle ou commerciale."
    ],
    [
        'slug' => 'haubanage',
        'name' => "Haubanage d'arbres",
        'short' => 'Haubanage',
        'icon' => '🔗',
        'description' => "Consolidation et câblage d'arbres matures par haubanage. Sauvez vos arbres fragiles."
    ]
];

$zones = [
    'sherbrooke' => [
        'name' => 'Sherbrooke',
        'population' => '172 000',
        'description' => "Sherbrooke, plus grande ville de l'Estrie et sixième ville du Québec, est le cœur de notre zone d'intervention. Avec ses nombreux quartiers résidentiels bordés d'arbres matures, la demande en services d'arboriculture y est constante toute l'année.",
        'seo_text' => "Vous cherchez un arboriculteur professionnel à Sherbrooke ? Élagage Urbain TR dessert tous les arrondissements de Sherbrooke pour l'abattage d'arbres, l'élagage, le taillage de haies de cèdres, la plantation, le déboisement et le haubanage. Notre équipe intervient rapidement partout à Sherbrooke avec expertise et professionnalisme.",
        'districts' => [
            'rock-forest' => [
                'name' => 'Rock Forest',
                'full_name' => 'Rock Forest – Saint-Élie – Deauville',
                'description' => "Rock Forest est le plus grand secteur résidentiel de l'ouest de Sherbrooke. Avec ses nombreuses propriétés spacieuses et boisées, les services d'élagage et d'abattage y sont très demandés, notamment pour l'entretien des haies de cèdres et la gestion des arbres matures."
            ],
            'lennoxville' => [
                'name' => 'Lennoxville',
                'full_name' => 'Lennoxville',
                'description' => "Lennoxville, le seul arrondissement bilingue de Sherbrooke, est reconnu pour son charme historique et ses rues bordées d'arbres centenaires. Nos services d'arboriculture aident à préserver ce patrimoine arboricole unique tout en assurant la sécurité des résidents."
            ],
            'fleurimont' => [
                'name' => 'Fleurimont',
                'full_name' => 'Fleurimont',
                'description' => "Fleurimont, vaste arrondissement abritant les deux principaux hôpitaux de Sherbrooke et un important pôle commercial, possède de nombreux quartiers résidentiels avec des arbres nécessitant un entretien régulier. Nos arboriculteurs interviennent pour l'élagage de sécurité et le taillage de haies dans tout le secteur."
            ],
            'jacques-cartier' => [
                'name' => 'Jacques-Cartier',
                'full_name' => 'Jacques-Cartier (Arrondissement des Nations)',
                'description' => "Le secteur Jacques-Cartier, maintenant intégré à l'arrondissement des Nations, est un quartier prisé pour sa proximité avec la rivière Magog et ses espaces verts. Ses propriétés résidentielles entourées de végétation nécessitent régulièrement des services d'élagage et de plantation."
            ],
            'brompton' => [
                'name' => 'Brompton',
                'full_name' => 'Brompton',
                'description' => "Brompton, quartier plus rural à l'est de Sherbrooke, combine résidences et terrains agricoles. Les propriétaires font régulièrement appel à nos services pour le déboisement de terrain, l'abattage d'arbres et l'entretien de leurs haies de cèdres."
            ],
            'mont-bellevue' => [
                'name' => 'Mont-Bellevue',
                'full_name' => 'Mont-Bellevue (Arrondissement des Nations)',
                'description' => "Le secteur Mont-Bellevue, voisin du parc du même nom, est un quartier résidentiel prisé de Sherbrooke. Avec ses arbres matures et ses terrains boisés, nos services d'élagage, d'abattage et de taillage de haies sont fréquemment sollicités."
            ],
            'saint-elie' => [
                'name' => 'Saint-Élie',
                'full_name' => 'Saint-Élie-d\'Orford',
                'description' => "Saint-Élie, secteur situé entre Sherbrooke et Orford, offre un cadre semi-rural avec de grandes propriétés boisées. Les résidents font appel à nos services pour le déboisement, la plantation d'arbres et l'entretien de leurs terrains."
            ],
            'deauville' => [
                'name' => 'Deauville',
                'full_name' => 'Deauville',
                'description' => "Deauville, situé dans l'ouest de Sherbrooke près du lac Magog, est un secteur résidentiel avec de belles propriétés entourées de nature. Nos arboriculteurs y interviennent régulièrement pour l'élagage, le taillage de haies et la gestion des arbres à proximité des résidences."
            ]
        ]
    ],
    'magog' => [
        'name' => 'Magog',
        'population' => '28 000',
        'description' => "Magog, chef-lieu de la MRC de Memphrémagog, est située au nord-est du magnifique lac Memphrémagog. Cette ville touristique en pleine croissance nécessite des services d'arboriculture pour ses quartiers résidentiels et ses propriétés en bordure de lac.",
        'seo_text' => "Élagage Urbain TR offre ses services d'arboriculture professionnels à Magog et ses environs. Abattage d'arbres, élagage, taillage de haies de cèdres, plantation et déboisement — nous intervenons rapidement dans tous les secteurs de Magog. Soumission gratuite au 819-212-8222.",
        'districts' => [
            'centre-ville-magog' => [
                'name' => 'Centre-ville de Magog',
                'full_name' => 'Centre-ville de Magog',
                'description' => "Le centre-ville de Magog, dynamique et animé, combine commerces, restaurants et résidences. Les arbres de rue et les propriétés du centre nécessitent un entretien professionnel régulier pour l'élagage de sécurité et le taillage de haies."
            ],
            'secteur-ouest-magog' => [
                'name' => 'Secteur Ouest',
                'full_name' => 'Secteur Ouest de Magog',
                'description' => "Le secteur ouest de Magog regroupe des quartiers résidentiels en développement près de l'Autoroute 10 et de la route d'Orford. Les nouvelles constructions et les terrains boisés nécessitent des services de déboisement et de plantation."
            ],
            'lac-memphremagog' => [
                'name' => 'Bord du Lac Memphrémagog',
                'full_name' => 'Secteur du Lac Memphrémagog',
                'description' => "Les propriétés riveraines du lac Memphrémagog à Magog sont parmi les plus prisées de l'Estrie. L'entretien des arbres y est crucial pour préserver les vues, protéger les berges et prévenir les dommages causés par les arbres dangereux."
            ]
        ]
    ],
    'orford' => [
        'name' => 'Orford',
        'population' => '4 500',
        'description' => "La municipalité du Canton d'Orford, célèbre pour le Parc national du Mont-Orford, est un joyau de l'Estrie. Avec 43% de son territoire en zone publique et de nombreuses résidences entourées de forêts, les services d'arboriculture y sont essentiels.",
        'seo_text' => "Nos arboriculteurs professionnels desservent Orford et les environs du Mont-Orford pour tous vos besoins en arboriculture. Que ce soit l'élagage d'arbres autour de votre chalet, le taillage de haies ou le déboisement pour un nouveau projet, Élagage Urbain TR est votre partenaire de confiance.",
        'districts' => [
            'cherry-river' => [
                'name' => 'Cherry River',
                'full_name' => 'Cherry River',
                'description' => "Cherry River, charmant hameau d'Orford, est entouré de forêts et de lacs. Les propriétaires de chalets et résidences font appel à nos services pour l'élagage sécuritaire, le déboisement contrôlé et la plantation d'arbres adaptés."
            ],
            'canton-orford' => [
                'name' => 'Cœur villageois d\'Orford',
                'full_name' => 'Cœur villageois d\'Orford',
                'description' => "Le cœur villageois d'Orford, avec ses restaurants, hôtels et commerces d'artisans, est bordé de magnifiques arbres matures. Nous y intervenons pour l'élagage d'entretien et la prévention des risques liés aux tempêtes de verglas."
            ]
        ]
    ],
    'north-hatley' => [
        'name' => 'North Hatley',
        'population' => '700',
        'description' => "North Hatley, pittoresque village situé sur les rives du lac Massawippi, est reconnu pour ses résidences patrimoniales et son charme victorien. La préservation de ses arbres centenaires et l'entretien paysager de ses propriétés de prestige requièrent une expertise arboricole de haut niveau.",
        'seo_text' => "Élagage Urbain TR offre ses services d'arboriculture à North Hatley. Nos arboriculteurs certifiés prennent soin de vos arbres matures et de vos haies avec le plus grand professionnalisme. Soumission gratuite.",
        'districts' => []
    ],
    'waterville' => [
        'name' => 'Waterville',
        'population' => '2 200',
        'description' => "Waterville, petite ville dynamique au sud de Sherbrooke sur les rives de la rivière Coaticook, possède un riche patrimoine arboricole. Ses rues bordées d'arbres et ses propriétés résidentielles nécessitent un entretien régulier en arboriculture.",
        'seo_text' => "Résidents de Waterville, Élagage Urbain TR est votre arboriculteur de proximité. Abattage, élagage, taillage de haies et plantation — nous intervenons rapidement avec expertise. Appelez-nous pour une soumission gratuite.",
        'districts' => []
    ],
    'coaticook' => [
        'name' => 'Coaticook',
        'population' => '9 000',
        'description' => "Coaticook, ville reconnue pour sa gorge spectaculaire et son parc de la Gorge, est le chef-lieu de la MRC de Coaticook. Ses quartiers résidentiels et ses terrains en développement offrent une demande constante en services d'arboriculture.",
        'seo_text' => "Élagage Urbain TR dessert Coaticook et toute la MRC pour vos besoins en arboriculture. Nos services incluent l'abattage d'arbres, l'élagage, le taillage de haies de cèdres, la plantation et le déboisement de terrain.",
        'districts' => [
            'centre-ville-coaticook' => [
                'name' => 'Centre-ville de Coaticook',
                'full_name' => 'Centre-ville de Coaticook',
                'description' => "Le centre-ville de Coaticook, avec ses rues patrimoniales et ses arbres de rue, nécessite un entretien arboricole régulier pour assurer la sécurité des piétons et la beauté du paysage urbain."
            ],
            'quartier-des-erables' => [
                'name' => 'Quartier des Érables',
                'full_name' => 'Quartier des Érables',
                'description' => "Le Quartier des Érables, développement résidentiel en pleine croissance à Coaticook, offre de nouvelles opportunités pour la plantation d'arbres et l'aménagement paysager professionnel."
            ]
        ]
    ],
    'windsor' => [
        'name' => 'Windsor',
        'population' => '5 500',
        'description' => "Windsor, ville industrielle et résidentielle au nord-ouest de Sherbrooke, est située au confluent des rivières Saint-François et Watopeka. Ses quartiers résidentiels nécessitent une attention régulière pour l'entretien des arbres et des haies.",
        'seo_text' => "Élagage Urbain TR dessert Windsor et ses environs pour tous vos besoins en arboriculture professionnelle. Abattage, élagage, taillage de haies, plantation et déboisement. Soumission gratuite.",
        'districts' => []
    ],
    'cookshire-eaton' => [
        'name' => 'Cookshire-Eaton',
        'population' => '5 600',
        'description' => "Cookshire-Eaton, municipalité rurale à l'est de Sherbrooke, combine centres villageois et vastes territoires agricoles et forestiers. Le déboisement de terrain pour la construction et l'entretien des arbres résidentiels y sont particulièrement demandés.",
        'seo_text' => "Élagage Urbain TR offre ses services à Cookshire-Eaton pour le déboisement, l'abattage d'arbres, l'élagage et la plantation. Service professionnel en milieu rural et résidentiel.",
        'districts' => []
    ],
    'east-angus' => [
        'name' => 'East Angus',
        'population' => '3 800',
        'description' => "East Angus, ville située sur les rives de la rivière Saint-François, offre un cadre de vie paisible avec de nombreuses propriétés boisées. Nos services d'arboriculture sont essentiels pour la sécurité et l'esthétique des propriétés locales.",
        'seo_text' => "Résidents d'East Angus, Élagage Urbain TR vous offre des services d'arboriculture professionnels. Abattage, élagage, taillage de haies et déboisement. Appelez-nous pour une soumission gratuite.",
        'districts' => []
    ],
    'ayers-cliff' => [
        'name' => "Ayer's Cliff",
        'population' => '1 100',
        'description' => "Ayer's Cliff, charmant village en bordure du lac Massawippi, est prisé pour ses paysages magnifiques et ses propriétés de prestige. L'entretien des arbres et haies dans ce cadre bucolique requiert une expertise professionnelle pour préserver la beauté naturelle du lieu.",
        'seo_text' => "Élagage Urbain TR dessert Ayer's Cliff pour l'entretien de vos arbres et haies en bordure du lac Massawippi. Service professionnel et respectueux de l'environnement.",
        'districts' => []
    ],
    'austin' => [
        'name' => 'Austin',
        'population' => '1 900',
        'description' => "Austin, municipalité bucolique près du lac Memphrémagog, est un havre de nature avec ses collines boisées et ses propriétés champêtres. Les résidents font appel à nos services pour l'élagage d'arbres, le déboisement contrôlé et la plantation d'espèces adaptées.",
        'seo_text' => "Élagage Urbain TR dessert Austin et les environs du lac Memphrémagog. Nos arboriculteurs prennent soin de vos arbres avec professionnalisme. Soumission gratuite.",
        'districts' => []
    ]
];

/**
 * Helper functions
 */
function getZoneBySlug($slug)
{
    global $zones;
    return isset($zones[$slug]) ? $zones[$slug] : null;
}

function getDistrictBySlug($citySlug, $districtSlug)
{
    global $zones;
    if (isset($zones[$citySlug]['districts'][$districtSlug])) {
        return $zones[$citySlug]['districts'][$districtSlug];
    }
    return null;
}

function generateCityUrl($citySlug)
{
    return "/zone-intervention/" . $citySlug;
}

function generateDistrictUrl($citySlug, $districtSlug, $cityName)
{
    global $zones;
    $district = $zones[$citySlug]['districts'][$districtSlug];
    $districtName = strtolower($district['name']);
    $districtName = str_replace([' ', "'", "'"], ['-', '-', '-'], $districtName);
    // Format: ville/district-elagage-abattage-arbres-et-taillage-de-haies
    return "/zone-intervention/" . $citySlug . "/" . $districtSlug . "-elagage-abattage-arbres-et-taillage-de-haies";
}

function getAllCitySlugs()
{
    global $zones;
    return array_keys($zones);
}
?>