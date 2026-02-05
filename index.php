<?php
$pageTitle = "Raíces Conectadas | Inicio";
$currentPage = 'home';
include 'includes/header.php';
?>

<!-- HERO SECTION: Impacto Visual y Mensaje Claro -->
<section class="hero"
    style="background-image: linear-gradient(rgba(61, 52, 43, 0.75), rgba(61, 52, 43, 0.5)), url('https://images.unsplash.com/photo-1590424753858-394a1278090a?auto=format&fit=crop&w=1600&q=80'); background-size: cover; background-position: center; height: 90vh; display: flex; align-items: center; justify-content: center; color: white; text-align: center;">
    <div class="container" style="max-width: 950px;">
        <span
            style="text-transform: uppercase; letter-spacing: 5px; font-size: 0.9rem; font-weight: 700; color: var(--color-bg); margin-bottom: 2rem; display: block; opacity: 0.9;">Identidad
            • Cultura • Comercio Justo</span>
        <h1
            style="font-family: 'Playfair Display', serif; font-size: 5rem; line-height: 1.1; margin-bottom: 2.5rem; text-shadow: 0 10px 30px rgba(0,0,0,0.4);">
            Tejiendo historias, <br>conectando raíces.</h1>
        <p
            style="font-size: 1.4rem; margin-bottom: 4rem; color: rgba(255,255,255,0.95); font-weight: 300; max-width: 750px; margin-left: auto; margin-right: auto;">
            La plataforma donde el talento artesanal mexicano encuentra su valor real, sin intermediarios ni regateos.
        </p>
        <div style="display: flex; gap: 2rem; justify-content: center;">
            <a href="catalogo.php" class="btn">Explorar Mercado</a>
            <a href="mision.php" class="btn"
                style="background: rgba(255,255,255,0.1); border: 2px solid white; backdrop-filter: blur(10px); box-shadow: none;">Nuestra
                Misión</a>
        </div>
    </div>
</section>

<!-- VALORES: Estructura de Triple Impacto -->
<section>
    <div class="container">
        <div class="section-header">
            <span>Propósito Social</span>
            <h2>Un puente directo al corazón de México</h2>
            <p style="margin-top: 1.5rem; color: #666; font-size: 1.15rem;">Creamos tecnología social para que el
                artesano sea el dueño de su narrativa y su economía.</p>
        </div>

        <div class="grid-3" style="margin-top: 6rem;">
            <div style="text-align: center;">
                <div style="font-size: 3.5rem; margin-bottom: 2rem;">🏺</div>
                <h3
                    style="font-family: 'Playfair Display', serif; font-size: 1.8rem; margin-bottom: 1.5rem; color: var(--color-accent);">
                    Cero Regateo</h3>
                <p style="color: #666;">Respetamos el precio fijado por el artista. Valoramos el tiempo, la técnica y la
                    herencia milenaria.</p>
            </div>
            <div style="text-align: center;">
                <div style="font-size: 3.5rem; margin-bottom: 2rem;">🤝</div>
                <h3
                    style="font-family: 'Playfair Display', serif; font-size: 1.8rem; margin-bottom: 1.5rem; color: var(--color-accent);">
                    Trato Directo</h3>
                <p style="color: #666;">Eliminamos las barreras entre el taller familiar y el mundo, asegurando que la
                    ganancia llegue a su destino.</p>
            </div>
            <div style="text-align: center;">
                <div style="font-size: 3.5rem; margin-bottom: 2rem;">🌱</div>
                <h3
                    style="font-family: 'Playfair Display', serif; font-size: 1.8rem; margin-bottom: 1.5rem; color: var(--color-accent);">
                    Identidad Viva</h3>
                <p style="color: #666;">Promovemos la preservación de técnicas ancestrales y el uso de materiales
                    sostenibles.</p>
            </div>
        </div>
    </div>
</section>

