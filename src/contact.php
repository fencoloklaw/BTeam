<?php
  require_once ("header.php");
  require_once ("navbar.php");
?>
<div style="height:100%">
  <div class="container-fluid d-flex flex-column justify-content-end imageContainer" style="background-image:url('img/contact.jpg'); filter: brightness(125%);">
  </div>
  <div>
    <div class="container p-5">
      <div class="row mt-auto mb-auto">
        <div id="contact_form" class="col d-inline px-5">
        <div class="text-center">
          <h1 class="font-theme font-weight-bold px-5">CONTACT</h1>
        </div>
          <div id="form-messages"></div>
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
              <label>Message</label>
              <textarea class="form-control" id="message" rows="6" name="message"></textarea>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-dark btn-square mb-3" style="width:400px">
                <span>SEND</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  require_once ("footer.php")
  ?>
</div>

