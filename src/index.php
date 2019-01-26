<?php
  require_once ("header.php");
  require_once ("navbar.php");
  require_once ("broker-signup-modal.php");
  require_once ("lender-signup-modal.php");
?>
<div id="site-content" style="height:100%;">
  <div id="frontPage" class="h-100">
    <div id="backBlock" class="h-100" style="background-image: url('img/realEstateCity.jpg')">
      <video autoplay loop muted class="h-100 w-100" style="object-fit:fill;">
        <source src="video/HomePageSmall.mp4" type="video/mp4">
        <source src="video/HomePageSmall.webm" type="video/webm">
      </video>
    </div>
    <div id="overlayMessage" class="d-flex flex-column justify-content-center h-100">
          <div class="fadeIn pb-5">
            <h1 class="text-light w-100 text-center font-weight-bold">Submit. Approved. Funded.</h1>
          </div>
          <div class="d-flex justify-content-center w-100">
            <button class="btn btn-lg btn-theme btn-square mr-5" data-toggle="modal" data-target="#brokerSignUp">
              <span>Broker Sign Up</span>
            </button>
            <button class="btn btn-lg btn-dark btn-square ml-5" style="border:0" data-toggle="modal" data-target="#lenderSignUp">
              <span>Lender Sign Up</span>
            </button>
          </div>
    </div>
  </div>
  <div id="trust" class="header-overlay d-flex flex-column justify-content-center page" style="background-image:url('img/homepagesecondsection-min.jpg'); height:100%;">
    <div class="d-flex">
      <h1 class="text-light w-100 text-center" style="font-size:5rem;"><span class="font-weight-bold">Trust. Honesty. Reliability</span></h1>
    </div>
  </div>
  <div id="aboutUs" class="row page-section" style="background:#2c2c2c;">
      <div class="w-100 h-100 d-flex justify-content-center" style="background:linear-gradient(rgba(255,255,255,.9), rgba(255,255,255,.9)), url('img/BTeamLogoSimplified.png') center no-repeat; background-size: 50% 50%;">
        <div class="container" style="margin:auto;">
              <div class="container d-flex flex-column justify-content-center">
                <h1 class="font-weight-bold text-center pt-5">OUR PHILOSOPHY</h1>
                <div class="px-lg-5">
                  <p class="p-5 text-uppercase">
                    Acquiring mortgage loans through traditional prime-lenders (A lender) sometimes is complicated and not promising due to the high qualification requirements. With that in mind, B team believes that every applicant should have the opportunity to get their mortgage approved. We understand brokers strive to help applicants with their mortgage approval, however, it can be disappointing when a deal does not go through or, either telling an applicant that your unable to help them with their file. This is  something that clients are afraid of. B Team excels at this specific aspect of the business with their long-term relationship lenders. By sourcing out your file to B Team, you’re still able to earn an extra profit as well as provide extensive help for your client while focusing on your next deal. Sourcing out to B Team will allow you to add additional revenue streams to your business from these inefficient tasks.
                  </p>
                  <div class="d-flex justify-content-center">
                    <a class="btn btn-lg btn-square btn-theme" href="aboutPage.php">ABOUT US</a>
                  </div>
                </div>
              </div>
        </div>
      </div>
  </div>
  <div id="submissionProcess" class="p-lg-5 py-5">
    <div id="submissionNum" class="container">
      <div style="border-bottom: 1px solid">
        <h1 class="text-center font-weight-bold p-3">SUBMISSION PROCESS</h1>
      </div>
      <div id="images" class="row p-lg-5 py-5">
        <div class="col-4">
          <div id="submissionNum" onclick="location.href='submissionForm.php'" class="btn text-center text-light black-stripe-bg w-100 h-100 revealOnScroll" data-animation="fadeInUp" style="padding:50px">
            <h1 class="font-weight-bold" style="font-size:10rem;">01</h1>
            <div>
              <span>SUBMIT YOUR DEAL</span>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div id="submissionNum" onclick="location.href='submissionForm.php'" class="btn text-center text-light theme-stripe-bg w-100 h-100 revealOnScroll" data-animation="fadeInUp" style="padding:50px">
            <h1 class="font-weight-bold" style="font-size:10rem;">02</h1>
            <div>
              <span>BTEAM RESPONSE</span>
            </div>
            <div>
              <span>WITHIN 4 HOURS</span>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div id="submissionNum" onclick="location.href='submissionForm.php'" class="btn text-center text-light black-stripe-bg w-100 h-100 revealOnScroll" data-animation="fadeInUp" style="padding:50px">
            <h1 class="font-weight-bold" style="font-size:10rem;">03</h1>
            <div>
              <span>GET DEAL APPROVED</span>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a class="btn btn-lg btn-square btn-outline-theme" href="submissionForm.php" style="width:300px;">SUBMIT A DEAL</a>
      </div>
    </div>
  </div>
  <div id="testimonial" class="d-flex flex-column p-5 revealOnScroll" data-animation="fadeInUp" style="background-color:#fafafa">
    <h1 class="text-center font-theme font-weight-bold">RECENTLY FUNDED</h1>
    <div id="testimonial-row-1" class="row pb-3" style="height:320px;">
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-index-container" style="background-image: url('img/recentlyFunded/SFDSurrey.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">Surrey, BC</h2>
          <p>Property & Location: SFD in Surrey, BC<br/>
            Loan Type: Second Construction Mortgage<br/>
            Appraised Value: As is: $1,000,000 Future value: $1,500,000<br/>
            Existing 1st Mortgage: $600,000<br/>
            New 2nd Mortgage: $300,000<br/>
            LTV: 60%<br/>
            Rate/Term: 9.95%, 1 Year Fixed (Open)<br/>
            Amortization: Interest Only<br/>
            Compensation: Total $11,800 split with Broker<br/>
            Lender: Private Investor<br/>
            Income: Not required<br/>
            Credit: 600<br/>
            Deal Notes:  2nd construction mortgage to help complete the house
          </p>
        </div>
      </div>
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-index-container" style="background-image: url('img/recentlyFunded/condoLangley.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">Langley, BC</h2>
          <p>Property & Location: Condo in Langley, BC <br/>
            Loan Type: Second Mortgage<br/>
            Appraised Value: $350,000<br/>
            Existing 1st Mortgage: $150,000<br/>
            Existing 2nd Mortgage: $50,000<br/>
            Existing 3rd Mortgage: $30,000<br/>
            New 2nd Mortgage: $140,000<br/>
            LTV: 82.8%<br/>
            Rate/Term: 14.95%, 1 Year Fixed (Two months interest penalty)<br/>
            Amortization: Interest Only<br/>
            Compensation: Total $11,800 split with Broker<br/>
            Lender: Private Investor<br/>
            Credit: 550<br/>
            Deal Notes:  Clients with messy credit, Condo, Payout of first and second mortgage, Committed in 24 hours, funded in 3 days
          </p>
        </div>
      </div>
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-index-container" style="background-image: url('img/recentlyFunded/multiplexKitimatBC.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">Kitimat, BC</h2>
          <p>Property & Location: 9 unit Multiplex in Kitimat, BC<br/>
            Loan Type: First Mortgage<br/>
            Appraised Value: $800,000<br/>
            New 1st Mortgage: $300,000<br/>
            LTV: 31%<br/>
            Rate/Term: 7.95%, 1 Year Fixed (Open after 6 months)<br/>
            Amortization: Interest Only<br/>
            Compensation: Total $14,000 split with Broker<br/>
            Lender: Private Investor<br/>
            Income: Rental from property<br/>
            Credit: 750<br/>
            Deal Notes:  Remote Location, Committed and funded in 4 days. Previous offer they received elsewhere was at 12%
          </p>
        </div>
      </div>
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-index-container" style="background-image: url('img/recentlyFunded/commercialOfficeSpaceBC.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">Vancouver, BC</h2>
          <p>Property & Location: Commercial Office Space, BC<br/>
            Loan Type: Second Mortgage<br/>
            Appraised Value: $600,000<br/>
            Second Mortgage: $197,000<br/>
            LTV: 72%<br/>
            Rate/Term: 15%, 1 Year Fixed (Closed)<br/>
            Amortization: Interest Only<br/>
            Compensation: Total $7,800 split with Broker<br/>
            Lender: Private Investor<br/>
            Income: Rental<br/>
            Credit: 750
          </p>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <a class="btn btn-lg btn-square btn-dark" href="recentlyFunded.php" style="width:300px;">SEE MORE HERE</a>
    </div>
  </div>
  <div id="index_contact" class="py-lg-5 py-3">
    <div class="container">
      <div class="row mt-auto mb-auto">
        <div id="contact_form" class="col d-inline px-5">
          <div class="text-center">
            <h1 class="font-theme font-weight-bold px-5">CONTACT</h1>
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
            <div class="form-group row">
              <div class="col-6">
                <label>Email Address *</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="col-6">
                <label>Phone Number *</label>
                <input type="number" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" required>
              </div>
            </div>
            <div class="form-group">
              <label>Message *</label>
              <textarea class="form-control" id="message" rows="6" name="message" required></textarea>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-dark btn-square mb-3">
                <span>SEND</span>
              </button>
            </div>
          </form>
        </div>
      </div>
      <div id="form-messages"></div>
    </div>
  </div>
  <?php
  require_once ("footer.php")
  ?>
</div>

