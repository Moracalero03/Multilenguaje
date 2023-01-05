<nav class="navbar navbar-expand-md navbar-dark stticky-top">
<img id="imgheader" src="<?=$raiz?>publico/img/logo.png" alt="Logo SASICASA">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav navbar-center">
        <li class="nav-item">
        <a  class="nav-link" href="<?=$raiz?>vista/Inicio.php"><?php echo $lang['global']['Inicio']?></a></li>
        <li class="nav-item">
        <a class="nav-link" href="<?=$raiz?>vista/GestionUsuarios.php"><?php echo $lang['global']['GestionUsuarios']?></a></li>
        <li class="nav-item">
        <a class="nav-link" href="<?=$raiz?>vista/ConsultaExistencia.php"><?php echo $lang['global']['ConsultaExistencia']?></a></li>
        <li class="nav-item">
        <a class="nav-link" href="<?=$raiz?>vista/SolicitudPedidos.php"><?php echo $lang['global']['SolicitudPedidos']?></a></li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php echo $lang['global']['Sobre']?>
        </a>
        <div id="dropdown" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?=$raiz?>vista/Calidad.php" ><?php echo $lang['global']['Calidad']?></a>
            <a class="dropdown-item" href="<?=$raiz?>vista/Productos.php" ><?php echo $lang['global']['Productos']?></a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" target="_blank" rel="noopener noreferrer"  href="https://sacoselsalvador.com/sasicasa/contacto/" ><?php echo $lang['global']['Contacto']?></a></li>
    </ul>
    </div>
</nav> 