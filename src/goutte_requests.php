<?php
 # web to scrape: https://books.toscrape.com/
require 'vendor/autoload.php';
$httpClient = new \Goutte\Client();
$response = $httpClient->request('GET','https://books.toscrape.com/');
$titles = $response->evaluate('//ol[@class="row"]//li//article//h3/a');
$prices = $response->evaluate('//ol[@class="row"]//li//article//div[@class="product_price"]//p[@class="price_color"]');
// Store prices into an array
$priceArray = [];
foreach ($prices as $key  => $price) {
    $priceArray[] = $price->textContent;
}
// extract the titles and display them with the titles
foreach ($titles as $key => $title) {
    echo $title->textContent . ' @ '. $priceArray[$key] . PHP_EOL;
}