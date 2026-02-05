<?php
$pageTitle = "Registro | Raíces Conectadas";
$currentPage = 'register';
$in_profiles = true;
include '../includes/header.php';
?>

<div class="profile-container">
    <div class="container">
        <div class="form-card">
            <div style="text-align: center; margin-bottom: 2rem;">
                <h2 style="font-family: 'Playfair Display', serif; font-size: 2rem; color: var(--color-accent);">Únete
                    como Cliente</h2>
                <p style="color: #666; font-size: 0.9rem;">Descubre la magia de la artesanía mexicana.</p>
            </div>

            <form action="dashboard.php?role=cliente" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" placeholder="correo@ejemplo.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirmar Contraseña</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="••••••••"
                        required>
                </div>

                <div style="margin-top: 2rem;">
                    <button type="submit" class="btn" style="width: 100%;">Crear Cuenta de Cliente</button>
                </div>
            </form>

            <div style="text-align: center; margin-top: 2rem; border-top: 1px solid #eee; padding-top: 1rem;">
                <p style="font-size: 0.85rem; color: #666;">
                    ¿Ya tienes cuenta? <a href="login.php"
                        style="color: var(--color-accent); font-weight: 600; text-decoration: none;">Inicia Sesión</a>
                </p>
                <p style="font-size: 0.85rem; color: #666; margin-top: 0.5rem;">
                    ¿Eres artesano? <a href="register_artesano.php"
                        style="color: var(--color-secondary); font-weight: 600; text-decoration: none;">Regístrate
                        aquí</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>