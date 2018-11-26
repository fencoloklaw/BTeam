<?php
require_once ("header.php");
require_once ("navbar.php")
?>
<div style="height:100%">
  <div id="frontPage" class="h-50">
    <div id="backBlock" class="h-100" style="background-image: url('img/patio.jpg');">
      <video autoplay loop preload muted class="h-100 w-100" style="object-fit:fill;">
        <source src="video/Submission.mp4" type="video/mp4">
      </video>
    </div>
    <div id="overlayMessage" class="d-flex flex-column justify-content-center h-100">
      <div class="font-theme w-100 text-center" style="font-size:5rem;">SUBMIT A DEAL</div>
    </div>
  </div>
  <div class="container">
    <div class="p-5" style="background-color:white;">
      <div class="text-center">
        <h4 class="my-3">
          Please fill in the required fields and we will respond within 4 hours.
          You will receive a confirmation email immediately.
          Thank you!
        </h4>
      </div>
      <form id="ajax-contact" action="email_contact.php" method="post">
        <div class="form-group row">
          <div class="col-6">
            <label>First Name *</label>
            <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="nameHelp" required>
          </div>
          <div class="col-6">
            <label>Last Name *</label>
            <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="nameHelp" required>
          </div>
        </div>
        <div class="form-group">
          <label>Email Address *</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label>Phone Number *</label>
          <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" required>
        </div>
        <div class="form-group">
          <label>Location of Property</label>
          <input type="text" class="form-control" id="locationOfProperty" name="locationOfProperty">
        </div>
        <div class="form-group">
          <label>Property Value</label>
          <input type="number" class="form-control" id="propertyValue" name="propertyValue">
        </div>
        <div class="form-group">
          <label>Mortgage Requested</label>
          <input type="number" class="form-control" id="mortgageRequested" name="mortgageRequested">
        </div>
        <div class="form-group">
          <label>Message *</label>
          <textarea class="form-control" id="message" rows="6" name="message"></textarea>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-dark btn-square mb-3" style="width:400px">
            <span>SEND</span>
          </button>
        </div>
      </form>
      <div id="form-messages"></div>
    </div>
  </div>
  <?php
  require_once ("footer.php")
  ?>
</div>
