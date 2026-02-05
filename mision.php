<?php
$pageTitle = "Misión | Raíces Conectadas";
$currentPage = 'mision';
include 'includes/header.php';
?>

<div class="page-header">
    <div class="container">
        <h1>Nuestra Identidad</h1>
        <p>Conectando el corazón de México con el mundo digital.</p>
    </div>
</div>

<section class="container">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
        <div>
            <h2 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; margin-bottom: 1.5rem;">Cero Regateo
            </h2>
            <p style="margin-bottom: 1.5rem; font-size: 1.1rem; line-height: 1.8;">
                Nacimos con la firme convicción de que el trabajo artesanal debe ser valorado justamente. Nuestra
                plataforma elimina intermediarios, asegurando que cada peso llegue directamente a las manos del creador.
            </p>
            <p style="font-size: 1.1rem; line-height: 1.8;">
                Fomentamos el respeto por las técnicas ancestrales y los tiempos de elaboración de cada pieza única.
            </p>
        </div>
        <div>
            <img src="https://images.unsplash.com/photo-1542866970-87a718b958f6?auto=format&fit=crop&w=800&q=80"
                alt="Artesana" style="width: 100%; border-radius: var(--radius-lg); box-shadow: var(--shadow-soft);">
        </div>
    </div>
</section>

<section style="background: var(--color-surface); padding: 6rem 0;">
    <div class="container">
        <h2 style="text-align: center; font-family: 'Playfair Display', serif; font-size: 2.5rem; margin-bottom: 4rem;">
            Nuestros Valores</h2>
        <div class="grid-3">
            <div style="text-align: center; padding: 2rem;">
                <h3 style="margin-bottom: 1rem;">Inclusión</h3>
                <p>Damos voz a comunidades que históricamente han estado fuera del mercado digital.</p>
            </div>
            <div style="text-align: center; padding: 2rem;">
                <h3 style="margin-bottom: 1rem;">Difusión</h3>
                <p>Contamos la historia detrás de cada pieza para preservar nuestra cultura.</p>
            </div>
            <div style="text-align: center; padding: 2rem;">
                <h3 style="margin-bottom: 1rem;">Justicia</h3>
                <p>Garantizamos un comercio ético basado en el respeto mutuo.</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>