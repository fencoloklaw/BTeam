<?php
require_once ("header.php");
require_once ("navbar.php")
?>
<div style="height:100%">
<!--  <div class="container-fluid d-flex flex-column justify-content-end imageContainer" style="background-image: url('img/dealsubmission.jpg')">-->
<!--    <h1 class="d-flex justify-content-center text-light">SUBMIT A DEAL</h1>-->
<!--  </div>-->
  <div id="frontPage" class="h-100">
    <div id="videoBlock" class="h-100">
      <video autoplay loop preload muted class="h-100 w-100" style="object-fit:fill;">
        <source src="video/Submission.mp4" type="video/mp4">
      </video>
    </div>
    <div id="videoMessage" class="d-flex flex-column justify-content-center h-100">
      <h1 class="d-flex justify-content-center font-theme font-weight-bold">Submit a Deal</h1>
    </div>
  </div>
  <div class="container my-3">
    <div class="text-center">
      <h4 class="my-3">
        Please fill in the required fields and we will respond within 4 hours.
        You will receive a confirmation email immediately.
        Thank you!
      </h4>
    </div>
    <form id="ajax-contact" action="email_contact.php" method="post">
      <label class="font-weight-bold">Your Name</label>
      <div class="form-group row">
        <div class="col-6">
          <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="nameHelp" required>
          <label style="color:#394540">First</label>
        </div>
        <div class="col-6">
          <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="nameHelp" required>
          <label style="color:#394540">Last</label>
        </div>
      </div>
      <div class="form-group">
        <label class="font-weight-bold">Your Email Address</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label class="font-weight-bold">Your Phone Number</label>
        <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" required>
      </div>
      <div class="form-group">
        <label class="font-weight-bold">Your Message</label>
        <textarea class="form-control" id="message" rows="6" name="message" required></textarea>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-dark btn-square mb-3" style="width:400px">
          <span>SEND</span>
        </button>
      </div>
    </form>
    <div id="form-messages"></div>
  </div>
  <?php
  require_once ("footer.php")
  ?>
</div>
