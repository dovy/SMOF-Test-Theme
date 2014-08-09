<?php

/**
This file was not meant not to replace your functions.php file. 
Just copy and paste the codes below into your own functions.php file.
*/

/**
 * Slightly Modified Options Framework
 */
require_once ('admin/index.php');

/*-----------------------------------------------------------------------------------*/
// PRETTYPRINT
// this function is for development purpose only. the theme can work without it 100%
/*-----------------------------------------------------------------------------------*/
function smk_ppprint($var)
{
	echo "<pre>";
	print_r($var);
	echo "</pre>"; 
}