<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Contacts List</title>
</head>
<style>
.model {
        margin: auto;
        width: 500px;
        height: 500px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #aaa;
    }
.hidden {
        display: none;
    }
.close {
  color: #aaa;
  float: right;
  font-size: 36px;
  font-weight: bolder;
}
.modal-content{
    border: none !important;
}
.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.a{
    text-decoration: none;
}
.btn{
    width: 80px;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="nav-link active text-light" aria-current="page" href="#">login</a>
        </div>
        </div>
    </nav>
    <main class="w-75 m-auto">

    <div class="d-flex align-items-center justify-content-between">
        <h1>Contacts List :</h1>
       <button class=" btn bg-secondary text-white " id="modaladd"> Add</button>
    </div>
    <?php 
      require_once 'contact.php';
      $contact = new Contacts();
      $contact->affichage($_SESSION['id']);
    ?>
      <div class="container hidden">
        <div class="model p-5 d-flex flex-column"  id="model">
          <div><span class="close text-black" id="close"><i class=" bi bi-x-lg"></i></span></div>
        
      <form class="d-flex flex-column" method="POST" name="form">
        <label class="form-label">name</label>
        <input type="text"  class="form-control " name="username" placeholder="Entrer le nom">
        <label class="form-label">email</label>
        <input type="text"  class="form-control " name="email" placeholder="Enter l'email">
        <label class="form-label">Phone</label>
        <input type="tel"  class="form-control " name="phone" placeholder="Enter phone">
        <label class="form-label">Adresse</label>
        <input type="Adresse"  class="form-control "  name="adresse" placeholder="Enter Adresse">
        <input class="mt-4 py-2 fw-bold" type="submit" value="Add" name="save" id="ad" > 
        <?php
          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['save'])){
                extract($_POST);
                $contact = new Contacts();
                $contact->setInfoContact($username,$phone,$email,$adresse,$_SESSION['id']);
                $contact->addContacts();
            }
        }
        ?> 
    </form>
        </div>
      </div>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./modaladd.js">  </script>
<script>
  var ph=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
var em=/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/gm;
let submit = document.querySelector("#ad")
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
</script>
</body>
</html>