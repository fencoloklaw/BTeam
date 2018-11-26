<?php
require_once ("header.php");
?>

<div class="text-light background-theme">
  <div class="container">
    <div class="py-3">
      <div class="pt-3 row">
        <button class="ml-auto mr-auto btn btn-square btn-outline-light" onclick="scrollToTop()"
          onmouseover="document.getElementById('arrowObj').src='img/up-arrow-dark.svg'" onmouseout="document.getElementById('arrowObj').src='img/up-arrow.svg'">
          <img id="arrowObj" class="row ml-auto mr-auto" style="width:25px; height:25px;" src="img/up-arrow.svg">
        </button>
      </div>
    </div>
    <div class="row d-flex justify-content-around pt-1 px-lg-5">
      <ul class="nav" style="margin-right:auto; margin-left: auto;">
        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutPage.php">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="submissionForm.php">SUBMISSION FORM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recentlyFunded.php">RECENTLY FUNDED</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">CONTACT</a>
        </li>
      </ul>
    </div>
    <div class="text-light text-center pb-3">
      <span>Powered by 2018 by Royalty Finance.</span>
      <span>&copy;2018 by Spread Marketing Inc.</span>
    </div>
  </div>
</div>
