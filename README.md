# gps_web_crawler
A simple PHP web scraper using the Goutte Library

## Introduction
I needed information about police stations for another side project so I decided to write this simple web scraper to pull police
station information from the Ghana police website (https://police.gov.gh)

## Requirements
1. PHP 5+
2. Composer

## Installation
1. Clone this repository `git clone https://github.com/mr-tackie/gps_web_crawler` or download a zip file to your project location
2. Run composer install to install the required packages. Alternatively you can copy the `PageCrawler.php` file and run `composer install fabpot/goutte`

## Usage
To use this package, import it into your php script. 
Initialize a new crawler like `$crawler = new PageCrawler();`
The `PageCrawler` class offers two methods `$crawler->getRegionURLS()` and `$crawler->getPoliceStationsByURL($url)`

| Function      | Description |
|---------------|-------------|
|`getRegionURLS`| Returns an array of urls to be crawled to get police stations in each region|
|`getPoliceStaionsByURL`| Returns an array of police stations for a specified region with phone number and geographic coordinates| 


## Credits
Ghana Police Service - https://police.gov.gh
Goutte - https://github.com/FriendsOfPHP/Goutte

## Contact information
Twitter - <a href = 'https://twitter.com/_tackie_'>@_tackie_</a>

## License
MIT
