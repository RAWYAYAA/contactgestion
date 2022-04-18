<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cantact</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid ">
        <a class="navbar-brand text-light" href="#">Profil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <a class="nav-link active text-light" aria-current="page" href="contactlist.php">Cantact</a>
                <a class="nav-link active text-light" aria-current="page" href="#">logout</a>
        </div>
        </div>
    </nav>

  <?php
  session_start();
  ?>
  <div class="container">
    <h3 class="mt-5"><b>Welcome,</b></h3>
    <h4 class="mt-4"><strong>Your Profil:</strong></h4>
    <table class="table">
        <thead>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Username :: <?php echo $_SESSION['username'] . $_SESSION['id'] ; ?></th>
            <td></td> 
          </tr>
          <tr>
            <th scope="row">Signup date :: <?php echo $_SESSION['regDate']; ?></th>
            <td></td>
          </tr>
          <tr>
            <th scope="row">Last login :: <?php echo $_SESSION['logDate']; ?></th>
            <td colspan="2"></td>
          </tr>
        </tbody>
      </table>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>