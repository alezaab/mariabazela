<html>
<head>
<body>
<from action="" method="GET">
<input type="text" name= "search">
<input type="submit" value= "Crawl!">
</from>

<?php

    $url=$_GET["search"];
    
    if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
    
  
?>
</body>
</head>
</html>

