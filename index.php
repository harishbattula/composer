<?php
    include_once __DIR__.'/vendor/autoload.php';
    use MyCrawler\Classes\news;
    $newsdom=new news("https://www.bbc.com/");
    $newslist=$newsdom->get_headlines();
    include 'template\newslist.php';
    