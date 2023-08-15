<?php
print("Please specify the name of the file to delete");
print("<p>");
$file=$_GET['filename'];
system("rm $file");
?>

/*
 * The following request and response is an example of a successful attack:
 * 
 *      Request http://127.0.0.1/delete.php?filename=bob.txt;id
 * 
 * Response
 *
 *      Please specify the name of the file to delete
 *      uid=33(www-data) gid=33(www-data) groups=33(www-data)
 *
 * Sanitizing Input
 *      Replace or Ban arguments with “;"
 * 
 * Other shell escapes available
 *      Example:
 *      –  &&
 *      –  |
 *      –  ...
*/
