<?php
require_once ("header.php");
?>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
  <div class="w-100">
    <div class="d-flex flex-column align-items-start w-100">
      <div class="ml-auto pr-3">
        <a class="btn btn-outline-theme" href="submissionForm.php">DEAL SUBMISSION FORM</a>
      </div>
      <div class="row w-100">
        <div class="col-1">
        </div>
        <div onclick="location.href='index.php'" class="navbar-brand d-block d-lg-none font-theme ml-auto mr-auto fadeIn">
          <img style="width:200px; height:100px; padding-bottom:10px;" src="./img/BTeamLogo.png">
        </div>
        <button class="navbar-toggler mt-4 col-1" style="height:fit-content; border:3px solid;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse container" id="navbarSupportedContent">
        <ul class="nav navbar-nav col-4 ml-auto">
          <li class="nav-item" data-target="#navbarSupportedContent">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item" data-target="#navbarSupportedContent">
            <a class="nav-link" href="aboutPage.php">ABOUT US</a>
          </li>
        </ul>
        <div onclick="location.href='index.php'" class="col-4 navbar-brand d-none d-lg-block font-theme fadeIn">
          <img class="mr-auto ml-auto" style="width:200px; height:100px; padding-bottom:10px; display:block;" src="./img/BTeamLogo.png">
        </div>
        <ul class="nav navbar-nav col-4 ml-auto">
          <li class="nav-item" data-target="#navbarSupportedContent">
            <a class="nav-link" href="recentlyFunded.php">RECENTLY FUNDED</a>
          </li>
          <li class="nav-item" data-target="#navbarSupportedContent">
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
