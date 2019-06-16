<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
    	<div class="row">
    			<h1>contact us</h1>
    	</div>
    	<div class="row">
    			<h4 style="text-align:center">We'd love to hear from you!</h4>
    	</div>
      <form class="contact-form" action="contactform.php" method="post">
    	<div class="row input-container">
    			<div class="col-xs-12">
    				<div class="styled-input wide">
    					<input type="text" name="name" required />
    					<label>Name</label>
    				</div>
    			</div>
    			<div class="col-md-6 col-sm-12">
    				<div class="styled-input">
    					<input type="text" name="mail" required />
    					<label>Email</label>
    				</div>
    			</div>
    			<div class="col-md-6 col-sm-12">
    				<div class="styled-input" style="float:right;">
    					<input type="text" name="subject" required />
    					<label>Subject</label>
    				</div>
    			</div>
    			<div class="col-xs-12">
    				<div class="styled-input wide">
    					<textarea required name="message" ></textarea>
    					<label>Message</label>
    				</div>
    			</div>
    			<div class="col-xs-12">
            <button class="btn-lrg submit-btn" type="submit" name="submit">Send Mail</button>

    			</div>
    	</div>
      </form>
    </div>

  </body>
</html>
