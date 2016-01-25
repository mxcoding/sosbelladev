		
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/material.min.js');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/ripples.min.js');?>"></script>
		<?php if(isset($fancy)):?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.fancybox.js');?>"></script>
		<?php endif;?>
		<?php if(isset($js_productos) && $js_productos==TRUE):?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/productos.js');?>"></script>
		<?php endif;?>
		<script type="text/javascript" src="<?php echo base_url('assets/js/init_components.js');?>"></script>
	</body>
</html>