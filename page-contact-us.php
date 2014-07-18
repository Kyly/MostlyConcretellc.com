<?php get_header();?>
<div id="primary" class="site-content">
  <div id="content" role="main">
    <?php while (have_posts()):the_post();?>
    <article id="post-<?php the_ID();?>" <?php post_class();
      ?>>
      <header class="entry-header">
        <h1 class="entry-title"><?php the_title();?></h1>
      </header>
      <div class="entry-content">
        <?php the_content();?>
        <a class="inline" href="#"> Contact Us </a>

<!--//////////////// Hidden Contact Form ///////////////////////////////////-->
        <div id="hidden-form" style="display: none;">
          <div id='form-wrapper'>
            <div id="form-messages">
            </div><!--#form-messages-->
            <form enctype="multipart/form-data" method="post" id="contact-form" name="contact-form" action="<?php echo get_stylesheet_directory_uri();?>/mailer.php" class="contact-form">
              <p>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" >
              </p>
              <p>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" >
              </p>
              <p>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="10" ></textarea>
              </p>
              <br/>
              <p>
                <!--<label for="file" class="file-upload">Type (or select) Filename:</label>-->
                <input type="hidden" name="MAX_FILE_SIZE" value="2500000" />
                <input type="file" id="userfile" name="userfile" />
                <p>You may upload pdf of plans here by selecting file on your computer.<br/>
                <small><b>Note:</b> Files must be pdf's and be less 2 megabytes in size.</small></p>
              </p>
                <div id="form-message-bottom"></div>
              <p>
                <button type="submit">Send</button>
              </p>
            </form>
          </div> <!-- form-wrapper -->
        </div> <!-- hidden-form -->
<!--//////////////// Hidden Contact Form END ///////////////////////////////-->

          </div><!-- entry-content -->
          </article><!-- #post -->
          <?php endwhile;// end of the loop. ?>
          </div><!-- #content -->
          </div><!-- #primary -->
          <?php get_footer();?>