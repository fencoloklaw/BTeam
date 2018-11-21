<?php
  require_once ("header.php");
  require_once ("navbar.php");
  require_once ("broker-signup-modal.php");
  require_once ("lender-signup-modal.php");
?>
<div id="site-content" style="height:100%;">
  <div id="frontPage" class="h-100">
    <div id="videoBlock" class="h-100">
      <video autoplay loop poster muted playsinline class="h-100 w-100" style="object-fit:fill;">
        <source src="video/HomePageSmall.mp4" type="video/mp4">
        <source src="video/HomePageSmall.webm" type="video/webm">
      </video>
    </div>
    <div id="videoMessage" class="d-flex flex-column justify-content-center h-100">
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
  <div id="trust" class="header-overlay d-flex flex-column justify-content-center page" style="background-image:url('img/homepagesecondsection-min.jpg'); height:100%;" >
    <div class="fadeIn d-flex">
      <h1 class="text-light w-100 text-center" style="font-size:5rem;"><span class="font-weight-bold">Trust. Honesty. Reliability</span></h1>
    </div>
  </div>
  <div id="aboutUs" class="d-flex row page-section" style="background-color:#2c2c2c;">

      <div class="h-100 container d-flex justify-content-center">
        <div style="margin:auto; width:50%;">
          <img src="./img/BTeamLogoSimplified.png" style="max-width:100%;">
        </div>
      </div>
