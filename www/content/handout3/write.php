<?php
$ratings = array(
	'0'=> array(
		'service' 	=>	'5',
		'cuisine' 	=> 	'5',
		'price'			=> 	'5',
		'comments' 	=>	'Great Service'
		),
	'1' => array(
		'service' 	=>	'2',
		'cuisine' 	=> 	'4',
		'price'			=> 	'4',
		'comments' 	=>	'Food was good but service was slow'
	),
	'2' => array(
		'service' 	=>	'1',
		'cuisine' 	=> 	'1',
		'price'			=> 	'1',
		'comments' 	=>	'Horrible experience'
	)
);
//$file = fopen('./content/handout3/ratings.xml','w');
$xml = new SimpleXMLElement('<ratings></ratings>');
foreach($ratings as $rating) {
	$xml->addChild('service',$rating['service']);
	$xml->addChild('cuisine',$rating['cuisine']);
	$xml->addChild('price',$rating['price']);
	$xml->addChild('comments',$rating['comments']);
}
file_put_contents('./content/handout3/ratings.xml',$xml->saveXML());


