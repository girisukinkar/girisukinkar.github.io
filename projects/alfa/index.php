<?php include'head.php'; ?>
<?php include'navigation.php'; ?>


<!-- CAROUSEL 0-->
<div id="carouselExampleIndicators" class="carousel slide" style="margin-top:1.5cm;" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/banner1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/banner3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--CAROUSEL 1-->
<div class="jumbotron" style="background-color: #ffc150">
<div class="container-fluid">


	<div class="row">
	<div class="col-lg-12">
	<center>
		<h1 class="display-1" style="color:white;">Alfa makes life better</h1>


		<br>
		<h4 style="color: black;">We help you Unlock profits- by streamlining your business processes, ease the management of your business & reduce your operating costs!</h4>
		<br>
		</center>
		</div>
		</div>
	</div>
</div>




<div class="container">

			<h3 class="text-center" style="color: orange;">For companies of all shapes and sizes – from one man brands to large multinationals.</h3>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Small Business Needs. <span class="text-muted">1 to 5 Employees</span></h2>
          <p class="lead">Small businesses benefit from our services by outsourcing their call answering, back office and administrative work. You do not need to employ full time staff for these jobs. This ensures continuity of your work and you pay only fraction of the costs.</p>
        </div>
        <div class="col-md-5">

          <center><img class="featurette-image img-fluid mx-auto" src="images/small business.svg" height="100" width="200" alt="Generic placeholder image"></center>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Medium Business Needs. <span class="text-muted">6 to 50 Employees</span></h2>
          <p class="lead">Medium Businesses benefit from our services by outsourcing their customer call centre, administrative, back office, telemarketing, survey, follow-ups, support and tailored made solutions. Customer satisfaction and quality of service is at par or sometimes better for our clients what they get from the on-shore service providers.</p>
        </div>
        <div class="col-md-5 order-md-1">

        <center>  <img class="featurette-image img-fluid mx-auto" src="images/medium business.svg" height="150" width="200" alt="Generic placeholder image"></center>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">.
          <h2 class="featurette-heading">Large Business Needs. <span class="text-muted">50+ Employees</span></h2>
          <p class="lead">Large Businesses usually require tailor made solutions. We work with many large companies for their customer service, technical support, back office administration requirements. Customer follow-up & cross selling to existing customer base are very popular services we provide to many of our larger clients.</p>
        </div>
        <div class="col-md-5">
        <center>  <img class="featurette-image img-fluid mx-auto" src="images/large business.svg" height="250" width="200" alt="Generic placeholder image"></center>
        </div>
      </div>


      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
</div>





<!-- FORM 0 -->
<br>

	<div class="container">
	<div class="jumbotron" style="background-color:#B366F4;color:white;">
	<h1 class="display-4 text-center">
	REQUEST QUOTE
</h1>
<p class="lead">Please fill the contact form here and our senior management will be in touch with you within the next 24 hours. Submit the contact form or email: info@alfakpo.com</p>
<hr>

	<form>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">Name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Girish" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Email</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="gsukinkar@gmail.com" required>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">State</label>
      <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Zip</label>
      <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-md-12 mb-3">
  <label> Comment</label>
 <textarea class="form-control" rows="5" id="comment"></textarea>

  </div>

  </div>

  <center><button class="btn btn-primary" type="submit">Submit form</button></center>
</form>
<!-- FORM 1-->
</div>
</div>





<?php include'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>