function hayMensaje(){
    if($('.noty_text').is(':visible'))
    {
        return true;
    }
    else
        return false;
}
$(function () {
	$.material.init();
	$('.navbar-toggle').click(function(event) {
		$(this).toggleClass('activado');
	});
    if(typeof Pikaday=='function'){
        $('.date').pikaday({
            firstDay: 1,
            format:'YYYY/MM/DD',
            i18n: {
                previousMonth : 'Anterior Mes',
                nextMonth     : 'Siguiente Mes',
                months        : ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                weekdays      : ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
                weekdaysShort : ['Dom','Lun','Mar','Mie','Jue','Vie','Sab']
            }
        });
    }
    if(typeof $.fn.clockpicker=='function'){
        $('.reloj').clockpicker({
            donetext:'Aceptar',
            autoclose:'true'
        });
    }
    if(typeof $.fn.numeric=='function'){
        $('input.numeric').numeric();
    }
	$('.dataTable>tbody tr').on('click',function () {
        var renglon=$(this);
        var botonera=$('.boton');
		$('.table>tbody tr').not(this).removeClass('selected');
    	renglon.toggleClass('selected');
    	if(renglon.hasClass('selected')){
    		botonera.show().addClass('animated flipInX').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
    			$(this).removeClass('animated flipInX');
    		});
            var data=$(this).find('td:eq(0)').data();
            if($('.boton .btn').length){
                 $('.boton .btn').data('id',data.id);
            }
            if($('.editar').length){
                $('.editar').val(data.id);    
            }
    	}
    	else{
    		botonera.fadeOut();
    	}
    });
    $('.selectable >tbody tr').on('click',function (){
        $(this).toggleClass('selected-tr');
        $('#delete').fadeIn();
    });
    $('.boton .btn').on('click',function(event) {
        $('.boton').hide();
    });
});