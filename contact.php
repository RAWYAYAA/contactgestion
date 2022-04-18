<?php
require "connexion.php";
class Contacts extends Connexion{
    protected $id;
    public $FullName;
    public $Phone;
    public $adresse;
    public $idUser;
    function setInfoContact($username,$Phone,$email,$adresse,$idUser) {
        $this->username = $username;
        $this->phone=$Phone;
        $this->email=$email;
        $this->adresse=$adresse;
        $this->idUser=$idUser;

    }
    function set_Contact($FullName,$Phone,$adresse) { 
        $this->FullName = $FullName;
        $this->phone=$Phone;
       $this->adresse=$adresse;

      }
    public function getContact($FullName,$Phone,$adresse)
        {
        return $this->FullName = $FullName;
        return $this->phone=$Phone;
        return $this->adresse=$adresse;
    }
    // protected function getAllUsers(){
    //    $sql="SELECT * FROM Contacts" ;
    //    $result=$this->Connect()->query($sql);
    //    $numRows=$result->num_rows;
    //    if($numRows>0){
    //     while($row=$result->fetch_assoc()){
    //         $data[]=$row;
    //     }
    //     return $data;
    //    }

    // }
    public function addContacts(){
        $conn = $this->connect();
        $req = "INSERT INTO CONTACTS (username, phone,email,address,iduser) VALUES ('$this->username','$this->email' ,'$this->phone', '$this->adresse', '$this->idUser') ";
        $conn->query($req); 
    }

    public function editContacts($idUser){
$conn = $this->connect();      
$idUser = $_GET['idUser'];
$res = "SELECT * FROM `contacts` WHERE iduser ='$idUser'";
$req = $conn->query($res);
if($req -> num_rows > 0){
while($row = $req->fetch_assoc()){
            $username = $_POST['username']; 
            $email = $_POST['email']; 
            $phone = $_POST['phone']; 
            $adresse = $_POST['adresse']; 
}

        if(isset($_POST['edit'])){
            $username = $_POST['username']; 
            $email = $_POST['email']; 
            $phone = $_POST['phone']; 
            $adresse = $_POST['adresse']; 
           

            $edit_contact = "UPDATE contact SET 
            username = '$username',
            email = '$email',
            phone = '$phone',
            adresse = '$adresse',
           
            WHERE idUser = '$idUser'";
            $conn->query($edit_contact);
            header('location: contactlist.php');
        }
    }
    }
    public function deleteContacts($id){
        $conn = $this->connect();
        $req = "DELETE FROM contacts WHERE id ='$id'";
            if ($conn->query($req)) {
                header('location: contactlist.php'); 
            }  
    }
    public function affichage($idUser){
        $conn = $this->connect();
        $req="SELECT * From contacts where iduser ='$idUser'";
        $res = $conn->query($req);?>
        <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Adresse</th>
                        </tr>
                    </thead><?php
        if($res -> num_rows > 0){
            while($row = $res->fetch_assoc()){
                ?>
                
                    <tbody>
                        <tr>
                            <th scope="row"><?= $row['username'] ?></th>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['phone'] ?></td>
                            <td><?= $row['address'] ?></td>
                            <td><a class="a" href="editform.php">Edit</a></td>
                            <td><a id="del" class="a" href="deletcontact.php?id=<?= $row['id'] ?>">Delete</a></td>
                        </tr>
                    </tbody>
                
                <?php

            }
        }else {
            echo "0 results";
          }
          ?> </table> <?php
    }

}


?>