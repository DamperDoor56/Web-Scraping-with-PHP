<?php
# scraping books to scrape: https://books.toscrape.com/
require 'vendor/autoload.php';
$httpClient = new \Goutte\Client();
$response = $httpClient->request('GET', 'https://books.toscrape.com/');
// get prices into an array
$prices = [];
$response->filter('.row li article div.product_price p.price_color')->each(function ($node) use (&$prices) {
    $prices[] = $node->text();
});
// echo titles and prices
$priceIndex = 0;
$response->filter('.row li article h3 a')->each(function ($node) use (&$prices, &$priceIndex) {
    echo $node->text() . ' @ ' . $prices[$priceIndex] .PHP_EOL;
    $priceIndex++;
});