<!-- DESTACADOS: Grid de Categorías con Mayor Estilo -->
<section class="section-bg">
    <div class="container">
        <div class="section-header">
            <span>Maestría Mexicana</span>
            <h2>Piezas con Alma y Tradición</h2>
        </div>

        <div class="grid-3">
            <div class="card">
                <div class="card-img-container">
                    <img src="https://images.unsplash.com/photo-1590424753858-394a1278090a?auto=format&fit=crop&w=800&q=80"
                        alt="Textiles" class="card-img">
                </div>
                <div class="card-body">
                    <span
                        style="color: var(--color-terracota); font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Oaxaca</span>
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 1.6rem; margin: 0.5rem 0 1rem;">
                        Textiles de Pedal</h3>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 2rem;">Huipiles ceremonializados y tapetes
                        de lana teñidos con pigmentos naturales.</p>
                    <a href="catalogo.php"
                        style="color: var(--color-accent); font-weight: 700; text-decoration: none; border-bottom: 1px solid var(--color-terracota);">Ver
                        Colección &rarr;</a>
                </div>
            </div>

            <div class="card">
                <div class="card-img-container">
                    <img src="https://images.unsplash.com/photo-1621303837174-89787a7d4729?auto=format&fit=crop&w=800&q=80"
                        alt="Barro" class="card-img">
                </div>
                <div class="card-body">
                    <span
                        style="color: var(--color-terracota); font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Jalisco</span>
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 1.6rem; margin: 0.5rem 0 1rem;">Barro
                        Canela</h3>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 2rem;">Piezas modeladas a mano que
                        conservan el aroma y la frescura de la tierra colorada.</p>
                    <a href="catalogo.php"
                        style="color: var(--color-accent); font-weight: 700; text-decoration: none; border-bottom: 1px solid var(--color-terracota);">Ver
                        Colección &rarr;</a>
                </div>
            </div>

            <div class="card">
                <div class="card-img-container">
                    <img src="https://images.unsplash.com/photo-1582555172866-f73bb12a2ab3?auto=format&fit=crop&w=800&q=80"
                        alt="Talavera" class="card-img">
                </div>
                <div class="card-body">
                    <span
                        style="color: var(--color-terracota); font-weight: 700; font-size: 0.8rem; text-transform: uppercase;">Puebla</span>
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 1.6rem; margin: 0.5rem 0 1rem;">
                        Talavera Poblana</h3>
                    <p style="color: #666; font-size: 0.95rem; margin-bottom: 2rem;">Vajillas y ornamentos con
                        certificado de origen pintados minuciosamente a mano.</p>
                    <a href="catalogo.php"
                        style="color: var(--color-accent); font-weight: 700; text-decoration: none; border-bottom: 1px solid var(--color-terracota);">Ver
                        Colección &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA SPLIT: Acción Dual -->
<section>
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2.5rem;">
            <div
                style="background: white; padding: 5rem; border-radius: var(--radius-lg); box-shadow: var(--shadow-soft); border-left: 6px solid var(--color-moss);">
                <h3
                    style="font-family: 'Playfair Display', serif; font-size: 2.22rem; margin-bottom: 1.5rem; color: var(--color-accent);">
                    Lleva la historia a casa</h3>
                <p style="margin-bottom: 3rem; color: #666; font-size: 1.1rem;">Apoya el talento local adquiriendo
                    piezas auténticas con garantía de comercio justo.</p>
                <a href="profiles/register.php" class="btn" style="width: 100%;">Registrarme como Cliente</a>
            </div>
            <div style="background: var(--color-accent); padding: 5rem; border-radius: var(--radius-lg); color: white;">
                <h3 style="font-family: 'Playfair Display', serif; font-size: 2.22rem; margin-bottom: 1.5rem;">Haz
                    crecer tu taller</h3>
                <p style="margin-bottom: 3rem; color: rgba(255,255,255,0.85); font-size: 1.1rem;">Digitaliza tu legado y
                    recibe el pago justo que merece tu esfuerzo y talento.</p>
                <a href="profiles/register_artesano.php" class="btn"
                    style="width: 100%; background: white; color: var(--color-accent);">Unirme como Artesano</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>