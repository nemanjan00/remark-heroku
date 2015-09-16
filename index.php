<?php
$PROJECT_ROOT = getenv('PROJECT_ROOT');
$PROJECT_MAIN_FILE = getenv('PROJECT_MAIN_FILE');

if($_SERVER['REQUEST_URI'] == "" || $_SERVER['REQUEST_URI'] == "/"){
	header("location: /$PROJECT_MAIN_FILE");
}

$_SERVER['REQUEST_URI'] = htmlentities($_SERVER['REQUEST_URI'])."?".time();
?>
<!DOCTYPE html>
<html>
	<head>
	<title><?=getenv("PAGE_TITLE");?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./style.css">	
	 </head>
	<body>
		 <textarea id="source" style="display:none">	</textarea>
		<script src="https://gnab.github.io/remark/downloads/remark-latest.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script>

			$.get("<?=$PROJECT_ROOT;?>/<?=$_SERVER['REQUEST_URI'];?>", function(data) {
				$("#source").text(data);
				var slideshow = remark.create();
			}).fail(function() {
				window.location = "/";
			});

		</script>
	</body>
</html>
