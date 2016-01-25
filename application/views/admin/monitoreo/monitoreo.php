<div class="container grande">
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
		<div class="panel panel-default">
			<div class="panel-body" style="padding:15px 10px;">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="<?php echo base_url('monitoreo');?>"><i class="icon-monitoreo"></i> Monitoreo de Ventas</a></li>
					<li ¿><a href="<?php echo base_url('monitoreo/agregar');?>"><i class="icon-agregar"></i> Agregar metas</a></li>
					<li><a href="<?php echo base_url('administracion');?>"><i class="icon-inicio"></i> Menú Principal</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-10">
		<div class="panel panel-default">
			<div class="panel-body animated fadeIn">
				<h3 class="text-center">Monitoreo de Ventas</h3>
				<div class="col-lg-10 centrada">
					<div class="col-lg-2 centrada">
						<div class="form-group">
							<label for="" class="control-label azul">Mes</label>
							<select class="form-control azul" id="mes">
								<option value="">Enero</option>
								<option value="">Febrero</option>
								<option value="">Marzo</option>
								<option value="">Abril</option>
								<option value="">Mayo</option>
								<option value="">Junio</option>
								<option value="">Julio</option>
								<option value="">Agosto</option>
								<option value="">Septiembre</option>
								<option value="">Octubre</option>
								<option value="">Noviembre</option>
								<option value="">Diciembre</option>
							</select>
						</div>
					</div>
					<div class="row animated slideInUp" id="all" style="display:none;">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script defer="defer">
	$(function() {
		var opciones={
			chart:{
				height:250,
				type:'solidgauge',
				margin: [0, 0, 0, 0],
				spacing: [0, 0, 0, 0]
			},
			title:true,
			pane:{
				startAngle:-90,
				endAngle:90,
				background:{
					backgroundColor:(Highcharts.theme && Highcharts.theme.background2) || '#EEE',
					innerRadius: '60%',
	                outerRadius: '100%',
	                shape: 'arc'
				}
			},
			tooltip:{
				enabled:true
			},
			yAxis:{
				min:0,
				labels:{
					format:'{value}'
				},
				stops:[[0.2,'#C62828'],[0.5,'#FFC107'],[0.8,'#4CAF50']],
				lineWidth:0,
				minorTickInterval:null,
				tickPixelInterval:400,
				tickWidth:0,
				labels: {
	                y: 10
	            }
			},
			 credits: {
	            enabled: false
	        },
			plotOptions: {
	            solidgauge: {
	                dataLabels: {
	                    y: -20,
	                    borderWidth: 0,
	                    useHTML: true
	                }
	            }
	        },
	        series:{
	        	animation:{
	        		duration:100,
	        		easing:'easeOutBounce'
	        	},
	        	tooltip: {
			        valueSuffix: ' %'
			    }
	        }
		};
		function creardiv(id){
			$('#all').append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" id="graf'+id+'"></div>');
		}
		function mostrarGraficas(){
			for (var i = 0 ; i <10; i++) {
				creardiv(i);
				var valor=Math.floor(Math.random() * 20000) + 10000; 
				var meta=Math.floor(Math.random() * 1000) + 100000;
				console.log(valor + " "+ meta);
				var porcentaje=parseInt((100*valor)/meta);
				var id='graf'+i;
				console.log(id);
				$("#graf"+i).highcharts(Highcharts.merge(opciones, {
					title:'Sucursal '+i,
			        yAxis: {
			            max: meta
			        },
			        series: [{
			            data: [valor],
			            dataLabels: {
			                format: '<div style="text-align:center"><span style="font-size:2em;color:' +
			                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">'+porcentaje+'</span>%<br>'+'<span>'+accounting.formatMoney(valor)+'</span><br>'+'<span>Sucursal '+(i+1)+'</span>'
			            }
			        }]
			    }));
			};
		}


		$('#mes').on('change',function(event) {
			$('#all').show('slow',function(){
				mostrarGraficas();	
			});
		});
	});
</script>