<?php
/* get 亚马逊内容，将之储存到类数组中*/

$amz_data=array();
$amazon_list = array();
$engine_url="http://www.amazon.cn/s?";

$search_url=$engine_url."&keywords=".$input."&page=".$page;
$amazon_page = file_get_contents($search_url);
$doc = phpQuery::newDocument($amazon_page);
$package = pq('div.prod.celwidget');
for($i=0;$i<$package->length;$i++){
	$amz_data[$i] = new man_info();
	$tempname = $package->eq($i)->find('h3.newaps')->find('a')->find('span.lrg')->html();
	$tempname = trim($tempname);
	if(mb_strlen($tempname, 'utf-8')>60){
		$amz_data[$i]->name = mb_substr($tempname, 0, 36, 'UTF-8').'......';
	}
	else{
		$amz_data[$i]->name = $tempname;	
	}
	$amz_data[$i]->refer = $package->eq($i)->find('h3.newaps')->find('a')->attr('href');
	$amz_data[$i]->pic_url = $package->eq($i)->find('div.imageBox')->find('img')->attr('src');
	preg_match('!\d+\.\d+!', $package->eq($i)->find('span.bld.lrg.red')->html(), $temp_price);
	if($temp_price != null){
		$amz_data[$i]->price = $temp_price[0];
	}
	else{
		$amz_data[$i]->price = 0;
	}	
	preg_match('!\d+\.\d+!', $package->eq($i)->find('del.grey')->html(), $temp_price);
	if($temp_price != null){
		$amz_data[$i]->price_old = $temp_price[0];
	}	
	if($package->eq($i)->find('span.avblity')->html())
		$amz_data[$i]->place_info = '今或明送达';

	//$tb_data[$i]->trans_pay = $package->eq($i)->find('div.shipping')->html();
	$amz_data[$i]->source = '亚马逊';
}
?>