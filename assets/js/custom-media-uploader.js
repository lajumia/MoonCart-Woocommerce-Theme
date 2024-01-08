jQuery(document).ready(function ($) {
    $('#upload_button_1').click(function (e) {
        e.preventDefault();

        var mediaUploader = wp.media({
            title: 'Upload Slide One Image',
            button: {
                text: 'Select Image'
            },
            multiple: false
        });

        mediaUploader.on('select', function () {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#image_url_1').val(attachment.url);
            // $('#image_url_2').val(attachment.url);
            // $('#image_url_3').val(attachment.url);
        });

        mediaUploader.open();
    });

    $('#upload_button_2').click(function (e) {
        e.preventDefault();

        var mediaUploader = wp.media({
            title: 'Upload Slide One Image',
            button: {
                text: 'Select Image'
            },
            multiple: false
        });

        mediaUploader.on('select', function () {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            //$('#image_url_1').val(attachment.url);
             $('#image_url_2').val(attachment.url);
            // $('#image_url_3').val(attachment.url);
        });

        mediaUploader.open();
    });

    $('#upload_button_3').click(function (e) {
        e.preventDefault();

        var mediaUploader = wp.media({
            title: 'Upload Slide One Image',
            button: {
                text: 'Select Image'
            },
            multiple: false
        });

        mediaUploader.on('select', function () {
            var attachment = mediaUploader.state().get('selection').first().toJSON();
            //$('#image_url_1').val(attachment.url);
            // $('#image_url_2').val(attachment.url);
             $('#image_url_3').val(attachment.url);
        });

        mediaUploader.open();
    });
});
