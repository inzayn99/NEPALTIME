$(document).ready(function () {

    $('title').keyup(function () {
        console.log(this.val())

    });


    // ========================== Remove alert message===========//

    setTimeout(() => {
        $('.alert').hide('slow');
    }, 3000);

    CKEDITOR.replace('description');
});
