<?php
defined('C5_EXECUTE') or die (_("Acccess Denied"));

$al = Core::make('helper/concrete/asset_library');
$colorPicker = Core::make('helper/form/color');
$pageSelect= Core::make('helper/form/page_selector');
?>

<style>
	.ccm-hide{display:none;}
</style>

<div class="subbscribe-form">
	<div class="form-group">
		<?php echo $form->label('service', t('Service')); ?>
		<?php echo $form->select('service', array('MailChimp' => 'Mail Chimp', 'CampaignMonitor' => 'Campaign Monitor'), $service); ?>
	</div>

	<div class="form-group ccm-cm_mail ccm-hide">
		<?php echo $form->label('cm_mail_field', t('Campaign Monitor mail field name')); ?>
		<?php echo $form->text('cm_mail_field', $cm_mail_field); ?>
	</div>

	<!-- https://github.com/Rgeelen/git -->
	<!-- url -->
	<div class="form-group">
		<?php echo $form->label('url', t('Your MailChimp/CampaignMonitor form URL')); ?>
		<div class="input-group">
			<span class="input-group-addon">URL</span>
			<?php echo $form->text('url', $url); ?>
			
		</div>
	</div>



	<!-- title -->
	<div class="form-group">
		<?php echo $form->label('title', t('The window title')) ?>
		<?php echo $form->text('title', $title); ?>
	</div>

	<!-- text -->
	<div class="form-group">
		<?php echo $form->label('text', t('The text that will show up above the form when a user click to subscribe.')); ?>
		<?php echo $form->text('text', $text); ?>
	</div>

	<!-- name -->
	<div class="form-group">
		<?php echo $form->label('name', t('The name that will show up next to the thumbnail. This could be a link to a Twitter handle.')); ?>
		<?php echo $form->text('name', $name); ?>
	</div>

	<!-- color -->
	<div class="form-group">
		<?php echo $form->label('color', t('The color of the button')); ?>
		<?php $colorPicker->output('color', $color, array('preferredFormat' => 'hex')); ?>
	</div>

	<!-- thumbnail -->
	<div class="form-group">
		<?php echo $form->label('fID', t('The thumbnail you wish to include. (needs to be a square)')); ?>
		<?php echo $al->image('fID', 'fID', t('Choose Image')); ?>
	</div>

	<div class="form-group">
		<?php echo $pageSelect->selectPage('displayPagesCID', $displayPagesCID); ?>
	</div>

<!-- enaimonly If set to true, the name field will not be included in the opt-in form -->
</div>
<script>


	$(document).ready(function(){

		if($('select[name=service]').val() === 'CampaignMonitor'){

			$('.ccm-cm_mail').removeClass('ccm-hide');
			
		}

		$('select[name=service]').on('change', function(){

			if($(this).val() === 'CampaignMonitor'){
				$('.ccm-cm_mail').removeClass('ccm-hide');
			}else{
				$('.ccm-cm_mail').addClass('ccm-hide');
				$('.ccm-cm_mail').val('');
			}

		});


	});
	
</script>
