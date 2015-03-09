<?php include 'includes/main_header.php'; ?>

<!-- START Page Body -->

<!--Chapter Page BODY-->
<p class="tophead-center">Multiple Chapters Found</p>

<p>As it turns out, some zip codes overlap into seperate Chapters.  In your case, "<?php echo $_GET["zip"]; ?>" is spread between the <a href="<?php echo $_GET['ChapterA']; ?>.html"><?php echo $_GET['ChapterA']; ?></a> and <a href="<?php echo $_GET['ChapterB']; ?>.html"><?php echo $_GET['ChapterB']; ?></a> Chapters.  If this has narrowed it down enough for you to figure out where you belong, click on your chapter below.  Otherwise, use the Contact Form to send us a message - we'll sort things out and get back to you.</p>

<ul>
<li><a href="<?php echo $_GET['ChapterA']; ?>"><?php echo $_GET['ChapterA']; ?></a></li>
<li><a href="<?php echo $_GET['ChapterB']; ?>"><?php echo $_GET['ChapterB']; ?></a></li>
</ul>

<!--Chapter Not Found Contact Form-->
<p class="subhead-center">Help Me!</p>

<form class="form-horizontal" method="post" action="cgi-bin/findchapter_contactform_engine.php">
	<div class="control-group success">
		<label class="control-label" for="Name">Name</label>
		<div class="controls">
      			<input class="input-xlarge" type="text" name="Name" placeholder="Name">
    		</div>
	</div>
	<div class="control-group success">
		<label class="control-label" for="Email">Email</label>
		<div class="controls">
      			<input class="input-xlarge" type="email" name="Email" placeholder="address@example.com">
    		</div>
	</div>
	<div class="control-group success">
		<label class="control-label" for="Unit">Unit</label>
		<div class="controls">
      			<input class="input-xlarge" type="text" name="Unit" placeholder="Unit">
    		</div>
	</div>
	<div class="control-group success">
		<label class="control-label" for="Zipcode">Zipcode</label>
		<div class="controls">
      			<input class="input-xlarge" type="text" name="Zipcode" value="<?php echo $_GET["zip"]; ?>">
    		</div>
	</div>
	<div class="control-group success">
		<label class="control-label" for="Message">Message</label>
		<div class="controls">
      			<textarea class="input-xlarge" rows="5" name="Message" placeholder="Message"></textarea>
    		</div>
	</div>
	
	<div class="form-actions">
		<input type="submit" name="submit" value="Send Message" class="btn btn-success" />
	</div>
</form>
<!--END Chapter Not Found Contact Form-->
<!--END Chapter Page BODY-->

<!--END Page Body -->
<?php include 'includes/main_footer.php'; ?>
