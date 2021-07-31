






$(document).ready(function () {

    function slugify(text)
    {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
    }

$('#title').keyup(function (){
    let tv = $('#title').val()
    $('#slug').val(slugify(tv));
})



    // ========================== Remove alert message===========//

    setTimeout(() => {
        $('.alert').hide('slow');
    }, 3000);

    CKEDITOR.replace('description');
});
