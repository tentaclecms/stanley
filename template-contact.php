<?
/*
Name: Contact
*/

theme::part('partials/header', array( 'title'=>'Contact')); ?>

	<div class="container pt">

		<div class="row mt">
			<div class="lg-6 lg-offset-3 centered">
				<h3>CONTACT ME</h3>
			</div>
		</div>

		<div class="row mt">	
			<div class="lg-8 lg-offset-2">
				<form role="form">
				  <div class="form-group">
				    <input type="name" class="form-control" id="NameInputEmail1" placeholder="Your Name">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				    <br>
				  </div>
				  <div class="form-group">
				    <input type="email" class="form-control" id="subjectEmail1" placeholder="Subject">
				    <br>
				  </div>
				  <textarea class="form-control" rows="6" placeholder="Enter your text here"></textarea>
				    <br>
				  <button type="submit" class="btn btn-success">SUBMIT</button>
				</form>    			
			</div>
		</div>

	</div>
	
<? theme::part('partials/footer') ?>