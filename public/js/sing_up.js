$(function(){

    $(document).on('submit', '#ajaxSubmit', function (event) {


        event.preventDefault();
       // alert('Amaelle')
        /*$.ajaxSetup({

            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });*/


        $.ajax({

            url : "{{ url('register/sing_up') }}",
            method : 'post',
            data : $(this).serialize(),
            success: function(result){
                console.log(result);

            }
        });

        alert($(this).serialize())
    })

});
