require("fine-uploader/lib/jquery/traditional");

const BASEURL = $('meta[name=_base_url]').attr('content');
const CSRFTOKEN = $('meta[name=_token]').attr('content');

+(function ($) {
    'use strict';

    let btn_upload = $('#btn_upload');

    let btn_upload_disable = function () {
        if (!btn_upload.prop('disabled')) {
            $('input[name="qqfile"]').addClass('disabled').attr('disabled', 'disabled');
            btn_upload.addClass('disabled').attr('disabled', 'disabled').before('<i class="glyphicon glyphicon-refresh glyphicon-spin save-spinner"></i> ');
        }
    };

    let btn_upload_enable = function () {
        if (btn_upload.prop('disabled')) {
            $('.save-spinner').remove();
            $('input[name="qqfile"]').removeClass('disabled').removeAttribute('disabled');
            btn_upload.removeClass('disabled').removeAttribute('disabled');
        }
    };

    let fuploader = $('#fileuploader').fineUploader({
        template: "upload-template",
        thumbnails: {
            placeholders: {
                waitingPath: BASEURL + "/images/vendor/fine-uploader/fine-uploader/waiting-generic.png",
                notAvailablePath: BASEURL + "/images/vendor/fine-uploader/fine-uploader/not_available-generic.png"
            }
        },
        request: {
            endpoint: BASEURL + '/upload/video',
            params: {_token: CSRFTOKEN}
        },
        editFilename: {
            enabled: false
        },
        retry: {
            enableAuto: false
        },
        chunking: {
            enabled: true,
            partSize: 16777216, // 16 MB
            concurrent: {
                enabled: true
            },
            success: {
                endpoint: BASEURL + "/upload/video/done"
            }
        },
        deleteFile: {
            enabled: true,
            method: "DELETE",
            endpoint: BASEURL + '/delete/video',
            params: {_token: CSRFTOKEN}
        },
        autoUpload: false,
        validation: {
            itemLimit: 1,
            allowedExtensions: ['3gp', 'avi', 'flv', 'm4v', 'mov', 'mp4', 'mpeg', 'mpg', 'vob', 'webm', 'wmv'],
            sizeLimit: 4294967296 // 4 Gb
        },
        callbacks: {

            onError: function (id, name, errorReason) {
                $('.upload-error').removeClass('hidden');
                $('.error-msg').text('Error: ' + errorReason);
                btn_upload_enable();
            },

            onUpload: function (id, name) {
                btn_upload_disable();
            },

            onComplete: function (id, name, response) {
                if (response.success) {
                    $('.upload-error').addClass('hidden');
                    $('.error-msg').text('');

                    let fileEl = fuploader.fineUploader("getItemByFileId", id),
                        imageEl = fileEl.find(".uploaded-file");

                    imageEl.append('<input name="filename" type="hidden" value="' + name + '">');
                    imageEl.append('<input name="uuid" type="hidden" value="' + response.uuid + '">');
                } else {
                    btn_upload_enable();
                }
            },

            onAllComplete: function (s, f) {
                if (s.length > 0) {
                    $('#form_upload').submit();
                }
            }
        }
    });

    btn_upload.click(function (e) {
        let title = $("#form_upload input[name='title']").val();
        let description = $("#form_upload textarea[name='description']").val();

        if (title == "" || description == "") {
            swal(
                'Error!',
                'Video Title and Description are required!',
                'error'
            )
        } else {
            fuploader.fineUploader('uploadStoredFiles');
        }

        e.preventDefault();
    });
})(jQuery);