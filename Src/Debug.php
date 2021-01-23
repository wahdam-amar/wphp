<?php

namespace App;

class Debug  
{
    public static function debug($arr,$hidden=false)
	{
		if ($hidden) {
			$pre="<pre id='hidden' style='display:none'>";
		}else{
			$pre="<pre>";
		}

		echo $pre;
			print_r($arr);
		echo "</pre>";
	}

	public static function console($data) 
	{
	    echo "<script>console.log(" . json_encode($data) . ");</script>";
	}

	public static function consoleTable($data)
	{
	    echo "<script>console.table(" . json_encode($data) . ");</script>";	
	}
}
