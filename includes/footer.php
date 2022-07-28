<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
<!-- Footer -->
		<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">A PROPOS</h5>
						<p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="far fa-envelope"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Avez-vous des questions?</h6>
										<p><a href="#">Loremipsum.com</a></p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-phone-volume"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p><a href="#">+XX (0) XX XX-XXXX-XXXX</a></p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">&thinsp;&thinsp;DERNIERES MISES A JOUR</h5>
						<ul class="recent-post">
							<li>
								<label class="mr-3">1<br><span>AUG</span></label>
								<span>&thinsp;&thinsp;&thinsp;Ajout d'un footer</span>
							</li>
						</ul>
					</div>


       
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                    
     
                        <h5 class="mb-4 font-weight-bold">Resaux sociaux</h5>
						<ul class="social-pet mt-4">
							<li><a href="https://fr-fr.facebook.com/" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/?lang=fr" title="twitter"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/?hl=fr" title="instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>
					
                    <?php 
          if(isset($_SESSION['auth'])){
            ?>
                <div class="social">
						<h5 class="mb-4 font-weight-bold">RECEVOIR LA NEWSLETTER</h5>
						<form class="form-group" method="POST">
						<div class="input-group">
						  	<input type="email" class="form-control" name="mail" placeholder="Entrez votre Email">
                              <button class="btn btn-primary" type="submit" name="validate">Répondre</button>
						</div>
        </form>
        </div>
        <?php
          }
        ?>
				</div>
			</div>
		</footer>
		<!-- Copyright -->
		<section class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center text-white">
							&copy; 2022 Question/Réponse
						</div>
					</div>
				</div>
			</div>
		</section>