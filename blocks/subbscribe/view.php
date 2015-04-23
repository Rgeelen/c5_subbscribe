<script>

$(document).ready(function(){

	$('body').subbscribe({
		list: "<?php echo $service; ?>",
		url : "<?php echo $url; ?>",
		title : '<?php echo $title; ?>',
		name : '<?php echo $name; ?>',
		color : '<?php echo $color; ?>',
		cm_mail_field : '<?php echo $cm_mail_field; ?>'
	});

});

</script>