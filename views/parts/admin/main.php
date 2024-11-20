

<div class="tabs">
    <ul>
        <li><a href="#tabs-1">Redes sociales</a></li>
        <li><a href="#tabs-2">Proin dolor</a></li>
        <li><a href="#tabs-3">Aenean lacinia</a></li>
    </ul>
    <div id="tabs-1" class="content-tab">
        <form id="abolch-settings-form" class="flex flex-colum gap-16">
			<?php foreach ($args['social'] as $idx => $network):?>
                <div class="social-network grid-form">
                    <div class="flex form-group">
                        <label ><?php echo __('Name')?>:</label>
                        <input type="text" name="social[<?php echo $idx ?>][name]" value="<?php echo $network['name']?>">
                    </div>
                    <div class="flex form-group">
                        <label for="social"><?php echo __('Url')?></label>
                        <input type="text" name="social[<?php echo $idx ?>][url]" value="<?php echo $network['url']?>">
                    </div>
                    <div class="flex form-group">
                        <label for="social"><?php echo __('Image')?></label>
                        <div class="flex">
                            <input type="text" class="image_url flex-grow" name="social[<?php echo $idx ?>][image]" value="<?php echo $network['image']?>">

                            <button class="upload-image" type="button"><?php echo __('Image')?></button>
                        </div>
                    </div>
                </div>
			<?php endforeach;?>
            <div class="flex form-group">
                <label for="demoToken"><?php echo __('Token')?></label>
                <input type="text" name="demoToken" value="<?php echo $args['demoToken'] ?>">
            </div>


            <button type="button" id="abolch-submit-settings" class="mt-10 btn"><?php echo __('Update')?></button>
        </form>
    </div>
    <div id="tabs-2" class="content-tab">
        <p>Tab 2</p>
    </div>
    <div id="tabs-3" class="content-tab">
        <p>Tab 3</p>
    </div>
</div>
