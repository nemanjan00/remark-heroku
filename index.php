<?php
if($_SERVER['REQUEST_URI'] == "" || $_SERVER['REQUEST_URI'] == "/"){
	header("location: /01-uvod.markdown");
}

$_SERVER['REQUEST_URI'] = htmlentities($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Osnove web tehnologija</title>
		<meta charset="utf-8">
		<style>
			/*@import url(https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz);
			@import url(https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic);
			@import url(https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700,400italic);

			body { font-family: 'Droid Serif'; }
			h1, h2, h3 {
				font-family: 'Yanone Kaffeesatz';
				font-weight: normal;
			}
			.remark-code, .remark-inline-code { font-family: 'Ubuntu Mono'; }*/
		</style>
	</head>
	<body>
		 <textarea id="source">

class: center, middle

# Title

---

# Agenda

1. Introduction
2. Deep-dive
3. ...

---

# Introduction

		</textarea>
		<script src="https://gnab.github.io/remark/downloads/remark-latest.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script>

$.get("https://rawgit.com/nemanjan00/osnove-web-tehnologija/master/<?=$_SERVER['REQUEST_URI'];?>", function(data) {
				$("#source").text(data);
				var slideshow = remark.create();
			});

		</script>
	</body>
</html>
