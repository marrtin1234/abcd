<?php
// Získání URL z parametru GET
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Kontrola, zda je URL validní
if (filter_var($url, FILTER_VALIDATE_URL)) {
    // Načtení obsahu URL
    $response = file_get_contents($url);

    // Odeslání obsahu klientovi
    echo $response;
} else {
    echo "Neplatná URL.";
}
?>
