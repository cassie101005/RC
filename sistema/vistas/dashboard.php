<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: ../../profiles/login.php");
    exit;
}

$nombreCompleto = $_SESSION['nombre'] . ' ' . $_SESSION['apellidos'];
$tipoUsuario = $_SESSION['tipo'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | TailAdmin RC</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-logo">
            <i class="fa-solid fa-layer-group"></i>
            <span>TailAdmin</span>
        </div>

        <nav>
            <p class="menu-label">Menu</p>
            <ul class="nav-links">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="fa-solid fa-table-columns"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-calendar-days"></i>
                        <span>Calendar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-list-check"></i>
                        <span>Task</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-brands fa-wpforms"></i>
                        <span>Forms</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-table"></i>
                        <span>Tables</span>
                    </a>
                </li>
            </ul>

            <p class="menu-label" style="margin-top: 2rem;">Support</p>
            <ul class="nav-links">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-envelope"></i>
                        <span>Messages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-inbox"></i>
                        <span>Inbox</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div style="margin-top: auto;">
            <a href="../../profiles/login.php" class="nav-link" style="color: #f43f5e;">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Cerrar Sesión</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <header class="header">
            <div class="search-container">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Type to search...">
            </div>

            <div class="header-actions">
                <div style="display: flex; gap: 1rem; color: #64748b;">
                    <i class="fa-regular fa-bell"></i>
                    <i class="fa-regular fa-comment-dots"></i>
                </div>

                <div class="user-profile">
                    <div class="user-info">
                        <span class="user-name">
                            <?php echo htmlspecialchars($nombreCompleto); ?>
                        </span>
                        <span class="user-role">
                            <?php echo htmlspecialchars(ucfirst($tipoUsuario)); ?>
                        </span>
                    </div>
                    <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($nombreCompleto); ?>&background=3c50e0&color=fff"
                        alt="Avatar" class="user-avatar">
                </div>
            </div>
        </header>

        <!-- Dashboard Content -->
        <main class="dashboard-view">
            <!-- Stats -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-regular fa-eye"></i></div>
                    <div class="stat-value">$3.456K</div>
                    <div class="stat-label">Total views</div>
                    <div class="stat-trend trend-up">0.43% <i class="fa-solid fa-arrow-up"></i></div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                    <div class="stat-value">$45.2K</div>
                    <div class="stat-label">Total Profit</div>
                    <div class="stat-trend trend-up">4.35% <i class="fa-solid fa-arrow-up"></i></div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-bag-shopping"></i></div>
                    <div class="stat-value">2.450</div>
                    <div class="stat-label">Total Product</div>
                    <div class="stat-trend trend-up">2.59% <i class="fa-solid fa-arrow-up"></i></div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon"><i class="fa-solid fa-users"></i></div>
                    <div class="stat-value">3.456</div>
                    <div class="stat-label">Total Users</div>
                    <div class="stat-trend trend-down">0.95% <i class="fa-solid fa-arrow-down"></i></div>
                </div>
            </div>

            <!-- Charts -->
            <div class="charts-grid">
                <div class="chart-container">
                    <div class="chart-header">
                        <h3>Total Revenue</h3>
                        <div style="font-size: 0.8rem;">Sep - Aug</div>
                    </div>
                    <div class="placeholder-chart">
                        <p>Gráfico de Ingresos (Simulado)</p>
                    </div>
                </div>
                <div class="chart-container">
                    <div class="chart-header">
                        <h3>Profit this week</h3>
                    </div>
                    <div class="placeholder-chart">
                        <p>Gráfico Semanal (Simulado)</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>