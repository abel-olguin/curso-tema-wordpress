<form id="abolch-settings-form">
	<?php foreach ($args['social'] as $idx => $network):?>
        <div class="social-network">
            <div>
                <label ><?php echo __('Name')?>:
                    <input type="text" name="social[<?php echo $idx ?>][name]" value="<?php echo $network['name']?>">
                </label>
            </div>
            <div>
                <label for="social"><?php echo __('Url')?>
                    <input type="text" name="social[<?php echo $idx ?>][url]" value="<?php echo $network['url']?>">
                </label>
            </div>
            <div>
                <label for="social"><?php echo __('Image')?>
                    <input type="text" class="image_url" name="social[<?php echo $idx ?>][image]" value="<?php echo $network['image']?>">
                </label>
                <button class="upload-image" type="button"><?php echo __('Image')?></button>
            </div>
        </div>
	<?php endforeach;?>
	<div>
		<label for="demoToken"><?php echo __('Token')?>
            <input type="text" name="demoToken" value="<?php echo $args['demoToken'] ?>">
        </label>
	</div>

    <button type="button" id="abolch-submit-settings"><?php echo __('Update')?></button>
</form>