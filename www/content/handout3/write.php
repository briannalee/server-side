<?php
$ratings = array(
	'0'=> array(
		'date'			=> 	mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")),
		'service' 	=>	'5',
		'cuisine' 	=> 	'5',
		'price'			=> 	'5',
		'comments' 	=>	'Great Service'
		),
	'1' => array(
		'date'			=> 	mktime(0, 0, 0, date("m")  , date("d")-5, date("Y")),
		'service' 	=>	'2',
		'cuisine' 	=> 	'4',
		'price'			=> 	'4',
		'comments' 	=>	'Food was good but service was slow'
	),
	'2' => array(
		'date'			=> 	mktime(0, 0, 0, date("m")  , date("d")-4, date("Y")),
		'service' 	=>	'1',
		'cuisine' 	=> 	'1',
		'price'			=> 	'1',
		'comments' 	=>	'Horrible experience'
	)
);
//$file = fopen('./content/handout3/ratings.xml','w');
$writer = new XMLWriter();  
//$writer->openURI('file:///content/handout3/ratings.xml');  
$writer->openMemory();
$writer->startDocument('1.0','UTF-8');
$writer->setIndent(true);
$writer->startElement('ratings');
foreach($ratings as $rating) {
	$writer->startElement('review');
		$writer->writeElement('date',$rating['date']);
		$writer->writeElement('service',$rating['service']);
		$writer->writeElement('cuisine',$rating['cuisine']);
		$writer->writeElement('price',$rating['price']);
		$writer->writeElement('comments',$rating['comments']);
	$writer->endElement();
}
$writer->endElement();
$writer->endDocument();  
file_put_contents('./content/handout3/ratings.xml',$writer->outputMemory(true));
