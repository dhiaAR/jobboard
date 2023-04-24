<?php
// Load the XML file into a DOM document
$xml = new DOMDocument();
$xml->load("./jobs.xml");

// Load the XSL file into a DOM document
$xsl = new DOMDocument();
$xsl->load("jobs.xsl");

// Create a new XSLT processor and import the XSL file
$processor = new XSLTProcessor();
$processor->importStylesheet($xsl);

// Transform the XML document using the XSLT processor
$html = $processor->transformToXML($xml);

// Output the HTML
echo $html;
?>
