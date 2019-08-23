<?php include('includes/header.php'); ?>

<div class="contact">
	<div class="col-12 pl-0 pr-0 mb-5">
		<div id="map"></div>
	</div>
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-4 mb-3 d-md-none">
				<h1 class="mb-4">Kontakt</h1>
				<ul class="nav flex-column">
				  <li class="nav-item mb-2">
				    <span class="font-weight-bold mr-3">Adresa:</span><span>Kaplara Momčila Gavrića, 12/6, Beograd</span>
				  </li>
				  <li class="nav-item mb-2">
				    <span class="font-weight-bold mr-3">Email:</span><span>info@npamedical.rs</span>
				  </li>
				  <li class="nav-item mb-2">
				    <span class="font-weight-bold mr-3">Telefon:</span><span>011 555 - 555</span>
				  </li>
				</ul>
			</div>
			<div class="col-md-8 pt-4">
				<h1 class="mb-4">Pošaljite nam Poruku</h1>
				<form>
					<div class="row form-group mb-0">
						<div class="col">
							<input type="text" name="contact_name" class="form-control" placeholder="Ime" required>
						</div>
						<div class="col">
							<input type="text" name="contact_email" class="form-control" placeholder="Email" required>
						</div>
					</div>
					<div class="col pl-0 pr-0">
						<textarea type="text"  rows="12" cols="70" name="contact_message"  class="form-control mt-3" placeholder="Poruka" required></textarea>
						<button type="submit" class="btn btn-info btn-lg mt-3" id="custombutton">Pošalji</button>
					</div>
				</form>
			</div>
			<div class="col-md-4 pl-5 pt-4 d-md-block d-sm-none d-none bg-light contactInfo">
				<h1 class="mb-4">Kontakt</h1>
				<ul class="nav flex-column mb-4">
				  <li class="nav-item mb-2">
				    <span class="font-weight-bold mr-3">Adresa:</span><span>Kaplara Momčila Gavrića, 12/7, Naselje Stepa Stepanović 11010 Beograd</span>
				  </li>
				  <li class="nav-item mb-2">
				    <span class="font-weight-bold mr-3">Telefon:</span><span>011 555 - 555</span><br><span>066 971 9978</span>
				  </li>
				  <li class="nav-item mb-2">
				    <span class="font-weight-bold mr-3">Email:</span><span></span>
				  </li>
				</ul>
				<h1 class="mb-4">Radno vreme</h1>
				<ul class="nav flex-column">
				  <li class="nav-item mb-2">
				    <span class="font-weight-bold mr-3">Ponedeljak - Petak</span><span>10h - 17h</span>
				  </li>
				  <li class="nav-item mb-2">
				    <span class="font-weight-bold mr-3">Subota</span><span>10h - 14h</span>
				  </li>
				  <li class="nav-item mb-2">
				    <span class="font-weight-bold mr-3">Nedelja:</span><span>Ne radimo</span>
				  </li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php include('includes/footer.php'); ?>