<?php
    require('./server/config.php');
    if (!isset($_SESSION['loggedIn'])) {
        header('Location: index.php');
        exit();
    };
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title> Voters Authentication Page </title>
  </head>
  <body class="ff-inria">
  <?php
      include('./assets/components/header.php')
    ?>
    <main class="container">
    <h2> List of Voters </h2>
    <div class="table-wrapper">

    <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col"> FirstName </th>
                      <th scope="col"> Last Name </th>
                      <th scope="col"> No of Registered Elections</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>23</td>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>23</td>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>23</td>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>23</td>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>23</td>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>23</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry </td>
                      <td>Bird </td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Larry </td>
                      <td>Bird </td>
                      <td>2</td>
                    </tr>
                  </tbody>
                </table>
    </div>

    </main>
    <?php
      include('./assets/components/footer.php')
    ?>
    </body>
  </html>