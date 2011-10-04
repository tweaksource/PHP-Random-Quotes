<?php

// define the name of XML the file
$quote_file = "quotes.xml";

// load file
$xml = simplexml_load_file($quote_file) or die ("Error: Unable to load XML file!");

// instantiate a  mutli-dimensional array
$list = array();

// access XML data and push each quote into the array
foreach ($xml->quote as $quote)
{
	array_push($list, array($quote->quote,$quote->author));
}

// get size of array and generate a reandom number between 0 and the list size -1
$size = count($list);
$selection = rand(0,$size-1);

// echo out the selected quote and author
// I typically echo a <div> first so that it can be styled
echo "<div id='quote'>";
echo $list[$selection][0];
echo "<br />";
echo $list[$selection][1];
echo "</div><!-- end of quote div -->";

?> 
