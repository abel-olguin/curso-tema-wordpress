(function ($){
    $(document).ready(function () {
        $('#abolch-submit-settings').click( (e) => {
            e.preventDefault();
            wp.ajax.post('', 'action=abolchSaveSettings&'+$('#abolch-settings-form').serialize())
                .done(function (data) {console.log(data)})
                .fail(function (errorThrown) {
                    console.log(errorThrown);
                })
        })
    });
})(jQuery)