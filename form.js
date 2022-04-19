
var ph=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
var em=/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/gm;
let submit = document.querySelector("#submit")
submit.addEventListener('click', function(e){

        
    if( document.form.username.value == "" ) {
       alert( "Please enter your name!" );
       document.form.username.focus() ;
       e.preventDefault();
    }
    else if(!(em.test(document.form.email.value))){
        alert( "Please enter a valid email!" );
        document.form.email.focus() ;
        e.preventDefault();
    }
    else if(document.form.phone.value =="" ||!( ph.test( document.form.phone.value ))){
        alert( "Please enter a valid phone!" );
        document.form.phone.focus() ;
        e.preventDefault();
    }
    else if(document.form.adresse.value ==""){
        alert( "Please enter your adresse!" );
        document.form.adresse.focus() ;
        e.preventDefault();
    }

})