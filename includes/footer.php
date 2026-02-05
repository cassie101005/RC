<?php
$f_base_path = (isset($in_profiles) && $in_profiles) ? '../' : './';
?>
<footer>
    <div class="container">
        <div class="footer-grid">
            <!-- Brand -->
            <div class="footer-brand">
                <a href="<?php echo $f_base_path; ?>index.php" class="footer-logo">
                    RAÍCES <span>CONECTADAS</span>
                </a>
                <p>Plataforma de comercio justo dedicada a conectar el arte tradicional mexicano con el mundo.</p>
                <div class="social-icons">
                    <a href="#" class="social-btn" title="Facebook">f</a>
                    <a href="#" class="social-btn" title="Instagram">i</a>
                    <a href="#" class="social-btn" title="Twitter">t</a>
                </div>
            </div>

            <!-- Site -->
            <div class="footer-links">
                <h4 class="footer-title">Sitio</h4>
                <ul>
                    <li><a href="<?php echo $f_base_path; ?>index.php">Inicio</a></li>
                    <li><a href="<?php echo $f_base_path; ?>catalogo.php">Catálogo</a></li>
                    <li><a href="<?php echo $f_base_path; ?>artesanos.php">Comunidad</a></li>
                </ul>
            </div>

            <!-- Account -->
            <div class="footer-links">
                <h4 class="footer-title">Usuarios</h4>
                <ul>
                    <li><a href="<?php echo $f_base_path; ?>profiles/login.php">Ingresar</a></li>
                    <li><a href="<?php echo $f_base_path; ?>profiles/register.php">Registro</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-links">
                <h4 class="footer-title">Contacto</h4>
                <p style="font-size: 0.8rem; margin-bottom: 0.5rem;">hola@raicesconectadas.com</p>
                <p style="font-size: 0.8rem;">📍 Oaxaca, México</p>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p>&copy; <?php echo date("Y"); ?> Raíces Conectadas.</p>
                <div class="mexico-badge">
                    <div class="flag">
                        <span style="background: #006847;"></span>
                        <span style="background: #FFFFFF;"></span>
                        <span style="background: #CE1126;"></span>
                    </div>
                    <span>Hecho en México</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo $f_base_path; ?>js/main.js"></script>
</body>

</html>