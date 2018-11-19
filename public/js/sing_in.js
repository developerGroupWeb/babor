$(function () {

    $('#submit').on('submit', function (event) {

        event.preventDefault();

        $.ajax({
            url: '',
            method: 'POST',
            data: serialize(),
            success: function () {

                if(data != ''){
                    $('#error').html(data);
                }else{
                    window.location = 'profile.blade.php';
                }
            }
        });
    });
});