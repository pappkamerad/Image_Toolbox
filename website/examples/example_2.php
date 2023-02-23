<?php
/* example_2.php - Example for the Image_Toolbox class
 *
 * loads a jpeg picturefile from disk, resizes it to a
 * new width of 100 pixels while preserving the correct
 * aspectratio of the original picture (new height will be
 * calculated) and saves it as a new thumbnail picture
 * in png format. (8-bit png)
 *
 * @author Martin Theimer <pappkamerad@decoded.net>
 */
require_once ('Image_Toolbox.class.php');

$img = new Image_Toolbox('pictures/mybabe_01.jpg');
$img->newOutputSize(100, 0);
$img->save('thumbs/thumb-mybabe_01.png', 'png8');
?>