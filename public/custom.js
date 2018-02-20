$(document).ready(function() {
    $('select[name="codserv1"]').on('change', function(){
        var codserv1 = $(this).val();
        if(codserv1) {
            $.ajax({
                url: 'serv2/get/'+ codserv1,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="codserv2"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="codserv2"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="codserv2"]').empty();
        }

    });

});