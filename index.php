<?php
$page = $_GET['load'];
?>
<html>
	<head>
		<title>ENDTERM - Home Page</title>
		  <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	<div id="jazz">
  <h1>ENDTERM EXAM</h1>
     </div>
		<div id="container">
		<div id="header"></div>
		<div id="menuBar">
			<ul>
				<li><a href="index.php?load=page1">Menu</a></li>
				<li><a href="index.php?load=page2">Stock</a></li>
				<li><a href="index.php?load=page3">Category</a></li>
				<li><a href="index.php?load=page4">Stock Inventory</a></li>
				<li><a href="index.php?load=page5">Receiving</a></li>
				<li><a href="index.php?load=page6">Releasing</a></li>
				<li><a href="index.php?load=page7">Delete Record</a></li>
				<li><a href="index.php?load=page8">Web Services</a></li>
			</ul>
			<?php
				switch($page)
				{
					case 'page1': require_once 'menu.php';
					break;

					case 'page2': require_once 'stock.php';
					break;

					case 'page3': require_once 'category.php';
					break;

					case 'page4': require_once 'stockIn.php';
					break;

					case 'page5': require_once 'receive.php';
					break;
					
					case 'page6': require_once 'release.php';
					break;
					
					case 'page7': require_once 'deleteR.php';
					break;
					
					case 'page8': require_once 'webService.php';
					break;

					default: require_once 'index.php' ;
					break;
				}
			?>
		</div>
	</body>
</html>