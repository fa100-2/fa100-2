
<?php
   
  // Specifying directory
  $mydir = '/';
 
  // Scanning files in a given directory in ascending order
  $myfiles = scandir($mydir);
 
  // Displaying the files in the directory
  print_r($myfiles);
?>
