<?php
/*-----------------------------------------------------------------------------------*/
// THEME OPTIONS - SMOF
// Include theme options panel
/*-----------------------------------------------------------------------------------*/
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