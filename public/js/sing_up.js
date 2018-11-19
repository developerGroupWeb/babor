$(function(){

    var validate = true; ;

    var ID = [

        'name',
        'day',
        'month',
        'year',
        'city',
        'sex',
        'email',
        'password',
        'remember'
    ];
    function messageRequire(id){

        return $(id).next('.error').html('Your ' + $(id).attr('id') + ' is required');
    }

    $('#submit').submit(function () {



        return validate;
    });

});
