<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		
		body{
			background-color: #520055;
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
		.darker{
			background-color: #180019;
			padding: 0.01em;
			width: 80%;
			margin-left: 10%;
		}
		.lighter{
			background-color: #e7e5ff;
			padding: 0.01em;
			text-align: center;
			margin: 0.05em;
		
		}
		
		.bli{
			color: blue;
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
							
						<li>
							<div class="darker">
								<div class="lighter">

									<strong>Owner</strong> : <strong class='bli'><?= ucwords($parcel["owner"]); ?></strong>

								</div>
							</div>
						</li>

							<li>
							<div class="darker">
								<div class="lighter">

									<strong>Expected Delivery</strong> : <strong class='bli'><?= ucwords($parcel["expected delivery"]); ?></strong>

								</div>
							</div>
						</li>

							<li>
							<div class="darker">
								<div class="lighter">

									<strong>Type</strong> : <strong class='bli'><?= ucwords($parcel["type"]); ?></strong>

								</div>
							</div>
						</li>

							<li>
							<div class="darker">
								<div class="lighter">

									<strong>Delivery Address</strong> : <strong class='bli'><?= ucwords($parcel["delivery address"]); ?></strong>

								</div>
							</div>
						</li>

						
						<li>
							<div class="darker">
								<div class="lighter">

									<strong>Currier</strong> : <strong class='bli'><?= ucwords($parcel["currier"]); ?></strong>

								</div>
							</div>
						</li>


						<li>
							<div class="darker">
								<div class="lighter">

									<strong>Status : </strong>
									<strong class='bli'>

										<?php

										 if($parcel["delivered"]){

										 echo ucwords("<em style='color:green;'> delivered &#9989</em>"); 
										
										} else {

										echo ucwords("<em style='color:red;'> not yet delivered</em>"); 

										} 
										
										?>

									</strong>

								</div>
							</div>
						</li>

				</ul>
			</div>
		</div>

</body>
</html>