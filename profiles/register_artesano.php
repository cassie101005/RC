<?php
$pageTitle = "Registro Artesano | Raíces Conectadas";
$currentPage = 'register_artesano';
$in_profiles = true;
include '../includes/header.php';
?>

<div class="profile-container" style="background: var(--color-surface);">
    <div class="container">
        <div class="form-card" style="max-width: 600px;">
            <div style="text-align: center; margin-bottom: 2rem;">
                <span
                    style="color: var(--color-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 2px;">Para
                    Creadores</span>
                <h2
                    style="font-family: 'Playfair Display', serif; font-size: 2.2rem; color: var(--color-accent); margin-top: 0.5rem;">
                    Registra tu Taller</h2>
                <p style="color: #666; font-size: 0.95rem; margin-top: 0.5rem;">Da a conocer tu trabajo al mundo entero.
                </p>
            </div>

            <form action="dashboard.php?role=artesano" method="POST">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div class="form-group">
                        <label for="nombre">Nombre del Artesano</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="taller">Nombre del Taller / Grupo</label>
                        <input type="text" id="taller" name="taller" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="ubicacion">Estado / Localidad</label>
                    <input type="text" id="ubicacion" name="ubicacion" placeholder="Ej. San Bartolo Coyotepec, Oaxaca"
                        required>
                </div>

                <div class="form-group">
                    <label for="especialidad">Especialidad</label>
                    <select id="especialidad" name="especialidad" required>
                        <option value="">Selecciona una categoría</option>
                        <option value="textiles">Textiles</option>
                        <option value="ceramica">Cerámica / Barro</option>
                        <option value="gastronomia">Gastronomía</option>
                        <option value="madera">Talla de Madera</option>
                        <option value="otra">Otra</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="referencia">Cuéntanos un poco sobre tu historia (opcional)</label>
                    <textarea id="referencia" name="referencia" rows="3"
                        placeholder="Tradición familiar, técnicas que usas..."></textarea>
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico de contacto</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Elige una contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div style="margin-top: 2rem;">
                    <button type="submit" class="btn" style="width: 100%; background: var(--color-secondary);">Solicitar
                        Registro de Artesano</button>
                </div>
            </form>

            <div style="text-align: center; margin-top: 2rem; border-top: 1px solid #eee; padding-top: 1rem;">
                <p style="font-size: 0.85rem; color: #666;">
                    ¿Ya eres parte de Raíces? <a href="login.php"
                        style="color: var(--color-accent); font-weight: 600; text-decoration: none;">Inicia Sesión</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>