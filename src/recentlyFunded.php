<?php
require_once ("header.php");
require_once ("navbar.php")
?>
<div style="height:100%">
  <div class="container-fluid d-flex flex-column justify-content-end imageContainer" style="background-image: url('img/agreement-business.jpg');">
  </div>
  <div class="container">
     <div class="text-center">
        <h1 class="font-theme font-weight-bold px-5 pt-5">RECENTLY FUNDED</h1>
      </div>
  </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner carousel-class">
      <div class="img_wrapper carousel-item carousel-class active">
        <img class="d-block image-container carousel-class" src="img/recentlyFunded/SFDSurrey.jpg" alt="First slide">
        <div class="img_description p-lg-5 p-3 text-center img_description_text carousel-class">
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
      <div class="img_wrapper carousel-item carousel-class">
        <img class="d-block image-container carousel-class" src="img/recentlyFunded/condoLangley.jpg" alt="Second slide">
        <div class="img_description p-lg-5 p-3 text-center img_description_text carousel-class">
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
      <div class="img_wrapper carousel-item carousel-class">
        <img class="d-block image-container carousel-class" src="img/recentlyFunded/multiplexKitimatBC.jpg" alt="Fifth slide">
        <div class="img_description p-lg-5 p-3 text-center img_description_text carousel-class">
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
      <div class="img_wrapper carousel-item carousel-class">
        <img class="d-block image-container carousel-class" src="img/recentlyFunded/commercialOfficeSpaceBC.jpg" alt="Sixth slide">
        <div class="img_description p-lg-5 p-3 text-center img_description_text carousel-class">
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
      <div class="img_wrapper carousel-item carousel-class">
        <img class="d-block image-container carousel-class" src="img/recentlyFunded/townHouseProject.jpg" alt="Seventh slide">
        <div class="img_description p-lg-5 p-3 text-center img_description_text carousel-class">
          <h2 class="font-weight-bold">North Vancouver, BC</h2>
          <p>Property & Location : North Vancouver,BC<br/>
            First Mortgage 8,200,000<br/>
            LTV: 80%<br/>
            Fee: $63,000<br/>
            Location: North Vancouver<br/>
            Income: Qualified<br/>
            Cons: Large Construction Project, Market slowing down, not a single lender financing projects at 80% conventionally or non Conventionally. Funded in 8 weeks at purchase completion
          </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container d-flex flex-column justify-content-center pb-5 w-50">
    <h5 class="text-center font-weight-bold">
      Have a deal you would like to submit?
      Or in need of a mortgage for a home.
      Fill out our quick form & The B Team will respond to you within 4 hours.
    </h5>
    <a class="btn w-75 btn-theme btn-square ml-auto mr-auto" href="submissionForm.php">Apply Now</a>
  </div>
<?php
require_once ("footer.php")
?>
</div>
