<?php
require_once("header.php");
?>
<div class="modal fade" id="brokerSignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form id="" action="" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Broker Sign Up</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="nameHelp" placeholder="First Name*" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="nameHelp" placeholder="Last Name*" required>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Phone Number*" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address*" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" value="Submit" class="btn btn-square btn-theme">Submit Form</button>
        </div>
      </form>
    </div>
  </div>
</div>
