<?php
$pageTitle = "Ingresar | Raíces Conectadas";
$currentPage = 'login';
$in_profiles = true;
include '../includes/header.php';
?>

<div class="auth-section">
    <div class="container">
        <div class="form-card">
            <div class="form-header">
                <h2>¡Qué bueno verte!</h2>
                <p>Ingresa a tu cuenta para continuar tejiendo historias.</p>
            </div>

            <form action="../sistema/modelo/consulta/iniciarSesion.php" method="POST">
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Tu contraseña segura" required>
                </div>

                <div class="form-group">
                    <label for="role">Tipo de Cuenta</label>
                    <select id="role" name="role" required>
                        <option value="cliente">Comprador (Cliente)</option>
                        <option value="artesano">Creador (Artesano)</option>
                        <option value="admin">Administrador</option>
                    </select>
                </div>

                <div style="margin-top: 2.5rem;">
                    <button type="submit" class="btn" style="width: 100%;">Entrar a mi cuenta</button>
                </div>
            </form>

            <div class="form-footer">
                <p>¿Aún no eres parte de la comunidad?</p>
                <div style="margin-top: 0.5rem; display: flex; flex-direction: column; gap: 0.5rem;">
                    <a href="register.php">Regístrate como Cliente</a>
                    <a href="register_artesano.php" style="color: var(--color-moss);">Unirse como Artesano</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>