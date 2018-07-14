<?php include'head.php'; ?>
<?php include 'navigation.php'; ?>
<style>
body{
background-color:#D3D3D3;
}
.display-1{
margin-top:1cm;
text-align:center;
}

@media(max-width:768px){
.display-1{
font-size: 250%;
}
}
</style>
<br><br>


<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15077.613661966581!2d72.8371691!3d19.1338107!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x68e16b69df50fc42!2sALFA+KPO+Pvt.+Ltd!5e0!3m2!1sen!2sin!4v1503764522138" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<br><br>
<div class="jumbotron" style="margin-top:-1cm;">
<div class="container">
<form class="container" id="needs-validation" novalidate>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="" required>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Query</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
  </div>
</div>
<br>

</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  "use strict";
  window.addEventListener("load", function() {
    var form = document.getElementById("needs-validation");
    form.addEventListener("submit", function(event) {
      if (form.checkValidity() == false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add("was-validated");
    }, false);
  }, false);
}());
</script>
</div>
<div class="container">

  <button class="btn btn-primary" type="submit">Submit</button>
</div>
</div>
<div class="container">
<h1 class="display-1">info@alfakpo.com</h1>
</div>
</div>
<footer class="footer">

<div class="footer-distributed">

			<div class="footer-left">

				<h3>Alfa<span>KPO</span></h3>

				<p class="footer-links">
					High quality IT professionals at your service.
				</p>

				<p class="footer-company-name">Company Name &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>301, Woodrow Business Park</span>Andheri West</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Follow us on Social Media</span>
					</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>
		</div>

		</footer>













<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>