<?php
// Get URL from query string, otherwise use default
$url = ($_GET["url"]) ? addhttp(htmlspecialchars($_GET["url"])) : 'http://martinbowler.co.uk';

// Add http if protocol is missing
function addhttp($url) {
	if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
		$url = "http://" . $url;
	}
	return $url;
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="no-js">

<head>
	<meta charset="UTF-8">
	<title>jResize, responsive development within one window | toddmotto.com</title>
	<meta name="author" content="@toddmotto">
	
	<!-- CSS -->
	<link rel="stylesheet" href="css/global.css">
	
	<!-- jQuery + JavaScript -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="js/jresize.js"></script>
	
	<!-- Demo Script -->
	<script>
	$(function() {
		$.jResize({
			 viewPortSizes   : ['320px', '480px', '540px', '600px', '768px', '960px', '1024px', '1280px'], // ViewPort Widths
			 backgroundColor : '444', // HEX Code
			 fontColor       : 'FFF' // HEX Code
		});
	});
	</script>
</head>

<body>
	
	<iframe src="<?php echo $url ?>" style="width:100%;display:block;border:0;height:1000px;"></iframe>
	
</body>
</html>