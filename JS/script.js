$(document).ready(function(){
///logo
    $('.clicklogo').click(function(){
        var logoClicked = $(this).attr('logoAtr');
        $('.logoMini').attr('class','logoMini');
        $('.logoMini').addClass(logoClicked);
     
    });
/// imie
    $('#wpiszImie').keyup(function(){
        var imie= $(this).val();
       $('.logoText').text(imie);
    });
/// kolor koszulki
    $('.koszulkaKolor').click(function(){
        var koszulkaKolor = $(this).attr('koszulkaAtr');
        $('.shirtColor').attr('class','shirtColor');
        $('.shirtColor').addClass(koszulkaKolor);
    });
///czionki

    
$('.fontColor').click(function(){
    var color=$(this).attr('colorAttr');
    $('.logoText').attr('style','color:'+color);
});

// var sesja=$('.wynik').html();
// $.ajax({
//     data:({'sesja': sesja}),
//     url:'PHP/settings.php',
//     method: 'POST'
// }).done(function(msg){
//         $('.wynik').html(msg);
// });




$('#zatwierdzenie').click(function(){
    var sesja=$('.wynik').html();
    $.ajax({
        data:({'sesja': sesja}),
        url:'PHP/settings.php',
        method: 'POST'
    }).done(function(msg){
            $('.wynik').html(msg);
    });
});

});