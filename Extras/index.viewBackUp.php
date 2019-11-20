<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		
		body{
			background-color: #edfed0;
			padding: 0.1em;
		}

		header{
			background-color: #e0d0fe;
			padding: 0.01em;
			text-align: center;
			margin-bottom: 0.25em;
		}

		.section{
			background-color: #afbf93;
			padding: 0.2em;
			margin: 0.5em;
		}

		.divo{
			background-color: #f6eaf7;
			padding: 0.1em;
			text-align: center;
			margin-top: 0.25em;
		}
		li{
			list-style-type: none;
			font-style: Sans-serif;
			font-size: 1.5em;
		}

	</style>
</head>

<body>

	<div class="section">

		<header>
			<h1>

				<?=

				$greet

				?>
				
			</h1>
		</header>

			<div class="divo">
				
				<ul>
					
					<?php foreach ($name as $key => $value): ?>
							
							<li><?= $value; ?></li>
						

					<?php endforeach; ?>


					<?php 

						foreach ($name as $key => $value) {
							# code...
							echo "<li>$value</li>";
						}

					?>


				</ul>
			</div>
		</div>

</body>
</html>