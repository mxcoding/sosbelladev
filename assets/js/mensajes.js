function mostrarMensaje(texto,tipo){
        var _template;
        switch(tipo){
            case 'ok':
                _template='<div class="noty_message ok"><i class="icon-ok"></i><p class="noty_text"></p></div>';
            break;
            case 'error':
                _template='<div class="noty_message error"><i class="icon-error"></i><p class="noty_text"></p></div>';
            break;
            case 'alerta':
                _template='<div class="noty_message alerta"><i class="icon-exclamacion"></i><p class="noty_text"></p></div>';
            break;
        }
        var n = noty({
            layout:'center',
            theme:'relax',
            text: texto,
            type:'alert',
            modal:'true',
            killer: true,
            template: _template,
            animation: {
                open: 'animated flipInX', // Animate.css class names
                close: 'animated flipOutX',
                easing: 'swing',
                speed: 500 // opening & closing animation speed
            },
            closeWith: ['click','backdrop']
        });
    }