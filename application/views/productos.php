<div class="container">
    <h3 class="text-center">Cátalogo de Productos</h3>
    <div class="row">
        <div class="container carro">
            <a href="<?php echo base_url('administracion');?>" id="btn-carrito" style="margin-left:8px;" class="btn btn-default btn-raised btn-sm top pull-left"><i class="icon-inicio"></i> Menú Principal</a>
            <a href="<?php echo base_url('compras/carrito');?>" id="btn-carrito" class="btn btn-default btn-raised btn-sm top pull-right"><span class="badge"><?php echo $this->cart->total_items();?></span><i class="icon-carrito"></i> Ver Carrito</a>
        </div>
    </div>
    <div class="col-lg-9 col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#pulseras" data-toggle="tab">Pulseras</a></li>
                          <li><a href="#cadenas" data-toggle="tab">Cadenas</a></li>
                          <li><a href="#aretes" data-toggle="tab">Aretes</a></li>
                          <li><a href="#bisuteria" data-toggle="tab">Bisuteria</a></li> 
                        </ul>
                    </li>
                    <li class="pull-right">
                        <i class="icon-buscar" style="position:absolute;margin-left:-26px;margin-top:9px;font-size:11px;"></i>
                        <input type="search" class="form-control" placeholder="Buscar productos">
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="pulseras">
                        <div class="row">
                            <div class="container">
                                <?php
                                $precios = array(50,150,789,120,470,23,65,78,58,100);
                                $titulos=array('pulsera','refresco','cadena','anillo','collar','pelota','balon','teclado','raton','monitor');
                                for ($i=0; $i<10;$i++) {
                                    ?>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="thumbnail">
                                            <a data-producto="<?php echo $i;?>" href="compras/detalle/<?php echo $i;?>">
                                                <figure><img class="img-responsive" src="http://lorempixel.com/200/150/food/<?php echo $i;?>" alt=""></figure>
                                            </a>
                                            <div class="caption">
                                                <div class="row">
                                                    <h4 class="titulo_precio text-center"><span class="titulo"><?php echo $titulos[$i]?></span> <span class="precio">$<?php echo number_format($precios[$i]);?><span></h4>
                                                </div>
                                                <div class="row">
                                                    <h5 class="text-center">150 Disponibles</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label for="cantidad<?php echo $i;?>" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label azul">Cant</label>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <input type="number" class="form-control azul" id="cantidad<?php echo $i;?>" min="1">
                                                        </div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a data-target="#" class="btn btn-raised btn-xs top dropdown-toggle color-picker" data-toggle="dropdown">
                                                            <i class="icon-gota"></i>
                                                            <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu color-picker-menu">
                                                            <li><a href="#" rel="000000"><span class="color"></span></a></li>
                                                            <li><a href="#" rel="0D47A1"><span class="color"></span></a></li>
                                                            <li><a href="#" rel="efefc8"><span class="color"></span></a></li>
                                                            <li><a href="#" rel="F44336"><span class="color"></span></a></li>
                                                            <li><a href="#" rel="F2F0F1"><span class="color"></span></a></li>
                                                            <li><a href="#" rel="E91E63"><span class="color"></span></a></li>
                                                            <li><a href="#" rel="E91E63"><span class="color"></span></a></li>
                                                            <li><a href="#" rel="FF9800"><span class="color"></span></a></li>
                                                            <li><a href="#" rel="CC9900"><span class="color"></span></a></li>
                                                            <li><a href="#" rel="9E9E9E"><span class="color"></span></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10 centrada">
                                                        <span class="color color_selected"></span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <button type="button" class="btn btn-bella btn-raised btn-xs top btn-agregar-carrito"><i class="icon-agregar-carrito"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="cadenas">
                        <p>cadenas</p>
                    </div>
                    <div class="tab-pane fade" id="aretes">
                        <p>aretes</p>
                    </div>
                    <div class="tab-pane fade" id="bisuteria">
                        <p>bisuteria</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body nuevos">
                <h4 class="text-center"><i class="icon-estrella-negra"></i> Productos Nuevos</h4>
                <div class="col-lg-12 col-md-12 col-sm-6">
                    <div class="thumbnail">
                        <a href="#">
                            <img class="img-responsive" src="http://lorempixel.com/400/300/food" alt="">
                        </a>
                        <div class="caption">
                            <div class="row">
                                <h4 class="titulo_precio text-center">NUEVO $500</h4>
                            </div>
                            <div class="row">
                                <h5 class="text-center">150 Disponibles</h5>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="cantidad<?php echo $i;?>" class="col-lg-2 col-md-2 col-sm-2 col-xs-2 control-label azul">Cant</label>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <input type="number" class="form-control azul" id="cantidad<?php echo $i;?>" min="1">
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <a data-target="#" class="btn btn-raised btn-xs top dropdown-toggle color-picker" data-toggle="dropdown">
                                        <i class="icon-gota"></i>
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu color-picker-menu">
                                        <li><a href="#" rel="009688"><span class="color"></span></a></li>
                                        <li><a href="#" rel="F44336"><span class="color"></span></a></li>
                                        <li><a href="#" rel="FFEB3B"><span class="color"></span></a></li>
                                        <li><a href="#" rel="2196F3"><span class="color"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 centrada">
                                    <span class="color color_selected"></span>
                                </div>

                            </div>
                            <div class="row">
                                <button type="button" class="btn btn-bella btn-raised btn-xs top btn-agregar-carrito"><i class="icon-agregar-carrito"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>