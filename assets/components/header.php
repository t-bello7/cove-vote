<header class="header bg-dark text-white">
      <a class="ff-montserrat-alternates header-logo" href="./index.html">
        <span class="text-primary-1"> COVE </span> <span class="text-white"> VOTE</span>
      </a>
      <i class="fa-solid fa-bars btn-menu"></i>
      <nav class="flex bg-dark nav">
        <i class="fa-solid mg-2 fa-xmark btn-close"></i>
        <a class="ff-montserrat-alternates" href="./index.php">
          <span class="text-primary-1"> COVE </span> <span class="text-white"> VOTE</span>
        </a>
        <input placeholder="Search Upcoming Elections "/>
        <div class="flex navbar">
          <ul class="flex navlinks">
              <li><a href="#about-us"> About Us </a></li>
              <li><a href=""> Contact Us </a></li>
          </ul>
          <?php
              if (isset($_SESSION['loggedIn']))  {
                echo ' <a href="./server/logout.php"> <button class="btn btn-secondary" type="button"> Log Out </button>

                </a> ';
              } else {
                echo '
                  <div class="dropdown">
                  <button class="btn btn-secondary flex dropdown-btn" style="gap: 1rem;"> <span>  Sign up / Login  </span> <i class="fa fa-caret-down fa-beat-fade" aria-hidden="true"></i> </button>
                    <ul class="dropdown-content">
                    <li class="dropdown-item w-full"> <a class="w-full" href="./voter-auth.php"> I\'m a Voter </a> </li>
                    <li class="dropdown-item w-full"> <a class="w-full" href="./officer-auth.php"> I\'m an Election Officer </a></li>
                    </ul>
                  </div>
                ';
              }
          ?>

        </div>
      </nav>
    </header>