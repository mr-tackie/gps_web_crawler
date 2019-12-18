<?php
require_once 'vendor/autoload.php';
use Goutte\Client;

class PageCrawler{
    private $crawler;
    private $client;
    
    public function __construct(){
        $this->client = new Client();
        $this->crawler = $this->client->request('GET', 'https://police.gov.gh/en/index.php/police_stations/');
    }

    public function getRegionURLS(){
        return $this->crawler->filter('.wpb_wrapper > ul > li > a')->extract(array('href'));
    }

    public function getPoliceStationsByURL($url){
        $temp_crawler = $this->client->request('GET', $url);
        $data = array();

        $callback = function($node)use(&$data){
            $name = $node->filter('.title')->text();
            $phone_number = $node->filter('ul li:nth-child(2)')->text();
            $longitude = $node->attr('data-lng');
            $latitude = $node->attr('data-lat');
            $data[] = array("name" => $name, "longitude" => $longitude, "latitude" => $latitude, "phone_number" => $phone_number);
        };

        $temp_crawler->filter('.item')->each($callback);
        return $data;
    }
}
?>