<div class="navbar navbar-default navbar-md">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>
        <span class="navbar-brand" href="#">SOSBELLA</span>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav navbar-left">
            <li><a class="titulo" href="<?php echo base_url('administracion');?>">Sistema de Administración</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-usuario"></i> <?php echo $this->session->userdata('usuario');?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url('administracion/logout');?>"><i class="icon-logout"></i>  Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
