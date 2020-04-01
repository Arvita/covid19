<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;


class HomeController extends Controller
{
	private $dataIndo=array();
	private $dataJember=array();
	public function index()
    {	
    	$home = 'active';
		// Data Indonesia
		$clientIndo = new Client(HttpClient::create(['timeout' => 60]));
		$crawlerIndo = $clientIndo->request('GET', 'https://www.worldometers.info/coronavirus/country/indonesia/');
		// Get the latest post in this category and display the titles
		$crawlerIndo->filter('.maincounter-number')->each(function ($node) {
			// print $node->text()."\n";
			array_push($this->dataIndo, $node->text());
		});
		$dt = array();
		foreach ($this->dataIndo as $key) {
			array_push($dt,$key);
		}

		// Data Jember
		$clientJember = new Client(HttpClient::create(['timeout' => 60]));
		$crawlerJember = $clientJember->request('GET', 'http://www.jemberkab.go.id/data-covid-19/');
		// Get the latest post in this category and display the titles
		$crawlerJember->filter('h1')->each(function ($node) {
			array_push($this->dataJember, $node->text());
		});
		if (count($this->dataJember)==0) {
			array_push($dt, 0);
			array_push($dt, 0);
			array_push($dt, 0);
			array_push($dt, 0);
		} else {
			foreach ($this->dataJember as $key) {
			array_push($dt,$key);
			}
		}
        return view('frontend/home',compact('home','dt'));
    }
}
