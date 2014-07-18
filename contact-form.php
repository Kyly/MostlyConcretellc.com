<?php
  // Needed to use wp functionality.
  require( '/var/www/html/wp-blog-header.php' );
?>
<<!DOCTYPE html>
<html>
<head>
  <title>Contact Form</title>
</head>
<body>
      <a class="inline" href="#"> Contact Us </a>
        <div id="hidden-form" style="display: none;">

        <div id="form-messages">
        </div><!--#form-messages-->
          <form enctype="multipart/form-data" method="post" id="contact-form" name="contact-form" action="<?php echo get_stylesheet_directory_uri();?>/mailer.php" class="contact-form">
            <div class="field">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" >
            </div>
            <div class="field">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" >
            </div>
            <div class="field">
              <label for="message">Message:</label>
              <textarea id="message" name="message" rows="10" ></textarea>
            </div>
            <br/>
            <div class="field">
              <!--<label for="file" class="file-upload">Type (or select) Filename:</label>-->
              <input type="hidden" name="MAX_FILE_SIZE" value="2500000" />
              <input type="file" id="userfile" name="userfile" />
              <p>You may upload pdf of plans here by selecting file on your computer.<br/>
              <small><b>Note:</b> Files must be pdf's and be less 2 megabytes in size.</small></p>
            </div>
            <br/>
            <div class="field">
              <button type="submit">Send</button>
            </div>
          </form>
        </div>
</body>
</html>