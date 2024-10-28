<form id="abolch-settings-form">
	<?php foreach ($args['social'] as $network => $item):?>
        <div>
            <label for="social"><?php echo ucfirst($network)?></label>
            <input type="text" name="social[]" value="<?php echo $item?>">
        </div>
	<?php endforeach;?>
	<div>
		<label for="demoToken">Token</label>
		<input type="text" name="demoToken" value="<?php echo $args['demoToken'] ?>">
	</div>

    <button type="button" id="abolch-submit-settings"><?php echo __('Update')?></button>
</form>