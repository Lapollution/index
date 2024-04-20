<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$user_agent = $_SERVER['HTTP_USER_AGENT']; // Type de navigateur de l'utilisateur

// Utiliser une expression régulière pour extraire le nom du navigateur
if (preg_match('/\((.*?)\)/', $user_agent, $matches)) {
    $browser = $matches[1];
} else {
    $browser = "Unknown";
}

// Vous pouvez également utiliser un service tiers pour obtenir le nom de l'appareil, par exemple en analysant le type de navigateur
// Par exemple, pour obtenir le nom de l'appareil à partir du type de navigateur, vous pouvez utiliser une logique similaire à la suivante :
$device_name = ""; // Initialiser le nom de l'appareil à une chaîne vide
if (strpos($user_agent, 'iPhone') !== false) {
    $device_name = "iPhone";
} elseif (strpos($user_agent, 'iPad') !== false) {
    $device_name = "iPad";
} elseif (strpos($user_agent, 'Android') !== false) {
    $device_name = "Android";
} else {
    $device_name = "Unknown";
}

// Appeler le script Python et passer les informations collectées en arguments de ligne de commande
$command = "python save_info.py " . escapeshellarg($name) . " " . escapeshellarg($email) . " " . escapeshellarg($subject) . " " . escapeshellarg($message) . " " . escapeshellarg($browser) . " " . escapeshellarg($device_name);

// Exécuter le script Python
$output = shell_exec($command);

echo "Merci beaucoup...";
?>
