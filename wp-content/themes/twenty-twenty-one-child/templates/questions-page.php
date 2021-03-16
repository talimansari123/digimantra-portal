<?php
/**
 * Template Name: Questions Page
 * Template Page Type: questions, page
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
<section class="question_section">
	<div class="container bg-white  py-3">
    <form action="">
		   <ol class="questions">
		   <li>Which type of JavaScript language is ___
			   <ol class="ques_options">
				   <li><input type="radio" id="" name="language" value="Object-Oriented"> Object-Oriented</li>
				   <li><input type="radio" id="" name="language" value=" Object-Based"> Object-Based</li>
				   <li><input type="radio" id="" name="language" value="Assembly-language"> Assembly-language</li>
				   <li><input type="radio" id="" name="language" value=" High-level"> High-level</li>
			   </ol>
		   </li>
		   <li>Which one of the following also known as Conditional Expression:
			   <ol class="ques_options">
				   <li><input type="radio" id="" name="Conditional" value=" Alternative to if-else"> Alternative to if-else</li>
				   <li><input type="radio" id="" name="Conditional" value=" Switch statement"> Switch statement</li>
				   <li><input type="radio" id="" name="Conditional" value=" If-then-else statement"> If-then-else statement</li>
				   <li><input type="radio" id="" name="Conditional" value="immediate if"> immediate if</li>
			   </ol>
		   </li>
		   <li>In JavaScript, what is a block of statement?
			   <ol class="ques_options">
				   <li><input type="radio" id="" name="statement" value="Conditional block"> Conditional block</li>
				   <li><input type="radio" id="" name="statement" value="block that combines a number of statements into a single compound statement"> block that combines a number of statements into a single compound statement</li>
				   <li><input type="radio" id="" name="statement" value="both conditional block and a single statement"> both conditional block and a single statement</li>
				   <li><input type="radio" id="" name="statement" value="block that contains a single statement"> block that contains a single statement</li>
			   </ol>
		   </li>
	   </ol>
	   <div class="submit_btn text-center">
		   <button type="submit" class="btn">Submit</button>
	   </div>
	</form>
	</div>
</section>

</main><!-- #site-content -->

