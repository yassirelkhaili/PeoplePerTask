<?php
$translations = [
    'en' => [
        'hero_title' => 'Unlock Your',
        'hero_title2' => 'Freelance',
        'hero_title3' => 'Potential',
        'hero_title4' => 'Today!',
        'menu_home' => 'Home',
        'menu_about' => 'About',
        'menu_member' => 'Become member',
        'menu_contact' => 'Contact US',
        'login' => 'Login',
        'signup' => 'Signup',
        'discover' => 'Discover Now',
        'watch' => 'Watch Video',
        'howitworksdesc' => 'Easily initiate your quest for a fulfilling job with us.',
        'howitworks' => 'How it works',
        'howitworks1' => 'Complete Your Profile',
        'howitworks2' => 'Search for Vacancies',
        'howitworks3' => 'Apply for Jobs',
        'search' => 'Search Here...'
    ],
    'fr' => [
        'hero_title' => 'Débloquez votre',
        'hero_title2' => 'potentiel en',
        'hero_title3' => 'freelance dès',
        'hero_title4' => 'aujourd\'hui!',
        'menu_home' => 'Accueil',
        'menu_about' => 'A propos',
        'menu_member' => 'Devenir membre',
        'menu_contact' => 'Contact',
        'login' => 'Log in',
        'signup' => 'S\'inscrire',
        'discover' => 'Découvrir maintenant',
        'watch' => 'Regardez la vidéo',
        'howitworksdesc' => 'Facilement lancez votre quête d\'un emploi épanouissant avec nous.',
        'howitworks' => 'Comment ça marche',
        'howitworks1' => 'Complétez votre profil',
        'howitworks2' => 'Recherchez des postes vacants',
        'howitworks3' => 'Postulez pour des emplois',
        'search' => 'Recherche...'
    ],
];

session_start();

if (!isset($_SESSION['language'])) {
    $_SESSION['language'] = 'en'; 
}

if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $translations)) {
    $_SESSION['language'] = $_GET['lang'];
  }
  

function translate($key)
{
    global $translations;
    $language = $_SESSION['language'];
    if (isset($translations[$language][$key]))
        return $translations[$language][$key];
    return $key;
}