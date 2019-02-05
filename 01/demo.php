<?php
$theme = "okaidia";
if (isset($_GET['theme'])){
	$theme = $_GET['theme'];
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prism Syntax Highlighting with Line Numbers | Lon Hosford</title>
	<meta name="description" content="Demonstrates Prism Syntax Highlighting with line numbers">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css">

	<link href="../themes/<?php echo $theme?>/prism.css" rel="stylesheet" />

	<link rel="stylesheet" type="text/css" href="base.css">
	<link rel="stylesheet" type="text/css" href="demo.css">

</head>
<body>
	<div id="page">
		<div id="page-heading-section">
			<div id="basic-usage-link"><small><a href="https://prismjs.com/index.html#basic-usage" target="_blank">Prisim Basic Usage</a></small></div>
			<h1>Prism Syntax Highlighter</h1>
			<h2>Theme <?php echo $theme?></h2>
			<div class="center-box center-text color-black"><small><a href="?theme=default" >Default</a>&nbsp;|&nbsp; <a href="?theme=okaidia">Okaidia</a>&nbsp;|&nbsp;<a href="?theme=dark">Dark</a></small></div>
		</div>
		<div id="page-content-section">
			<div id="input-box ">
				Start line number: <input type="number" id="source-code-line-number-start" min="0" max="999"> Language:
				<select id="source-code-language" >
					<option value="html">HTML</option>
					<option value="css">CSS</option>
					<option value="less">LESS</option>
					<option value="sas">SAS</option>
					<option value="js">Javascript</option>
					<option value="jsx">React JSX</option>
					<option value="tsx">React TSX</option>
					<option value="php">PHP</option>
					<option value="sql">SQL</option>
					<option value="json">JSON</option>
					<option value="xml">XML</option>
					<option value="http">HTTP</option>
				</select>
				Font: <input type="number" id="source-code-font" min="1" max="999" value="30">&nbsp;px
				<textarea id="source-code-in" placeholder="Paste source code here"></textarea>
				<input type="button" id="source-code-format" value="Highlight Source Code">
			</div>
<pre id="source-code-out-pre"><code id="source-code-out"></code></pre>
		</div>
	</div>
	<script src="../themes/okaidia/prism.js"></script>
	<script src="demo.js"></script>
</body>
</html>