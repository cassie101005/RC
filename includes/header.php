<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset($pageTitle) ? $pageTitle : "Raíces Conectadas"; ?>
    </title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <?php
    // Logic for base path based on directory depth
    $base_path = (isset($in_profiles) && $in_profiles) ? '../' : './';
    ?>
    <link rel="stylesheet" href="<?php echo $base_path; ?>css/styles.css">
</head>

<body>
    <header id="header">
        <div class="container">
            <nav>
                <a href="<?php echo $base_path; ?>index.php" class="logo-container">
                    <img src="<?php echo $base_path; ?>assets/img/logo.png" alt="Logo RC" class="logo-img"
                        onerror="this.src='https://placehold.co/60x60/8B4513/FFF?text=RC'">
                    <div class="logo-text">Raíces<br>Conectadas</div>
                </a>
                <div class="nav-links">
                    <a href="<?php echo $base_path; ?>index.php"
                        class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Inicio</a>
                    <a href="<?php echo $base_path; ?>mision.php"
                        class="<?php echo ($currentPage == 'mision') ? 'active' : ''; ?>">El Proyecto</a>
                    <a href="<?php echo $base_path; ?>artesanos.php"
                        class="<?php echo ($currentPage == 'artesanos') ? 'active' : ''; ?>">Artesanos</a>
                    <a href="<?php echo $base_path; ?>catalogo.php"
                        class="<?php echo ($currentPage == 'catalogo') ? 'active' : ''; ?>">Catálogo</a>
                    <div class="user-auth-links">
                        <a href="<?php echo $base_path; ?>profiles/login.php" class="btn-login">Ingresar</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>