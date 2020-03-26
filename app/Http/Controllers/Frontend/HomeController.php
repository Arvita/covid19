<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;


class HomeController extends Controller
{
	private $data=array();
	public function index()
    {	
    	$home = 'active';
		$client = new Client(HttpClient::create(['timeout' => 60]));
		$crawler = $client->request('GET', 'https://www.worldometers.info/coronavirus/country/indonesia/');
		// Get the latest post in this category and display the titles
		$crawler->filter('.maincounter-number')->each(function ($node) {
			// print $node->text()."\n";
			array_push($this->data, $node->text());
		});
		$dt = array();
		foreach ($this->data as $key) {
			array_push($dt,$key);
		}
        return view('frontend/home',compact('home','dt'));
    }
}
