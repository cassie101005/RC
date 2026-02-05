<?php
$pageTitle = "Mercado | Raíces Conectadas";
$currentPage = 'catalogo';
include 'includes/header.php';
?>

<div class="page-header">
    <div class="container">
        <span>Comercio Ético</span>
        <h1>Mercado de Raíces</h1>
        <p>Piezas únicas enviadas directamente desde el taller del artesano a tu puerta. Sin intermediarios, 100%
            auténtico.</p>
    </div>
</div>

<section>
    <div class="container">
        <!-- FILTROS REFINADOS -->
        <div
            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 5rem; flex-wrap: wrap; gap: 2rem; padding: 2rem; background: white; border-radius: var(--radius-md); box-shadow: var(--shadow-soft);">
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <button class="filter-btn active"
                    style="padding: 0.8rem 2.2rem; border-radius: 50px; border: none; background: var(--color-terracota); color: white; font-weight: 700; cursor: pointer;">Todos</button>
                <button class="filter-btn"
                    style="padding: 0.8rem 2.2rem; border-radius: 50px; border: 2px solid var(--color-surface); background: white; font-weight: 600; cursor: pointer; color: var(--color-text);">Textiles</button>
                <button class="filter-btn"
                    style="padding: 0.8rem 2.2rem; border-radius: 50px; border: 2px solid var(--color-surface); background: white; font-weight: 600; cursor: pointer; color: var(--color-text);">Cerámica</button>
                <button class="filter-btn"
                    style="padding: 0.8rem 2.2rem; border-radius: 50px; border: 2px solid var(--color-surface); background: white; font-weight: 600; cursor: pointer; color: var(--color-text);">Gastronomía</button>
            </div>
            <div style="font-size: 0.95rem; color: #888;">
                Viendo <strong style="color: var(--color-accent);">12 piezas</strong> maestras
            </div>
        </div>

        <!-- GRID DE PRODUCTOS -->
        <div class="grid-3">

            <!-- Producto 1 -->
            <div class="card">
                <div class="card-img-container" style="height: 320px;">
                    <img src="https://images.unsplash.com/photo-1590424753858-394a1278090a?auto=format&fit=crop&w=800&q=80"
                        alt="Huipil" class="card-img">
                    <span
                        style="position: absolute; top: 1.5rem; left: 1.5rem; background: var(--color-bg); padding: 0.4rem 1rem; border-radius: 50px; font-size: 0.65rem; font-weight: 800; color: var(--color-terracota); text-transform: uppercase; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">Pieza
                        Única</span>
                </div>
                <div class="card-body">
                    <span
                        style="color: var(--color-moss); font-weight: 700; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">Textiles
                        • Oaxaca</span>
                    <h3
                        style="font-family: 'Playfair Display', serif; font-size: 1.5rem; margin: 0.5rem 0 1.5rem; color: var(--color-accent);">
                        Huipil de Gala Zapoteca</h3>

                    <div
                        style="display: flex; align-items: center; gap: 1rem; margin-bottom: 2rem; padding: 1rem; background: var(--color-bg); border-radius: var(--radius-sm); border: 1px solid rgba(139, 69, 19, 0.05);">
                        <div
                            style="width: 32px; height: 32px; border-radius: 50%; background: var(--color-surface); display: flex; align-items: center; justify-content: center; font-size: 0.9rem;">
                            🛖</div>
                        <div style="font-size: 0.8rem; line-height: 1.2;">
                            <span style="display: block; color: #999;">Taller:</span>
                            <strong style="color: var(--color-text);">Familia Martínez</strong>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 1.5rem; font-weight: 800; color: var(--color-text);">$2,450 <small
                                style="font-weight: 400; font-size: 0.8rem; opacity: 0.6;">MXN</small></span>
                        <a href="#" class="btn" style="padding: 0.8rem 1.5rem; font-size: 0.85rem;">Detalles</a>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="card">
                <div class="card-img-container" style="height: 320px;">
                    <img src="https://images.unsplash.com/photo-1582555172866-f73bb12a2ab3?auto=format&fit=crop&w=800&q=80"
                        alt="Talavera" class="card-img">
                </div>
                <div class="card-body">
                    <span
                        style="color: var(--color-moss); font-weight: 700; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">Cerámica
                        • Puebla</span>
                    <h3
                        style="font-family: 'Playfair Display', serif; font-size: 1.5rem; margin: 0.5rem 0 1.5rem; color: var(--color-accent);">
                        Juego de Café Talavera</h3>

                    <div
                        style="display: flex; align-items: center; gap: 1rem; margin-bottom: 2rem; padding: 1rem; background: var(--color-bg); border-radius: var(--radius-sm); border: 1px solid rgba(139, 69, 19, 0.05);">
                        <div
                            style="width: 32px; height: 32px; border-radius: 50%; background: var(--color-surface); display: flex; align-items: center; justify-content: center; font-size: 0.9rem;">
                            🛖</div>
                        <div style="font-size: 0.8rem; line-height: 1.2;">
                            <span style="display: block; color: #999;">Taller:</span>
                            <strong style="color: var(--color-text);">Casa Poblana</strong>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 1.5rem; font-weight: 800; color: var(--color-text);">$4,200 <small
                                style="font-weight: 400; font-size: 0.8rem; opacity: 0.6;">MXN</small></span>
                        <a href="#" class="btn" style="padding: 0.8rem 1.5rem; font-size: 0.85rem;">Detalles</a>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="card">
                <div class="card-img-container" style="height: 320px;">
                    <img src="https://images.unsplash.com/photo-1621303837174-89787a7d4729?auto=format&fit=crop&w=800&q=80"
                        alt="Barro" class="card-img">
                    <span
                        style="position: absolute; top: 1.5rem; right: 1.5rem; background: var(--color-moss); padding: 0.4rem 1rem; border-radius: 50px; font-size: 0.65rem; font-weight: 800; color: white; text-transform: uppercase;">Tradicional</span>
                </div>
                <div class="card-body">
                    <span
                        style="color: var(--color-moss); font-weight: 700; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px;">Barro
                        Canela • Jalisco</span>
                    <h3
                        style="font-family: 'Playfair Display', serif; font-size: 1.5rem; margin: 0.5rem 0 1.5rem; color: var(--color-accent);">
                        Jarrón Decorativo Pulido</h3>

                    <div
                        style="display: flex; align-items: center; gap: 1rem; margin-bottom: 2rem; padding: 1rem; background: var(--color-bg); border-radius: var(--radius-sm); border: 1px solid rgba(139, 69, 19, 0.05);">
                        <div
                            style="width: 32px; height: 32px; border-radius: 50%; background: var(--color-surface); display: flex; align-items: center; justify-content: center; font-size: 0.9rem;">
                            🛖</div>
                        <div style="font-size: 0.8rem; line-height: 1.2;">
                            <span style="display: block; color: #999;">Taller:</span>
                            <strong style="color: var(--color-text);">Taller Los Soles</strong>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 1.5rem; font-weight: 800; color: var(--color-text);">$950 <small
                                style="font-weight: 400; font-size: 0.8rem; opacity: 0.6;">MXN</small></span>
                        <a href="#" class="btn" style="padding: 0.8rem 1.5rem; font-size: 0.85rem;">Detalles</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- BANNER PERSONALIZADOS -->
<section class="section-bg">
    <div class="container">
        <div style="text-align: center; max-width: 700px; margin: 0 auto;">
            <h2
                style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: var(--color-accent); margin-bottom: 2rem;">
                ¿Buscas una pieza única?</h2>
            <p style="font-size: 1.15rem; color: #666; margin-bottom: 3.5rem;">Muchos de nuestros artesanos aceptan
                pedidos personalizados. Contacta directamente con el maestro para crear algo especial.</p>
            <a href="artesanos.php" class="btn" style="background: var(--color-moss);">Ver lista de artesanos</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>