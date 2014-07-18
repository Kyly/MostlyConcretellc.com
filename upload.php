<?php

if (isset($_FILES['files'])){

    // Contains all the file info
    $file = $_FILES['file'];

    // File properties
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    // Get the file extension
    $file_ext = explode('.', file_name);
    $file_ext = strtolower(end(file_ext));

    // PDF is all that were allowing right now it may make sense to add
    // more latter
    $allowed = 'pdf';


}