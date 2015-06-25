<?php

namespace Ald\Scrape\Service\Spider;

class Spider
{
    private $guzzleClient;

    public function __construct(\GuzzleHttp\Client $guzzleClient)
    {
        $this->guzzleClient = $guzzleClient;
    }

    public function run(\DateTime $startAt)
    {
        $mainPage = $this->guzzleClient->get("http://aldcarmarket.com.ua/filter/all/all/all/order/0");
        $doc = new \DOMDocument();
        $doc->preserveWhiteSpace = false;
        $doc->load($mainPage->getBody()->getContents());
        $xpath = new \DOMXPath($doc);
        $query = '//*[@id="bottom-paging"]/ul/li/a';

        $navLinks = $xpath->query($query);
        dump($navLinks);
        foreach ($navLinks as $navLink) {
            dump($navLink);
        }
    }
}
