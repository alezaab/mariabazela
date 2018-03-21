<html>
<head>
    </head>
<body>
<form action="aaa.php" method="GET">
<input type="text" name="search">
<input type="submit" value= "Crawl!">


<?php

    $url=$_GET["search"];
    
    if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
    
    function get_links($url) { 

		    $xml = new DOMDocument(); 

		    $internalErrors = libxml_use_internal_errors(true);

		    $xml->loadHTMLFile($url);

		    $links = array(); 

		    foreach($xml->getElementsByTagName('a') as $link) { 
		        echo $link->getAttribute('href'); 
		     	echo ("<br>");
		    } 
		} 

        get_links($url);
  
?>
    

</form>
</body>

</html>

