<?php

/**
 * Outputs review data from a DOMDocument element to a table
 * 
 * @param DOMDocument $dom DOMDocument element containing review data
 * @param Bool $editMode Switch to enable edit mode on the table
 * @return String Returns the table string
 */
function outputReviewsTable($dom, $editMode)
{
  $returnString = "<table class='table table-striped table-hover'>
          <thead>
            <th scope='col'>Review Date</th>
            <th scope='col'>Service</th>
            <th scope='col'>Cuisine</th>
            <th scope='col'>Price</th>
            <th scope='col'>Comments</th>
            ";
  if ($editMode) $returnString .= "<th scope='col'>Actions</th>";

  $returnString .= "</thead>
          <tbody>";

  $reviews = $dom->getElementsByTagName('review');

  foreach ($reviews as $review) {
    $id = $review->getAttribute('id');
    $date = date('m-d-y', (int)$review->getElementsByTagName('date')->item(0)->nodeValue);
    $service = $review->getElementsByTagName('service')->item(0)->nodeValue;
    $cuisine = $review->getElementsByTagName('cuisine')->item(0)->nodeValue;
    $price = $review->getElementsByTagName('price')->item(0)->nodeValue;
    $comments = $review->getElementsByTagName('comments')->item(0)->nodeValue;

    $returnString .= "<tr id='" . $id . "'>
            <th scope='row'>$date</th>
            <td>$service</td>
            <td>$cuisine</td>
            <td>$price</td>
            <td>$comments</td>
            ";
    if ($editMode) {
      $returnString .= "<td>
              <button type='button' class='btn btn-danger btn-sm' onclick='deleteReview($id)'>
                Delete
              </button>
            </td>";
    }
    $returnString .= "</tr>";
  }
  $returnString .= "</tbody>
        </table>";

  return $returnString;
}

/**
 * Function to read XML from a file and return a DOMDocument object
 * @param String $filename Filename to read XML from
 */
function readXMLFromFile($filename)
{
  $dom = new DOMDocument();
  $dom->load($filename);
  return $dom;
}

/**
 * Add XML elements based on an associative array and return the modified DOM object
 * 
 * @param DOMDocument $dom XML DOMDocument to modify
 * @param String $parent Parent element to add this new element to
 * @param String $elementName Name of new element to be added
 * @param Array $data Associative array to be added to the XML 
 * @return DOMDocument Returns modified DOMDocument XML
 */
function addXMLElements($dom, $parent, $elementName, $data)
{
  $parentElements = $dom->getElementsByTagName($parent);
  $dom->formatOutput = true;
  if ($parentElements->length > 0) {
    $parentElement = $parentElements->item(0);

    // Create enclosing element
    $newElement = $dom->createElement($elementName);
    $newElement->setAttribute('id', time() + random_int(10, 1000));

    // Create a new element for each key-value pair in the array
    foreach ($data as $key => $value) {
      $newChildElement = $dom->createElement($key, $value);
      $newElement->appendChild($newChildElement);
    }

    // Append the new element to the parent element
    $parentElement->appendChild($newElement);
  } else {
    // Parent element not found
    throw new Exception("Error adding XML element, parent element not found.", 1);
  }

  // Format XML for humans
  $dom->preserveWhiteSpace = false;
  $dom->loadXML($dom->saveXML(), LIBXML_NOBLANKS);
  $dom->formatOutput = true;

  return $dom; // Return the modified DOM object
}

/**
 * Delete an existing element from DOMDocument object based on attribute value
 * 
 * @param DOMDocument $dom XML DOMDocument object
 * @param String $attributeName Name of the attribute to check
 * @param String $attributeValue Value of the attribute to match
 * @return DOMDocument Modified DOMDocument
 */
function deleteElementByAttribute($dom, $attributeName, $attributeValue)
{
  $xpath = new DOMXPath($dom);

  // Find elements with the specified attribute and value
  $elementsToDelete = $xpath->query("//review[@$attributeName='$attributeValue']");

  // Reverse loop to avoid issues when deleting elements from the DOMDocument
  for ($i = $elementsToDelete->length - 1; $i >= 0; $i--) {
    $element = $elementsToDelete->item($i);
    $element->parentNode->removeChild($element);
  }
  // Format XML for humans
  $dom->preserveWhiteSpace = false;
  $dom->loadXML($dom->saveXML(), LIBXML_NOBLANKS);
  $dom->formatOutput = true;
  
  return $dom;
}
