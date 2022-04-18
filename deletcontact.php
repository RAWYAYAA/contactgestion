<?php
    require_once 'contact.php';
    $contact = new Contacts();
    $contact->deleteContacts($_GET['id']);
    
?>