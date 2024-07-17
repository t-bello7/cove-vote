<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Home Page</title>
  </head>
  <body class="ff-inria">
    <?php
      include('./assets/components/header.php')
    ?>
    <main>
      <section class="image-section">
        <div class="image-slider">
            <img src="./assets/imgs/projects.png" class="active" />
            <img src="./assets/imgs/bg-1.jpg"/>
            <img src="./assets/imgs/bg-2.jpg"/>

        </div>
        <div style="display:flex;justify-content:center;gap: 3rem; margin-top: 35vh;">
          <i class=" navicon left fa-solid fa-circle-chevron-left"></i>
          <i class=" navicon right fa-solid fa-circle-chevron-right"></i>
        </div>
        <div class="container election-search flow">
          <div>
            <input placeholder="Enter location" />
          </div>
          <div>
            <input placeholder="Polling Unit" />
          </div>
          <div>
          <button> Search </button>
        </div>
        </div>
      </section>
      <section class="container">
        <h2 class="main-title"> Upcoming Elections </h2>
        <div class="election-wrapper">
          <div class="election">
            <div class="flex">
              <img src="./assets/imgs/vote-icon.png" />
              <span> <span> 11 </span> Voters</span>
            </div>

            <span> Polling Unit 1 </span>
            <h3> Britian Election </h3>
            <a href="./election-detail.php"><button class="btn btn-secondary"> View More </button> </a>
          </div>

          <div class="election">
            <div class="flex">
              <img src="./assets/imgs/vote-icon.png" />
              <span> <span> 11 </span> Voters</span>
            </div>

            <span> Polling Unit 1 </span>
            <h3> Britian Election </h3>
            <a href="./election-detail.php"><button class="btn btn-secondary"> View More </button> </a>
          </div>

          <div class="election">
            <div class="flex">
              <img src="./assets/imgs/vote-icon.png" />
              <span> <span> 11 </span> Voters</span>
            </div>

            <span> Polling Unit 1 </span>
            <h3> Britian Election </h3>
            <a href="./election-detail.php"><button class="btn btn-secondary"> View More </button> </a>
          </div>
        </div>

      </section>
    </main>
    <?php
      include('./assets/components/footer.php')
    ?>
  </body>
</html>