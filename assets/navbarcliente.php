<div class="color-navbar">
    <nav class="navbar navbar-expand-lg bg-body-tertiary color-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/Logo.gif" width="40px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="principal.php">PAGINA PRINCIPAL</a>
                    </li>

                    <li class="nav-item">
                        <?php if (isset($_COOKIE["usuario"])) {
                        ?>
                            <a class="nav-link" href="perfil.php">PERFIL</a>
                        <?php
                        } else {
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="registrarse.php">REGISTRATE</a>
                    </li>
                <?php
                        } ?>
                </li>
                </ul>
            </div>
        </div>
    </nav>
</div>