<?php 
require('phpQuery.php');
$engine_url = "http://s.taobao.com/search?style=grid";
$input = "php";
$search_url = "http://s.taobao.com/search?style=grid&q=".$input."&s=0";
echo $search_url.'<br />';
$tb_page = file_get_contents($search_url);
$trans_page = iconv('GBK','UTF-8//IGNORE',$tb_page);
$doc = phpQuery::newDocument($trans_page);
$package = pq('div.item');
$url = $package->eq(0)->find('h3.summary')->find('a')->attr('href');
echo $url;
echo '<br />';
echo '<a href="'.$url.'" target="blank">LINK</a>';
?>