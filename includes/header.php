<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Portfolio</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'Idendité' ? 'active' : '' ?>" href="Idendité">Idendité</a></li>
                    <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'description' ? 'active' : '' ?>" href="description">description</a></li>
                    <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'e5 dans mon programme' ? 'active' : '' ?>" href="e5 dans mon programme">e5 dans mon programme</a></li>
                    <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'Résultat dans mon programme' ? 'active' : '' ?>" href="Résultat dans mon programme">Résultat dans mon programme</a></li>
                    <li class="nav-item"><a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'Fin de stage' ? 'active' : '' ?>" href="Fin de stage">Fin de stage</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
