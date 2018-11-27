require('./bootstrap');

$(document).ready(function () {
    var tagField= $('#tagField').clone(true);
    $('#addTagField').on('click', function () {
       tagField.clone(true)
           .appendTo('#tagForm')
           .fadeIn('slow')
           .find("input[name*=name]")
           .focus();
    });
});