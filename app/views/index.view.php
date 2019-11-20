<!DOCTYPE html>
<html>
<?php require('partials/head.php'); ?>

<body>

	<div class="section">


		<?php require('partials/indexNav.php'); ?>

			<small>Parcel And Delivery Information</small>
			<div class="divo">
				
				<ul>
						
					<?php foreach ($parcel as $parcelInfo): ?>
							
					<div class="darkest">		
						<li>
							<div class="darker">
								<div class="lighter">

									<strong>Owner : </strong><strong class='bli'><?= $parcelInfo -> owner; ?></strong>

								</div>
							</div>
						</li>	

						<li>
							<div class="darker">
								<div class="lighter">

									<strong>Expected Delivery : </strong><strong class='bli'><?= $parcelInfo -> expected_delivery; ?></strong>

								</div>
							</div>
						</li>	

						<li>
							<div class="darker">
								<div class="lighter">

									<strong>Type : </strong><strong class='bli'><?= $parcelInfo -> type; ?></strong>

								</div>
							</div>
						</li>	

						<li>
							<div class="darker">
								<div class="lighter">

									<strong>Delivery Address : </strong><strong class='bli'><?= $parcelInfo -> delivery_address; ?></strong>

								</div>
							</div>
						</li>	

						<li>
							<div class="darker">
								<div class="lighter">

									<strong>Currier : </strong><strong class='bli'><?= $parcelInfo -> currier; ?></strong>

								</div>
							</div>
						</li>	

						<li>
							<div class="darker">
								<div class="lighter">

									<strong>Status : </strong>
									<strong class='bli'>

										<?php if($parcelInfo -> delivered) : ?>

										 <em style='color:green;'> Delivered &#9989</em> 
										
										<?php else : ?>

										<em style='color:red;'> Not Yet Delivered</em>
										
										<?php endif; ?>

									</strong>

								</div>
							</div>
						</li>	
					</div>

					

					<?php endforeach; ?>	

				</ul>
			</div>
			
<?php require('partials/bottom.php'); ?>