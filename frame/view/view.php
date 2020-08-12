<?php
class View{
	function __construct($url){
		if (isset($url)) {
			require_once $url;
		}
	}
}