
    $(document).ready(function(){

$('.increment-btn').click(function(e){
    e.preventDefault();
    var inc_value=$('.qty-input').val();
    var value1= parseInt(inc_value,10);
    value1 = isNaN(value1) ? 0  :value1;
    if(value1 < 10){
        value1++;
        $('.qty-input').val(value1);
    }
});
$('.decrement-btn').click(function(e){
    e.preventDefault();
    var dec_value=$('.qty-input').val();
    var value1= parseInt(dec_value,10);
    value1 = isNaN(value1) ? 0  :value1;
    if(value1 > 1){
        value1--;
        $('.qty-input').val(value1);
    }
})


    });
