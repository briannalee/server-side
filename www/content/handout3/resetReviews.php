<?php 
$reviews = array(
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

$xmlFile = "./content/handout3/reviews.xml";
createReviewXML($xmlFile,$reviews);

/**
 * Writes provided review(s) to an XML file
 * 
 * @param array $reviews Associative array containing the date, rating (service,cuisine,price) and comments
 * @return void
 */
function createReviewXML($file, $reviews) {
	$writer = new XMLWriter();  
	$writer->openMemory();
	$writer->startDocument('1.0','UTF-8');
	$writer->setIndent(true);
	$writer->startElement('reviews');
	foreach($reviews as $review) {
		$writer->startElement('review');
			$writer->writeAttribute('id',time()+random_int(100,10000));
			$writer->writeElement('date',$review['date']);
			$writer->writeElement('service',$review['service']);
			$writer->writeElement('cuisine',$review['cuisine']);
			$writer->writeElement('price',$review['price']);
			$writer->writeElement('comments',$review['comments']);
		$writer->endElement();
	}
	$writer->endElement();
	$writer->endDocument();  
	
	// Using file_put_contents rather than XMLWriter->OpenURI due to OpenURI needing full non-relative server path
	file_put_contents($file,$writer->outputMemory(true));
}