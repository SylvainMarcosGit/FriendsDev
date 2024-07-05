
$(document).ready(function() {
    // Au chargement de la page, vérifiez la position de défilement et affichez/masquez l'icône
    toggleScrollUp();

    // Lorsque l'utilisateur fait défiler la page
    $(window).scroll(function() {
        toggleScrollUp();
    });

    // Fonction pour afficher ou masquer l'icône en fonction de la position de défilement
    function toggleScrollUp() {
        var scrollPos = $(window).scrollTop();
        var windowHeight = $(window).height();

        if (scrollPos > windowHeight) {
            $('#scrollUp').fadeIn();
        } else {
            $('#scrollUp').fadeOut();
        }
    }
});



var eye = document.querySelector('.feather-eye');
var eyeoff= document.querySelector('.feather-eye-off');

var epassword = document.getElementById('pwd');

var epasswords = document.getElementById('cpwd');


eye.addEventListener('click',() => {
    eye.style.display ="none";
    eyeoff.style.display ="block";
    epassword.type ="text";
    

} );

eyeoff.addEventListener('click',() => {
    eye.style.display ="block";
    eyeoff.style.display ="none";
    epassword.type ="password";
 

} );


eye.addEventListener('click',() => {
    eye.style.display ="none";
    eyeoff.style.display ="block";
    epasswords.type ="text";


} );    



eyeoff.addEventListener('click',() => {
    eye.style.display ="block";
    eyeoff.style.display ="none";
    epasswords.type ="password";
 

} );