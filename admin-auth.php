
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title> Auth Page </title>
  </head>
  <body class="ff-inria">
  <?php
      include('./assets/components/header.php')
    ?>
   <main class="container mx auto">
    <form class="d-grid gap-3">
        <div class="d-grid gap-1">
            <label class="form-label"> E-mail </label>
            <input  id="email" placeholder="Email" type="email" required class="form-control" />
        </div>
        <div class="d-grid gap-1">
            <label class="form-label"> Password </label >
            <input id="password" placeholder="Enter Password" type="password" required  class="form-control"/>
        </div>
        <button id="login-admin-btn" type="button" class="button rounded shadow-sm"> Log in </button>
    </form>
   </main>
    </body>
    <script src="https://kit.fontawesome.com/79a71d8460.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"> </script>
  </html>