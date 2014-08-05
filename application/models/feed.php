<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feed extends CI_Model {


public function __construct()
{

}

public function get_feed()
	{

		//read-feed-simpleXML.php
		//our simplest example of consuming an RSS feed

		  $request = "http://news.google.com/?output=rss";
		  $response = file_get_contents($request);
		  $xml = simplexml_load_string($response);
		  return $xml;
			
	}
}




