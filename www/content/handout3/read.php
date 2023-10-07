<?php
/**
 * Reads the review data from an XML file
 */
function readReviewsXML()
{
  $reviews = simplexml_load_file("./content/handout3/ratings.xml") or die("Error: Cannot create read XML file");
  echo "<table class='table'>
          <thead>
            <th scope='col'>Review Date</th>
            <th scope='col'>Service</th>
            <th scope='col'>Cuisine</th>
            <th scope='col'>Price</th>
            <th scope='col'>Comments</th>
          </thead>
          <tbody>";

  foreach($reviews->children() as $review) {
    echo "<tr>
            <th scope='row'>".date('m-d-y',(int)$review->date)."</th>
            <td>$review->service</td>
            <td>$review->cuisine</td>
            <td>$review->price</td>
            <td>$review->comments</td>
          </tr>";
  }
  echo "</tbody>
        </table>";
}
