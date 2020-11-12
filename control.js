
$(function(){
    $(document).ready(function(){
        $("#myCarousel").carousel({
            interval : 1000,
            pause: false
        });
    });

    $('body').on('click','#day',function(event){
        event.preventDefault();
        var request=$.ajax({
            type:'get',
            url: "wish.html",
            data: {},//end of data
            beforeSend:function(){},
            success: function(data, textStatus, xhr) {
                $('#outer_div').html(data);
            }
        });
    });
    $('body').on('click','#gift',function(event){
        event.preventDefault();
        var request=$.ajax({
            type:'get',
            url: "letter.html",
            data: {},//end of data
            beforeSend:function(){},
            success: function(data, textStatus, xhr) {
                $('#outer_div').html(data);
            }
        });
    });

})
