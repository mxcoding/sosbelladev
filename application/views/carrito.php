<div class="container grande">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<h3 class="text-center">Detalle de tu Compra</h3>
		   <div class="col-lg-10 col-lg-offset-1">
		   		<div class="row">
		   			<a class="btn btn-default btn-raised pull-left btn-sm" href="<?php echo base_url('compras');?>"> <i class="icon-agregar-carrito"></i> Seguir Comprando</a>
		   		</div>
			   <div class="table-responsive">
			   	<table class="table table-striped">
			   		<thead>
			   			<tr>
			   				<th>Producto</th>
			   				<th>Imagen</th>
			   				<th>Cantidad</th>
			   				<th>Precio Unitario</th>
			   				<th>Subtotal</th>
			   				<th>Color</th>
			   				<th>Comentario</th>
			   			</tr>
			   		</thead>
			   		<tbody id="tabla_carrito">
			   		<?php
			   		if($carrito=$this->cart->contents()){
			   			foreach ($carrito as $key => $producto) {
			   				?>
			   				<tr>
				   				<td><a href='<?php echo base_url("compras/detalle/$producto[id]");?>'><?php echo $producto['name'];?></a></td>
				   				<td><img src="http://lorempixel.com/50/50/food/<?php echo $producto['id'];?>" class="img-responsive"></img></td>
				   				<td><input class="form-control" type="number" value="<?php echo $producto['qty'];?>" min="1"></td>
				   				<td><?php echo '$'.number_format($producto['price']);?></td>
				   				<td><?php echo '$'.number_format($producto['price']*$producto['qty']);?></td>
				   				<td><?php echo $producto['color'];?></td>
				   				<td><input type="text" class="form-control"></td>
				   				<td><button type="button" class="btn btn-danger btn-xs btn-quitar" data-producto="<?php echo $producto['rowid'];?>"><i class="icon-eliminar"></i></button></td>
			   				</tr>
			   				<?php
			   			}
			   		}
			   		else{
			   			?>
			   			<tr>
			   				<td>No hay productos en el carrito</td>
			   				<td></td>
			   				<td></td>
			   				<td></td>
			   				<td></td>
			   			</tr>
			   			<?php
			   		}
			   		?>	
			   		</tbody>
			   	</table>
			   </div>
		   </div>
			</div>
		    <div class="row">
		    	<div class="col-lg-10 col-lg-offset-1">
		    		<button type="button" class="btn btn-warning btn-raised pull-right btn-sm" id="vaciar"> <i class="icon-exclamacion"></i> Vaciar Carrito</button>
		    		<a href="<?php echo base_url('compras/orden/6567');?>" class="btn btn-success btn-raised pull-right btn-sm"><i class="icon-checklist"></i> Realizar Compra</a>
		   		</div>
		    </div>
		</div>
	</div>
</div>