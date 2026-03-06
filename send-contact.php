<?php
header('Content-Type: application/json; charset=utf-8');

// Prevent direct browser access via GET
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Méthode non autorisée.']);
    exit;
}

// Load PHPMailer via Composer autoload
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ========== CONFIGURATION ==========
$destinataire = 'thomas.rouleau23@gmail.com';

// ====================================

// Sanitize & validate inputs
$nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom']), ENT_QUOTES, 'UTF-8') : '';
$telephone = isset($_POST['telephone']) ? htmlspecialchars(trim($_POST['telephone']), ENT_QUOTES, 'UTF-8') : '';
$adresse = isset($_POST['adresse']) ? htmlspecialchars(trim($_POST['adresse']), ENT_QUOTES, 'UTF-8') : '';
$date_intervention = isset($_POST['date_intervention']) ? htmlspecialchars(trim($_POST['date_intervention']), ENT_QUOTES, 'UTF-8') : 'Non spécifié';
$services = isset($_POST['services']) && is_array($_POST['services']) ? $_POST['services'] : [];

// Server-side validation
if (empty($nom)) {
    echo json_encode(['success' => false, 'message' => 'Le nom est requis.']);
    exit;
}
if (empty($telephone)) {
    echo json_encode(['success' => false, 'message' => 'Le numéro de téléphone est requis.']);
    exit;
}
if (empty($adresse)) {
    echo json_encode(['success' => false, 'message' => 'L\'adresse est requise.']);
    exit;
}
if (empty($services)) {
    echo json_encode(['success' => false, 'message' => 'Veuillez sélectionner au moins un service.']);
    exit;
}

$sujet_prefix = '[Élagage Urbain TR] RDV : ' . $nom . ' - ' . $telephone;

// Sanitize services
$services_clean = array_map(function ($s) {
    return htmlspecialchars(trim($s), ENT_QUOTES, 'UTF-8');
}, $services);
$services_list = implode(', ', $services_clean);

// Format date for display
$date_display = $date_intervention;
if ($date_intervention !== 'Non spécifié' && !empty($date_intervention)) {
    $dateObj = DateTime::createFromFormat('Y-m-d', $date_intervention);
    if ($dateObj) {
        // French months
        $mois = [
            1 => 'janvier',
            2 => 'février',
            3 => 'mars',
            4 => 'avril',
            5 => 'mai',
            6 => 'juin',
            7 => 'juillet',
            8 => 'août',
            9 => 'septembre',
            10 => 'octobre',
            11 => 'novembre',
            12 => 'décembre'
        ];
        $jour = (int) $dateObj->format('d');
        $m = (int) $dateObj->format('m');
        $annee = $dateObj->format('Y');
        $date_display = $jour . ' ' . $mois[$m] . ' ' . $annee;
    }
}

// Build HTML email body
$body = '
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"></head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0 ; padding: 0;">
    <div style="max-width: 600px; margin: 0 auto; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
        <div style="background:  #1B5E20; padding: 25px; text-align: center;">
            <h1 style="color: white; margin: 0; font-size: 22px;">🌳 Nouvelle Demande de Rendez-vous</h1>
        </div>
        <div style="padding: 30px;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; font-weight: bold; color: #1B5E20; width: 180px;">👤 Nom</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee;">' . $nom . '</td>
                </tr>
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; font-weight: bold; color: #1B5E20;">📞 Téléphone</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee;"><a href="tel:' . $telephone . '" style="color: #FF6D00; font-weight: bold; text-decoration: none;">' . $telephone . '</a></td>
                </tr>
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; font-weight: bold; color: #1B5E20;">📍 Adresse</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee;">' . $adresse . '</td>
                </tr>
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; font-weight: bold; color: #1B5E20;">📅 Date souhaitée</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee;">' . $date_display . '</td>
                </tr>
                <tr>
                    <td style="padding: 12px 0; font-weight: bold; color: #1B5E20;">🔧 Services</td>
                    <td style="padding: 12px 0;">' . $services_list . '</td>
                </tr>
            </table>
        </div>
        <div style="background: #f9f9f9; padding: 15px; text-align: center; font-size: 13px; color: #999;">
            Envoyé depuis le formulaire de contact de elagageurbaintr.ca
        </div>
    </div>
</body>
</html>';

// Send email with PHPMailer
$mail = new PHPMailer(true);

try {
    // Use PHP's mail() function (no SMTP config needed)
    // $mail->isMail();
    $mail->isSMTP();
    $mail->Host = 'mail.sherbrilliance.ca';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@sherbrilliance.ca';
    $mail->Password = 'OW&PaD9VpAk,';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Set language to French for error messages
    $mail->setLanguage('fr', __DIR__ . '/vendor/phpmailer/phpmailer/language/');

    // Recipients
    $mail->setFrom('contact@sherbrilliance.ca', 'Élagage Urbain TR - Formulaire');
    $mail->FromName = "noreply@elagageurbaintr.ca";
    $mail->addAddress($destinataire);
    $mail->addAddress('robert.byrka@outlook.com');
    // $mail->addReplyTo($telephone . '@tel.local', $nom);

    // Content
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = $sujet_prefix;
    $mail->Body = $body;

    // Plain text alternative
    $mail->AltBody = "Nouvelle demande de rendez-vous\n\n"
        . "Nom: $nom\n"
        . "Téléphone: $telephone\n"
        . "Adresse: $adresse\n"
        . "Date souhaitée: $date_display\n"
        . "Services: $services_list\n";

    $mail->send();

    echo json_encode([
        'success' => true,
        'message' => 'Votre demande a été envoyée avec succès ! Nous vous rappellerons très bientôt.'
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => 'Erreur lors de l\'envoi. Veuillez nous appeler directement au 819-212-8222.'
    ]);
}
