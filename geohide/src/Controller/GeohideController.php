<?php
/**
 * @file
 * Contains Drupal\geohide\Controller\GeohideController.
 */
namespace Drupal\geohide\Controller;
class GeohideController {
	function getIP() {
	    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    } elseif (! empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
	    {
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    } else {
	        $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    return new response($ip);
	}
}

