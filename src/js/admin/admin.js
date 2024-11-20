(function ($){
    $(document).ready(function () {
        let custom_uploader = null
        $('#abolch-submit-settings').click( (e) => {
            e.preventDefault();
            wp.ajax.post('abolchSaveSettings',
                Object.fromEntries(new FormData($('#abolch-settings-form')[0]))
            )
                .done(function (data) {console.log(data)})
                .fail(function (errorThrown) {
                    console.log(errorThrown);
                })
        })

        $('.upload-image').click(function (e) {
            e.preventDefault();
            if(custom_uploader){
                custom_uploader.open();
                return;
            }
            custom_uploader = wp.media.frames.file_frame = wp.media({
                title: 'Image Upload',
                button: {
                    text: 'Choose image'
                },
                multiple: false,
            })

            custom_uploader.on('select', () => {
                let file = custom_uploader.state().get('selection').first().toJSON();
                $(e.target).closest('.social-network').find('.image_url').val(file.url)
            })
            custom_uploader.open()
        })
        jQuery('.tabs').tabs();
    });
})(jQuery)