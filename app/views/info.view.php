<?php require('partials/head.php'); ?>

<body>
<small>General Information</small>
			<div class="divo">
				
				<ul>
						<?php foreach ($user as $nameInfo): ?>
							
						<div class="darker">
								<div class="lighter">
						<li>
							

									<p><em>Documents will be sent to</em> <strong><?= $nameInfo -> name; ?></strong></p>

								
						</li>	
					
						</div>
							</div>
							
					<?php endforeach; ?>

				</ul>
			</div>
			
<?php require('partials/bottom.php'); ?>	