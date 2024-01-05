# Web-Scraping-with-PHP

## Description 
This application it's a web scraper.<br />

This app uses Guzzle, Goutte, Simple HTML DOM, and the headless browser Symfony Panther.
<br />
We will be scraping the [Books to Scrape website](https://pages.github.com/).

## Getting Started

### Prerequisites

Here's what you need to be able to run this project:
* PHP >=7.4
* Composer

## 1. Clone the repository
```
git clone https://github.com/DamperDoor56/Web-Scraping-with-PHP.git

cd Web-Scraping-with-PHP
```

## 2. Install composer dependencies

```
composer install
```

## 3. Initiate the scripts
```
php src/guzzle_requests.php

php src/goutte_requests.php

php src/goutte_css_requests.php

php src/simplehtmldom_requests.php

php src/panther_requests.php
```