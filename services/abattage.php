<?php
// Page configuration
$page_title = "Abattage d'Arbres à Sherbrooke | Élagage Urbain TR";
$page_description = "Abattage d'arbres professionnel à Sherbrooke et Estrie. Arbres dangereux, malades ou mal situés. Équipe certifiée, intervention rapide. Soumission gratuite.";
$base_path = "../";
$css_path = "../";
$canonical_url = "https://elagageurbaintr.ca/services/abattage";
$hero_image = "images/abattage2.webp";

include '../includes/header.php';
?>

<section class="hero section-padding"
    style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('../images/abattage2.webp'); background-size: cover; background-position: center; color: white; text-align: center;">
    <div class="container">
        <h1>Abattage d'Arbres Professionnel à Sherbrooke et en Estrie</h1>
        <p style="font-size: 1.2rem; margin: 1rem 0 2rem; color: #f0f0f0;">Service d'abattage d'arbres près de chez vous
            | Arbres dangereux, malades ou mal situés
        </p>
    </div>
</section>

<?php include '../contact.php'; ?>

<!-- TLDR Section -->
<section style="background-color: #f0f7f0; padding: 2rem 0;">
    <div class="container">
        <div
            style="max-width: 800px; margin: 0 auto; padding: 1.5rem; background: white; border-left: 4px solid var(--primary-color); border-radius: 4px;">
            <h3 style="margin-top: 0; color: var(--primary-color);">📋 En Bref</h3>
            <ul style="margin: 0; padding-left: 1.5rem; line-height: 1.8;">
                <li><strong>Service :</strong> Abattage d'arbres professionnel à Sherbrooke et Estrie</li>
                <li><strong>Zone desservie :</strong> Sherbrooke, Magog, Orford, Coaticook et environs</li>
                <li><strong>Délai :</strong> Intervention rapide, souvent sous 48h pour urgences</li>
                <li><strong>Tarif :</strong> Soumission gratuite - Prix compétitifs selon taille et complexité</li>
                <li><strong>Inclus :</strong> Évaluation, abattage sécuritaire, nettoyage complet</li>
            </ul>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container service-content">
        <div style="max-width: 1000px; margin: 0 auto;">
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 1rem;">Abattage d'Arbres Sécuritaire et
                Professionnel</h2>
            <p style="text-align: center; font-size: 1.1rem; color: #666; max-width: 800px; margin: 0 auto 3rem;">
                L'abattage d'un arbre est une opération délicate qui nécessite expertise et précision, surtout en milieu
                urbain comme à <strong style="color: var(--primary-color);">Sherbrooke</strong>. Chez Elagage Urbain TR,
                nous disposons de l'équipement et du
                savoir-faire pour retirer n'importe quel arbre, peu importe sa taille ou son emplacement, sans
                endommager votre propriété.</p>

            <h3 style="text-align: center; font-size: 2rem; margin: 4rem 0 2rem; color: var(--primary-color);">🌳 Quand
                l'abattage est-il nécessaire ?</h3>

            <!-- Raisons Grid -->
            <div class="reasons-grid">
                <div class="reason-card reason-card-maladie">
                    <div class="reason-icon-box">
                        <div class="reason-icon">🦠</div>
                    </div>
                    <h4>Maladie incurable</h4>
                    <p>L'arbre est infecté par des champignons ou des insectes ravageurs (ex: agrile du frêne) et ne
                        peut être sauvé.</p>
                </div>

                <div class="reason-card reason-card-danger">
                    <div class="reason-icon-box">
                        <div class="reason-icon">⚠️</div>
                    </div>
                    <h4>Danger imminent</h4>
                    <p>L'arbre penche dangereusement vers une maison, une ligne électrique ou une zone passante.</p>
                </div>

                <div class="reason-card reason-card-dommages">
                    <div class="reason-icon-box">
                        <div class="reason-icon">🏚️</div>
                    </div>
                    <h4>Dommages structurels</h4>
                    <p>Les racines endommagent les fondations, les tuyaux ou les trottoirs.</p>
                </div>

                <div class="reason-card reason-card-mort">
                    <div class="reason-icon-box">
                        <div class="reason-icon">💀</div>
                    </div>
                    <h4>Mort de l'arbre</h4>
                    <p>Un arbre mort devient cassant et représente un risque de chute imprévisible.</p>
                </div>

                <div class="reason-card reason-card-amenagement">
                    <div class="reason-icon-box">
                        <div class="reason-icon">🏗️</div>
                    </div>
                    <h4>Nouvel aménagement</h4>
                    <p>Besoin d'espace pour une construction ou pour laisser la lumière aux autres végétaux.</p>
                </div>
            </div>

            <h3 style="text-align: center; font-size: 2rem; margin: 5rem 0 3rem; color: var(--primary-color);">⚙️ Notre
                Processus d'Abattage en 6 Étapes</h3>

            <!-- Process Steps -->
            <div class="process-container">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <div class="step-icon">🔍</div>
                        <h4>Évaluation</h4>
                        <p>Analyse de l'arbre, de son inclinaison et de l'environnement immédiat.</p>
                    </div>
                    <div class="step-arrow">→</div>
                </div>

                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <div class="step-icon">🛡️</div>
                        <h4>Sécurisation</h4>
                        <p>Délimitation de la zone de travail et protection des infrastructures au sol.</p>
                    </div>
                    <div class="step-arrow">→</div>
                </div>

                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <div class="step-icon">🪓</div>
                        <h4>Démontage</h4>
                        <p>Pour les arbres proches des bâtiments, nous coupons l'arbre par sections en les descendant
                            doucement avec des cordages.</p>
                    </div>
                    <div class="step-arrow">→</div>
                </div>

                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <div class="step-icon">🎯</div>
                        <h4>Abattage directionnel</h4>
                        <p>Si l'espace le permet, nous faisons tomber l'arbre entier dans une direction précise.</p>
                    </div>
                    <div class="step-arrow">→</div>
                </div>

                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <div class="step-icon">✂️</div>
                        <h4>Ébranchage et débitage</h4>
                        <p>L'arbre est coupé en morceaux maniables pour faciliter le transport.</p>
                    </div>
                    <div class="step-arrow">→</div>
                </div>

                <div class="process-step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <div class="step-icon">✨</div>
                        <h4>Nettoyage complet</h4>
                        <p>Nous ramassons tout le bois et les branches, laissant votre terrain propre.</p>
                    </div>
                </div>
            </div>

            <div class="text-center" style="margin-top: 4rem;">
                <a href="tel:8192128222" class="btn btn-accent" style="font-size: 1.2rem; padding: 1rem 2.5rem;">📞
                    Obtenir une soumission gratuite</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section style="background-color: var(--bg-off-white); padding: 4rem 0;">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2 style="text-align: center; margin-bottom: 3rem;">Questions Fréquentes sur l'Abattage d'Arbres</h2>

            <div style="margin-bottom: 2rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Combien coûte l'abattage d'un arbre à
                    Sherbrooke ?</h3>
                <p>Le coût varie selon la taille de l'arbre, son emplacement et la complexité du travail. Un petit arbre
                    peut coûter entre 300$ et 800$, tandis qu'un grand arbre près d'une maison peut atteindre 2000$ à
                    5000$. Nous offrons des soumissions gratuites et détaillées pour chaque projet.</p>
            </div>

            <div style="margin-bottom: 2rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Ai-je besoin d'un permis pour abattre un
                    arbre à Sherbrooke ?</h3>
                <p>Oui, la Ville de Sherbrooke exige un permis d'abattage pour les arbres de plus de 15 cm de diamètre.
                    Nous pouvons vous conseiller sur les démarches à suivre et vous aider à respecter la réglementation
                    municipale en vigueur.</p>
            </div>

            <div style="margin-bottom: 2rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Combien de temps prend l'abattage d'un
                    arbre ?</h3>
                <p>Un petit arbre peut être abattu en 2-4 heures, incluant le nettoyage. Un grand arbre complexe
                    nécessitant un démontage par sections peut prendre une journée complète. Nous vous donnons toujours
                    une estimation précise lors de la soumission.</p>
            </div>

            <div style="margin-bottom: 2rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Que faites-vous avec le bois après
                    l'abattage ?</h3>
                <p>Nous offrons plusieurs options : nous pouvons débiter le tronc en bûches pour votre foyer, broyer les
                    branches en copeaux pour paillis, ou évacuer complètement tous les résidus. Le choix vous appartient
                    et est discuté lors de la soumission.</p>
            </div>

            <div style="margin-bottom: 2rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Enlevez-vous aussi la souche ?</h3>
                <p>Oui, nous offrons un service d'essouchement avec notre équipement spécialisé. La souche peut être
                    rognée sous le niveau du sol, permettant de planter du gazon ou un nouvel arbre. Ce service est
                    optionnel et peut être ajouté à votre soumission d'abattage.</p>
            </div>

            <div style="margin-bottom: 2rem;">
                <h3 style="color: var(--primary-color); margin-bottom: 0.5rem;">Intervenez-vous en urgence pour un arbre
                    dangereux ?</h3>
                <p>Absolument. Nous comprenons qu'un arbre menaçant de tomber sur une maison ou bloquant une entrée est
                    une urgence. Nous priorisons ces situations et pouvons souvent intervenir dans les 24 à 48 heures à
                    Sherbrooke et en Estrie.</p>
            </div>

            <div class="text-center" style="margin-top: 3rem;">
                <a href="tel:8192128222" class="btn btn-accent">Appelez-nous : 819-212-8222</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Schema JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Combien coûte l'abattage d'un arbre à Sherbrooke ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Le coût varie selon la taille de l'arbre, son emplacement et la complexité du travail. Un petit arbre peut coûter entre 300$ et 800$, tandis qu'un grand arbre près d'une maison peut atteindre 2000$ à 5000$. Nous offrons des soumissions gratuites et détaillées pour chaque projet."
      }
    },
    {
      "@type": "Question",
      "name": "Ai-je besoin d'un permis pour abattre un arbre à Sherbrooke ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Oui, la Ville de Sherbrooke exige un permis d'abattage pour les arbres de plus de 15 cm de diamètre. Nous pouvons vous conseiller sur les démarches à suivre et vous aider à respecter la réglementation municipale en vigueur."
      }
    },
    {
      "@type": "Question",
      "name": "Combien de temps prend l'abattage d'un arbre ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Un petit arbre peut être abattu en 2-4 heures, incluant le nettoyage. Un grand arbre complexe nécessitant un démontage par sections peut prendre une journée complète. Nous vous donnons toujours une estimation précise lors de la soumission."
      }
    },
    {
      "@type": "Question",
      "name": "Que faites-vous avec le bois après l'abattage ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nous offrons plusieurs options : nous pouvons débiter le tronc en bûches pour votre foyer, broyer les branches en copeaux pour paillis, ou évacuer complètement tous les résidus. Le choix vous appartient et est discuté lors de la soumission."
      }
    },
    {
      "@type": "Question",
      "name": "Enlevez-vous aussi la souche ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Oui, nous offrons un service d'essouchement avec notre équipement spécialisé. La souche peut être rognée sous le niveau du sol, permettant de planter du gazon ou un nouvel arbre. Ce service est optionnel et peut être ajouté à votre soumission d'abattage."
      }
    },
    {
      "@type": "Question",
      "name": "Intervenez-vous en urgence pour un arbre dangereux ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolument. Nous comprenons qu'un arbre menaçant de tomber sur une maison ou bloquant une entrée est une urgence. Nous priorisons ces situations et pouvons souvent intervenir dans les 24 à 48 heures à Sherbrooke et en Estrie."
      }
    }
  ]
}
</script>

<?php include '../includes/footer.php'; ?>