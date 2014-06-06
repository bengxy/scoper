<?php
/* get 淘宝内容，将之储存到类数组中*/

$tb_data=array();
$tb_list = array();
$engine_url="http://s.taobao.com/search?style=grid";

$search_url=$engine_url."&q=".$input."&s=".($page-1)*40;
$tb_page = file_get_contents($search_url);
$trans_page = iconv('GBK','UTF-8//IGNORE',$tb_page);
$doc = phpQuery::newDocument($trans_page);
$package = pq('div.item');

for($i=0;$i<$package->length;$i++){
	$tb_data[$i] = new man_info();	
	$tempname = $package->eq($i)->find('h3.summary')->find('a')->text();
//TODO: 字符串的截取  缩短
	$tempname = trim($tempname);
	if(mb_strlen($tempname, 'UTF-8')>60){		
		$tb_data[$i]->name = mb_substr($tempname, 0, 40, 'UTF-8').'......';
	}
	else{
		$tb_data[$i]->name = $tempname;
	}
	$tb_data[$i]->refer = $package->eq($i)->find('h3.summary')->find('a')->attr('href');
	$tb_data[$i]->pic_url = $package->eq($i)->find('div.pic')->find('img')->attr('data-ks-lazyload');

	
	preg_match('!\d+\.\d+!', $package->eq($i)->find('div.price')->html(), $temp_price);
	$tb_data[$i]->price = $temp_price[0];
	$tb_data[$i]->price_old = $package->eq($i)->find('div.origin-price')->html();
	$tb_data[$i]->place_info = $package->eq($i)->find('div.col.end.loc')->html();
	$tb_data[$i]->trans_pay = $package->eq($i)->find('div.shipping')->html();
	$tb_data[$i]->source = '淘宝';
}
?>