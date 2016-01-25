<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo base_url('categorias');?>"><i class="icon-listar"></i> Listar</a></li>
					<li><a href="<?php echo base_url('categorias/agregar');?>"><i class="icon-agregar"></i> Agregar</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body">
				<h3 class="text-center">Listar Categorias</h3>
				<div class="row">
					<div class="col-lg-4 centrada boton">
						<form action="<?php echo base_url('categorias/editar') ?>" method="POST">
							<input type="hidden" class="editar" name="id" value="">
							<div class="text-center">
								<button type="submit" class="btn btn-warning top btn-raised btn-sm"><i class="icon-editar"></i> Editar</button>
							</div>
						</form>
						<a class="btn btn-danger top btn-raised btn-sm" data-toggle="modal" href='#modal-id'><i class="icon-eliminar"></i> Eliminar</a>
					</div>	
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive animated fadeIn">
							<table id="tabla_franquicias" class="display table table-hover dataTable" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>Familia</th>
										<th>Nombre</th>
										<th>Descripción</th>
									</tr>
								</thead>
								<?php if($categorias):?>
									<tbody>
									<?php foreach ($categorias as $categoria):?>
										<tr>
											<td data-id="<?php echo $categoria->IdCategoria;?>"><?php echo $categoria->Familia;?></td>
											<td><?php echo $categoria->Nombre;?></td>
											<td><?php echo $categoria->Descripcion;?></td>
										</tr>
									<?php endforeach;?>
									</tbody>
								<?php else:?>
									<tbody></tbody>
								<?php endif;?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Eliminar la categoria</h4>
				</div>
				<div class="modal-body">
					<p>¿Realmente desea eliminar la categoria <strong id="clave_categoria"></strong>?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-raised top btn-sm" data-dismiss="modal"><i class="icon-cerrar"></i> cerrar</button>
					<button type="button" id="eliminar" class="btn btn-danger btn-raised top btn-sm"><i class="icon-eliminar"></i> Eliminar <div class="spinner"></div></button>
				</div>
			</div>
		</div>
	</div>
</div>
<script defer="defer">
	var tabla=$('#tabla_franquicias').DataTable({
		"language": {
			"url":"<?php echo base_url('assets/js');?>/Spanish.json"
        }
	});
    $('.boton .btn-danger').on('click',function(event) {
        var nombre=$('.table>tbody>tr.selected>td:eq(1)').text();
        $('#clave_categoria').empty().text(nombre);
    });
    $('#eliminar').click(function(event) {
    	jQuery.ajax({
    	  url: '<?php echo base_url("categorias/eliminarCategoria");?>',
    	  type: 'POST',
    	  dataType: 'json',
    	  data: {IdCategoria:$('.btn-danger').data('id')},
    	  beforeSend:function(){
    	  	$('.spinner').fadeIn();
    	  },
    	  complete: function(xhr, textStatus) {
    	    $('.spinner').fadeOut();
    	  },
    	  success: function(data, textStatus, xhr) {
    	    if(data){
    	    	tabla.row('.selected').remove().draw(false);
    	    	mostrarMensaje('Categoria eliminada correctamente','ok');
    	    	$('.modal').modal('hide');
    	    }
    	    else{
    	    	mostrarMensaje('Ocurrio un problema','error');
    	    }
    	  },
    	  error: function(xhr, textStatus, errorThrown) {
    	    console.log("Error al eliminar la categoria");
    	  }
    	});
    });
</script>