<?php
    require_once 'contact.php';
    $contact = new Contacts();
    $muContact = $contact->getEditContacts($_GET['id']);
    $contact->editContact();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="d-flex flex-column" method="POST" name="form">
        <label class="form-label">name</label>
        <input type="text"  class="form-control " name="username" placeholder="Entrer le nom" value="<?= $muContact['username'] ?? '' ?>">
        <label class="form-label">email</label>
        <input type="text"  class="form-control " name="email" placeholder="Enter l'email" value="<?= $muContact['email'] ?? '' ?>">
        <label class="form-label">Phone</label>
        <input type="tel"  class="form-control " name="phone" placeholder="Enter phone" value="<?= $muContact['phone'] ?? '' ?>">
        <label class="form-label">Adresse</label>
        <input type="Adresse"  class="form-control "  name="adresse" placeholder="Enter Adresse" value="<?= $muContact['address'] ?? '' ?>">
        <input class="mt-4 py-2 fw-bold" type="submit" value="Add" id="submit" name="edit"> 
<script src="./form.js">

</script>        
</body>
</html>
