<?php
/**
 * Template Name: Front Page
 * Template Page Type: front, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
<section class="banner_section">
	<div class="container">
		<div class="banner_wrapper">
			<div class="banner_logo">
				<img src="http://localhost/digimantra-portal/wp-content/uploads/2021/03/logo-min.png" alt="">
			</div>
			<div class="banner_content">
				<h3>Sample Test</h3>
				<p>By DigiMantra</p>
			</div>
		</div>
	</div>
</section>
<section class="clock_section">
	<div class="container bg-white">
		<div class="clock_wrapper">
			<div class="minuts">
                 <div class="clock_img">
					 <img src="http://localhost/digimantra-portal/wp-content/uploads/2021/03/timer.svg" alt="timer">
				 </div>
				 <div class="clock_content">
					 <h5>15 Minutes</h5>
					 <p>to take this assessment</p>
				 </div>
			</div>
			<div class="problems">
                 <div class="clock_img">
					 <img src="http://localhost/digimantra-portal/wp-content/uploads/2021/03/problems.svg" alt="problems">
				 </div>
				 <div class="clock_content">
					 <h5>3</h5>
					 <p>problems to be solved</p>
				 </div>
			</div>
		</div>
	</div>
</section>
<section class="confirm_form">
	<div class="container bg-white">
		<div class="confirm_form_wrap">
		    <p>Please enter some details to proceed.</p>
			<form>
				<div class="confirm_input">
					<input type="text" placeholder="First name">
				</div>
				<div class="confirm_input">
					<input type="text" placeholder="Last name">
				</div>
				<div  class="confirm_input">
					<input type="email" placeholder="Email id">
				</div>
				<div  class="confirm_input">
					<input type="number" placeholder="Phone">
				</div>
				<div  class="confirm_checkbox"><input type="checkbox" ><label>
					By proceeding, you are agreeing to our<a href="#"> Terms of Service</a> and <a href="#">Privacy Policy.</a></label></div>
				<div class="confirm_btn">
					<button type="submit">confirm and proceed <i class="fas fa-arrow-right"></i></button>
				</div>
			</form>

		</div>
	</div>
</section>


</main><!-- #site-content -->

