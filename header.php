<header>
	<h1 style="text-shadow: 1px 1px 3px white;"><b>Omnes Sport</b></h1>

	<div id="nav">

		<ul>
			<li><a href="Accueil.php">Accueil</a></li>
			<li><a href="#">Tout Parcourir</a>
				<ul>
					<li id="test"><a href="activite.php">Activités sportives</a>
						<ul>
							<li><a href="musculation.php">Musculation</a></li>
							<li><a href="fitness.php">Fitness</a></li>
							<li><a href="biking.php">Biking</a></li>
							<li><a href="cardio.php">Cardio-Training</a></li>
							<li><a href="collectif.php">Cours Collectifs</a></li>
						</ul>
					</li>
					<li id="test"><a href="compet.php">Les Sports de compétition</a>
						<ul>
							<li><a href="basket.php">Basketball</a></li>
							<li><a href="football.php">Football</a></li>
							<li><a href="rugby.php">Rugby</a></li>
							<li><a href="tennis.php">Tennis</a></li>
							<li><a href="natation.php">Natation</a></li>
							<li><a href="plongeon.php">Plongeon</a></li>
						</ul>
					</li>
					<li id="test"><a href="salle.php">Salle de sport Omnes</a>
						<ul>
							<li><a href="reservation_ring_boxe.php">Ring de boxe</a></li>
							<li><a href="terrain_tennis.php">Terrain de tennis</a></li>
						</ul>
					</li>
				</ul>
				<li>
					<a href="#" data-popup-ref="monPopup">Recherche</a>

					<div class="popup" data-popup-id="monPopup">
						<div class="popup-content">

							<div class="popup-body">
								<div class="col-md-12 col-lg-5 align-self-center mb-3">
									<form action="recherche.php" method="post" class="form-inline">
										<div class="input-group">
											<input id="recherche" type="search" name="q" class="form-control" placeholder="Spécialité ou Nom ou Etablissement">
											<div class="input-group-btn">
												<button id="searchbtn" type="submit" class="btn btn-info"><span class="fa fa-search"></span>
													Chercher
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div> 
					</div>

				</li>
				<li><a href="rdv.php">Rendez-vous</a></li>
				<li><a href="loginsuccess.php">Votre Compte</a></li>
			<!-- 
				<li id="login"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>  tester avec session pour remplacer et tt
			-->
		</ul>

	</div>
</header>