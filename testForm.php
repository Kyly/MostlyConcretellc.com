<html>
    <body>
        <form enctype="multipart/form-data" name="testF" id="testF" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="field">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="field">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="field">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="20"></textarea>
            </div>
            <br/>
            <div class="field">
                <input type="hidden" name="MAX_FILE_SIZE" value="2500000" />
                <!--<label for="file" class="file-upload">Type (or select) Filename:</label>-->
                <input id="tfile" type="file" name="tfile">
                <p>You may upload pdf of plans here by selecting file on your computer.<br/>
                <small><b>Note:</b> Files must be pdf's and be less 2 megabytes in size.</small></p>
            </div>
            <br/>
            <div class="field">
                <button type="submit" name="sub" id="sub" value="upload">Sub</button>
            </div>
        </form>
        <?php
        if(isset($_POST['sub']))
        {
            echo("Sub clicked, got in!");
            echo("<br />");
            print_r($_FILES['tfile']);
        }
        ?>
    </body>
</html>