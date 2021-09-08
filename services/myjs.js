/* JavaScript */

/* Services */

function increasefocus(idn){
    var temp = document.querySelectorAll("#i1, #i2, #i3, #i4, #i5, #i6")
    for (i = 0; i < temp.length; i++) {
        temp[i].style.opacity = "0.4";
        
    }
    document.getElementById(idn).style.opacity=1;
}

function removefocus(){
    var temp = document.querySelectorAll("#i1, #i2, #i3, #i4, #i5, #i6")
    for (i = 0; i < temp.length; i++) {
        temp[i].style.opacity = 1;
    }
}










/* JQuery */
/* Home Page */


$(window).on('scroll',function(){
    $('#image3').animate({'right':'50px' ,'opacity':1}, 1800);
});

$(window).on('scroll',function(){
    $('#image4').animate({'top':'50px' ,'opacity':1}, 1800);
});

$(window).on('scroll',function(){
    $('#content').animate({'bottom':'30px' ,'opacity':1}, 2800);
});

/* Services */

if(window.matchMedia("(min-width: 992px)").matches){
    $(window).on('load',function(){
        $('#image1').animate({'left':'50px' ,'opacity':1}, 1800);
    });
}
else{
    $(window).on('load',function(){
        $('#image1').animate({'opacity':1}, 1800);
    });
}






