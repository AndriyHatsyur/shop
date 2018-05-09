$('.minus').click(function () {

    var count = Number($('.count').val());
    if(count > 1) {
        $('.count').val(count - 1);
    }
});

$('.plus').click(function () {

    var count = Number($('.count').val());
    var stock = Number($('#stock').text());
    if (count < stock){
        $('.count').val(count + 1);
    }
});