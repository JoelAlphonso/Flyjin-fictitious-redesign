<?php get_header(); ?>


	<div class="wrapper">
						<h1>FEATURED DRINKS</h1>
						<div class="featSec">
							<div class='featDrinks'>
								<img src='<?php bloginfo("template_url"); ?>/img/feat-img1.png' alt='Be Cool'>
								<p><span class='gris'>CAMPFIRE MARGARITA</span>: Sauza 100% bleu agave, cointreau thé fumé hickory, jus de lime frais, guimauves.</p>
							</div>
							<div class='featDrinks'>
								<img src='<?php bloginfo("template_url"); ?>/img/feat-img2.png' alt='Be Hot'>
								<p><span class='gris'>FLYJIN TONIC</span>: Bombay Sapphire East, campari, sirop tonic maison, soda, amers.</p>
							</div>
							<div class='featDrinks'>
								<img src='<?php bloginfo("template_url"); ?>/img/feat-img3.png' alt='Be Fresh'>
								<p><span class='gris'>SOUS-VITE</span>: Belvedere pamplemousse, St-Germain, poire asiatique, citron, bulles.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="bgGris">
					<section class="toBottom">
						<div id='Breathalyzer'>

							<h1>Breathalyzer</h1>

							<form id='form1'>
								<div>
									<input type="radio" name="sex" value="male" id='male' checked>Male
									<input type="radio" name="sex" value="female" id='female'>Female
								</div>
								<input placeholder="Weight(kg)" min="0" step="1" type="number" name="weight" class='txtBox' id='weight'>
								<br>
								<input placeholder="Number of Drinks" min="0" step="1" type="number" name="drinks"  class='txtBox' id='drinks'>
								<br>
							</form>
							<article>
								<h2>Percent of Alcohol in your blood:</h2>
								<h2 id='ready'>Results</h2>
								<h2 id='bouton'>Submit</h2>
							</article>
						</div>
						<div id='menuProposition'>
							<ul>
								<li><a href='menu.html'>SEE THE FOOD MENU</a></li><br>
								<li><a href='menu.html'>SEE THE DRINKS MENU</a></li>
							</ul>
						</div>
						
					</section>
				</div>
					<!-- </div>
				</div> -->
			</section>

				

			<section class="page-2 section">
				<div class="content-window" >
					<div data-type="background" data-speed="2">
						<div class='slider parallax'>
							<div class="slide" id="slide-1">
								<h1>THINGS ARE NOT WHAT THEY SEEM...</h1>
								<h2>Be in the know by consulting our events</h2>
							</div>
							
						</div>
					</div>
				</div>

			</section>
			
			<section class="page-3 section">
				<div class='bgBlanc'>
					<h1>EVENTS TO COME</h1>
					<div>
						<a href='events.html'><img src='img/banniere1.jpg' alt='Events2Come'/></a>
					</div>
				</div>
				<div class='bgGris'>
					<div id='reservation'>
						<h1>Reservation</h1>
						<form id='form2'>

							<div>
								<img class='icoReservation' src='<?php bloginfo("template_url"); ?>/img/icon-calendar.svg' alt='date'/>
								<input placeholder="12/12/2012" type="text" name="date" class='txtBox' id='date'>
							</div>
							<div>
								<img class='icoReservation' src='<?php bloginfo("template_url"); ?>/img/icon-clock.svg' alt='time'/>
								<input placeholder="12:12" type="text" name="time" class='txtBox' id='time'>
							</div>
							<div>
								<img class='icoReservation' src='<?php bloginfo("template_url"); ?>/img/icon-person.svg' alt='people'/>
								<input placeholder="2 Persons" type="text" name="people" class='txtBox' id='people'>
							</div>
						</form>
					</div>
					<div id='Eventbystyle'>
						<h1>Event by Style</h1>
						<form id='form3'>
							<div>

								<select name="styleMusic">
									<option value="Music">Music Style</option>
									<option value="rnb">RNB</option>
									<option value="rock">Rock</option>
									<option value="techno">Techno</option>
									<option value="hardcore">Hardcore</option>
									<option value="techno">Metal</option>
									<option value="techno">Classic</option>
									<option value="wubwub">Dubstep</option>
									<option value="classic">Classic</option>
									<option value="reggae">Reggae</option>
								</select></div><span>OR</span><div>
								<select name="favDJ">
									<option value="Music">Favorite DJ</option>
									<option value="dj1">DJ1</option>
									<option value="dj2">DJ2</option>
									<option value="dj3">DJ3</option>
									<option value="dj4">DJ4</option>
								</select>
							</div>
						</form>
					</div>
				</div>
			</section>

<?php get_footer(); ?>