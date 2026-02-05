<?php
// This will eventually be a real auth check
$role = isset($_POST['role']) ? $_POST['role'] : (isset($_GET['role']) ? $_GET['role'] : 'cliente');

$pageTitle = "Panel de Control | " . ucfirst($role);
$currentPage = 'dashboard';
include '../includes/header.php';
?>

<div class="profile-container">
    <div class="container">
        <div style="display: grid; grid-template-columns: 250px 1fr; gap: 3rem;">
            <!-- Sidebar -->
            <aside
                style="background: white; border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-soft);">
                <div style="text-align: center; margin-bottom: 2rem;">
                    <div
                        style="width: 80px; height: 80px; border-radius: 50%; background: var(--color-surface); margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                        <?php echo strtoupper(substr($role, 0, 1)); ?>
                    </div>
                    <h3 style="margin-bottom: 0.25rem;">Usuario Demo</h3>
                    <span
                        style="font-size: 0.8rem; text-transform: uppercase; color: #888; font-weight: 700;"><?php echo $role; ?></span>
                </div>

                <nav class="dashboard-nav">
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 1rem;"><a href="#"
                                style="font-weight: 600; color: var(--color-accent);">Resumen</a></li>
                        <?php if ($role == 'artesano'): ?>
                            <li style="margin-bottom: 1rem;"><a href="#">Mis Productos</a></li>
                            <li style="margin-bottom: 1rem;"><a href="#">Mis Ventas</a></li>
                        <?php elseif ($role == 'cliente'): ?>
                            <li style="margin-bottom: 1rem;"><a href="#">Mis Compras</a></li>
                            <li style="margin-bottom: 1rem;"><a href="#">Favoritos</a></li>
                        <?php elseif ($role == 'admin'): ?>
                            <li style="margin-bottom: 1rem;"><a href="#">Gestión Usuarios</a></li>
                            <li style="margin-bottom: 1rem;"><a href="#">Validación Artesanos</a></li>
                        <?php endif; ?>
                        <li style="margin-top: 2rem; border-top: 1px solid #eee; padding-top: 1rem;"><a href="login.php"
                                style="color: #e74c3c;">Cerrar Sesión</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content Area -->
            <main
                style="background: white; border-radius: var(--radius-lg); padding: 3rem; box-shadow: var(--shadow-soft);">
                <h2 style="margin-bottom: 2rem;">Bienvenido a tu Panel de Control</h2>

                <div
                    style="padding: 4rem; border: 2px dashed #eee; border-radius: var(--radius-lg); text-align: center;">
                    <p style="color: #999;">Aún no tienes actividad reciente para mostrar.</p>
                    <a href="../catalogo.php" class="btn" style="margin-top: 1.5rem; display: inline-block;">
                        <?php echo ($role == 'artesano') ? 'Subir primer producto' : 'Explorar el catálogo'; ?>
                    </a>
                </div>
            </main>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>