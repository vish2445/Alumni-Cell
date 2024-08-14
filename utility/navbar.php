<!-- this file contain the code for navbar and then it can be included in other files -->
<?php
  include_once './utility/config.php';
?>

<nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid flexi">
    <img src="logo.png" alt="">
    <div class="title">
      <p class="cell">Alumni Cell</p>
      <p class="college">
        National Institute of Technology, Delhi</p>
    </div>

    <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navbar">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item px-2">
          <a class="nav-link" id="nav-id" href = './' >Home</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href= '<?php $BaseURL?>messages.php'>Messages</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href= '<?php $BaseURL?>about.php'>About us</a>
        </li>
        <li class="nav-item dropdown px-2" style="display: flex; align-items: center">
          <a class="dropdown-toggle" style = "color: #EB455F; text-decoration: none" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Other
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href= '<?php $BaseURL?>gallary.php'>Gallery</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href= '<?php $BaseURL?>team.php'>Team</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href= '<?php $BaseURL?>privilagecard.php'>Privilege Card</a></li>
          </ul>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href= '<?php $BaseURL?>contact.php'>Contact</a>
        </li>
        <button type="button" class="new-Alumni-btn btn">New Alumni</button>
      </ul>
    </div>
  </div>
</nav>




<!-- write your code below this line and also don't remove this line -->