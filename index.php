<?php
    require_once 'PageCrawler.php';

    $crawler = new PageCrawler();
    
    $region_urls = $crawler->getRegionURLS();

    foreach($region_urls as $url){
        $data = $crawler->getPoliceStationsByURL($url);

        $url = substr($url, 0, -1);
        $pos = strrpos($url, '/');
        $region_name = $pos === false ? $url : substr($url, $pos + 1);

        file_put_contents($region_name.'.txt', json_encode($data));
        print("Data for '$region_name' scraped successfully"."<br/>");
    }
?>