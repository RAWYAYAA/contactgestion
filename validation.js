
function validate(e) {
      
    if( document.myForm.username.value == "" ) {
       alert( "Please enter your name!" );
       document.myForm.username.focus() ;
       e.preventDefault();
    }
    else if( document.myForm.password.value == "" || document.myForm.password.value.length < 8 ) {
       alert( "Enter a valid password" );
       document.myForm.password.focus() ;
       e.preventDefault();
       
    }
    else if(document.myForm.conpassword.value == "" ){
        alert( "Enter a valid password" );
        document.myForm.confirmpassword.focus() ;
        e.preventDefault();

    }
    else if( !(document.myForm.confirmpassword.value == document.myForm.password.value) ){
        alert( "don't match" );
        document.myForm.confirmpassword.focus() ;
        e.preventDefault();

    }
 }