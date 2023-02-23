<?php
/* example_1.php - Example for the Image_Toolbox class
 *
 * That's the simplest example I can think of.
 * Puts out a 500x300 red-colored jpeg file to the browser
 *
 * @author Martin Theimer <pappkamerad@decoded.net>
 */
require_once ('Image_Toolbox.class.php');

$img = new Image_Toolbox(500, 300, '#FF0000');
$img->output();
?>