<!--    <div class="col-6 container p-5 d-flex flex-column justify-content-center background-theme">-->
<!--      <h1 class="font-weight-bold text-center pt-5">OUR PHILOSOPHY</h1>-->
<!--      <div class="px-lg-5">-->
<!--        <p class="p-5" style="color:#4d4b4b">-->
<!--          Acquiring mortgage loans through traditional prime-lenders ( A lender) sometimes is complicated and not promising due to the high qualification requirements. With that in mind, the B team believes that every applicant should have the opportunity to get their mortgage approved. The B team not only helps you connect with lenders but work closely with you to help you build up your credit. The B team will make sure that your financial commitment can match whatever your future goal is, from purchasing a new home to a mortgage to build a home.-->
<!--        </p>-->
<!--        <div class="d-flex justify-content-center">-->
<!--          <a class="btn btn-lg btn-square btn-outline-dark" href="aboutPage.php">ABOUT US</a>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
  </div>
  <div id="submissionProcess" class="p-lg-5 py-5">
    <div class="container">
      <div id="submissionTitle" class="fadeIn" style="border-bottom: 1px solid">
        <h1 class="text-center font-weight-bold p-3">SUBMISSION PROCESS</h1>
      </div>
      <div id="images" class="row p-lg-5 py-5">
        <div class="col-4">
          <div onclick="location.href='submissionForm.php'" class="btn text-center text-light black-stripe-bg w-100 h-100">
            <h1 class="font-weight-bold display-1 fadeIn-15">01</h1>
            <span>SUBMIT YOUR DEAL</span>
          </div>
        </div>
        <div class="col-4">
          <div onclick="location.href='submissionForm.php'" class="btn text-center text-light theme-stripe-bg w-100 h-100">
            <h1 class="font-weight-bold display-1 fadeIn-15">02</h1>
            <div>
              <span>LENDER RESPONSE</span>
            </div>
            <div>
              <span>WITHIN 4 HOURS</span>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div onclick="location.href='submissionForm.php'" class="btn text-center text-light black-stripe-bg w-100 h-100">
            <h1 class="font-weight-bold display-1 fadeIn-15">03</h1>
            <span>GET DEAL APPROVED</span>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a class="btn btn-lg btn-square btn-outline-theme" href="submissionForm.php" style="width:300px;">SUBMIT A DEAL</a>
      </div>
    </div>
  </div>
  <div id="testimonial" class="d-flex flex-column p-5 page-section" style="background-color:#fafafa">
    <h1 class="text-center fadeIn font-theme font-weight-bold">RECENTLY FUNDED</h1>
    <div id="testimonial-row-1" class="row pb-3" style="height:320px;">
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-container" style="background-image: url('img/testimonial_1-min.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">CALGARY, AB</h2>
          <p>Appraisal Value: $18,500,000.00<br/>
            Existing 1st Mortage: $528.627.12<br/>
            2nd Morgage: $410,000.00<br/>
            LTV: 50%<br/>
            Rate/Term: 9.99%, 12 Months<br/>
            Amortization: Interest Only<br/>
            Compensation: $7,175.00 (175 BPS) split with referring broker<br/>
            Lender: AP Capital<br/>
            Income: BFS & Part Time Employee (NIQ)<br/>
            Credit: 671 & 749<br/>
            Deal Notes: Refinance of 2nd mortgage to pay off existing/more expensive 2nd & pull funds to pay off a vehicle loan.
          </p>
        </div>
      </div>
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-container" style="background-image: url('img/testimonial_2-min.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">CALGARY, AB</h2>
          <p>Appraisal Value: $18,500,000.00<br/>
            Existing 1st Mortage: $528.627.12<br/>
            2nd Morgage: $410,000.00<br/>
            LTV: 50%<br/>
            Rate/Term: 9.99%, 12 Months<br/>
            Amortization: Interest Only<br/>
            Compensation: $7,175.00 (175 BPS) split with referring broker<br/>
            Lender: AP Capital<br/>
            Income: BFS & Part Time Employee (NIQ)<br/>
            Credit: 671 & 749<br/>
            Deal Notes: Refinance of 2nd mortgage to pay off existing/more expensive 2nd & pull funds to pay off a vechile loan.
          </p>
        </div>
      </div>
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-container" style="background-image: url('img/testimonial_3-min.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">CALGARY, AB</h2>
          <p>Appraisal Value: $18,500,000.00<br/>
            Existing 1st Mortage: $528.627.12<br/>
            2nd Morgage: $410,000.00<br/>
            LTV: 50%<br/>
            Rate/Term: 9.99%, 12 Months<br/>
            Amortization: Interest Only<br/>
            Compensation: $7,175.00 (175 BPS) split with referring broker<br/>
            Lender: AP Capital<br/>
            Income: BFS & Part Time Employee (NIQ)<br/>
            Credit: 671 & 749<br/>
            Deal Notes: Refinance of 2nd mortgage to pay off existing/more expensive 2nd & pull funds to pay off a vechile loan.
          </p>
        </div>
      </div>
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-container" style="background-image: url('img/testimonial_4-min.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">CALGARY, AB</h2>
          <p>Appraisal Value: $18,500,000.00<br/>
            Existing 1st Mortage: $528.627.12<br/>
            2nd Morgage: $410,000.00<br/>
            LTV: 50%<br/>
            Rate/Term: 9.99%, 12 Months<br/>
            Amortization: Interest Only<br/>
            Compensation: $7,175.00 (175 BPS) split with referring broker<br/>
            Lender: AP Capital<br/>
            Income: BFS & Part Time Employee (NIQ)<br/>
            Credit: 671 & 749<br/>
            Deal Notes: Refinance of 2nd mortgage to pay off existing/more expensive 2nd & pull funds to pay off a vechile loan.
          </p>
        </div>
      </div>
    </div>
    <div id="testimonial-row-2" class="row" style="height:320px;">
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-container" style="background-image: url('img/testimonial_5-min.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">CALGARY, AB</h2>
          <p>Appraisal Value: $18,500,000.00<br/>
            Existing 1st Mortage: $528.627.12<br/>
            2nd Morgage: $410,000.00<br/>
            LTV: 50%<br/>
            Rate/Term: 9.99%, 12 Months<br/>
            Amortization: Interest Only<br/>
            Compensation: $7,175.00 (175 BPS) split with referring broker<br/>
            Lender: AP Capital<br/>
            Income: BFS & Part Time Employee (NIQ)<br/>
            Credit: 671 & 749<br/>
            Deal Notes: Refinance of 2nd mortgage to pay off existing/more expensive 2nd & pull funds to pay off a vechile loan.
          </p>
        </div>
      </div>
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-container" style="background-image: url('img/testimonial_6-min.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">CALGARY, AB</h2>
          <p>Appraisal Value: $18,500,000.00<br/>
            Existing 1st Mortage: $528.627.12<br/>
            2nd Morgage: $410,000.00<br/>
            LTV: 50%<br/>
            Rate/Term: 9.99%, 12 Months<br/>
            Amortization: Interest Only<br/>
            Compensation: $7,175.00 (175 BPS) split with referring broker<br/>
            Lender: AP Capital<br/>
            Income: BFS & Part Time Employee (NIQ)<br/>
            Credit: 671 & 749<br/>
            Deal Notes: Refinance of 2nd mortgage to pay off existing/more expensive 2nd & pull funds to pay off a vechile loan.
          </p>
        </div>
      </div>
      <div class="img_wrapper col-3 px-1 h-100">
        <div class="h-100 image-container" style="background-image: url('img/testimonial_7-min.jpg')"></div>
        <div class="img_description h-100 mx-1 p-lg-5 p-3 text-center img_description_text">
          <h2 class="font-weight-bold">CALGARY, AB</h2>
          <p>Appraisal Value: $18,500,000.00<br/>
            Existing 1st Mortage: $528.627.12<br/>
            2nd Morgage: $410,000.00<br/>
            LTV: 50%<br/>
            Rate/Term: 9.99%, 12 Months<br/>
            Amortization: Interest Only<br/>
            Compensation: $7,175.00 (175 BPS) split with referring broker<br/>
            Lender: AP Capital<br/>
            Income: BFS & Part Time Employee (NIQ)<br/>
            Credit: 671 & 749<br/>
            Deal Notes: Refinance of 2nd mortgage to pay off existing/more expensive 2nd & pull funds to pay off a vechile loan.
          </p>
        </div>
      </div>
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

