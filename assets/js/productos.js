function quitarProductoCarrito(idproducto){
	$.ajax({
		url: 'quitarProducto',
		type: 'post',
		data: {idp:idproducto},
		success: function (data) {
			
		},
		error:function(x,h,r){
			console.log("Error al quitar el elemento del carrito");
		}
	});
}
function contarProductoCarrito(){
	$.ajax({
		url: 'totalProductos',
		type: 'post',
		success: function (data) {
			$('.btn-carrito span.badge').text(data);
		},
		error:function(x,h,r){
			console.log("Error al contar los productos del carrito");
		}
	});
}
function cargarProductos(){
	$.ajax({
		url: 'getproductosCarrito',
		type: 'post',
		success: function (data) {
			console.log(data);
		},
		error:function(x,h,r){
			console.log("Error al obtener los productos del carrito");
		}
	});
}
function vaciarCarrito(){
	$.ajax({
		url: 'vaciar',
		type: 'post',
		success: function (data) {
			$('#tabla_carrito').empty();
			$('#tabla_carrito').append('<tr><td>No hay productos en el carrito</td><td></td><td></td><td></td><td></td></tr>');
		},
		error:function(x,h,r){
			console.log("Error al vaciar el carrito");
		}
	});
}
$(function () {
	$('.btn-agregar-carrito').click(function (e) {

		var boton=$(this);
		var badge=$('#btn-carrito span.badge');
		var cant=parseInt(badge.text());
		var producto={
			id:boton.parent().parent().parent().find('a').data('producto'),
			cantidad:boton.parent().parent().find('input').val(),
			precio:parseInt(boton.parent().parent().find('.precio').text().replace('$','')),
			nombre:boton.parent().parent().find('.titulo').text(),
			color:boton.parent().parent().find('.color_selected').data('color')
		};
		console.log(producto);
		$.post('compras/agregarCarrito',producto, function(data, textStatus, xhr) {});
		
		badge.text(cant+parseInt(producto.cantidad));
		boton.parent().find('input').val('');
		badge.addClass('animated flipInX').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
			$(this).removeClass('animated flipInX');
		});
	});

	$('.btn-quitar').click(function (e) {
		quitarProductoCarrito($(this).data('producto'));
		$(this).parent().parent().remove();
		var tabla=$('#tabla_carrito');
		if($('#tabla_carrito tr').length==0){
			tabla.append('<tr><td>No hay productos en el carrito</td><td></td><td></td><td></td><td></td></tr>');
		}
		
	});
	$('#vaciar').click(function (e) {
		vaciarCarrito();
	});

	$( "img" ).load(function() {
		$( this ).addClass( "animated flipInX" );
	});
	$('.caption .color-picker-menu li a').each(function(i,e){
		var color='#'+$(this).attr('rel');
		if(color){
			$(this).parent().find('span').css('background-color',color);	
		}
	});
	$('.caption .color-picker-menu li a').on('click',function(event) {
		event.preventDefault();
		color='#'+$(this).attr('rel');
		console.log($(this).parent().parent().parent().parent().next().find('.color_selected').data('color',color).css('background-color',color).fadeIn());
	});
});