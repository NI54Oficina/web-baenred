<?php
/**
 * Template Name: Content Only
 * This template will only display the content you entered in the page editor
 */
 
 the_content();	
 
 //echo  "<h1>". get_field('numero_de_edicion')."</h1>";
?>

<script>
jQuery(document).ready(function(){
	console.log("entra el ready del numero <?php echo get_field('numero_de_edicion'); ?>");
	var textNumero= $(".date-post-body").text();
	textNumero=textNumero.replace("Edición #","Edición #<?php echo get_field('numero_de_edicion'); ?>");
	console.log(textNumero);
	$(".date-post-body").text(textNumero);
});
</Script>

