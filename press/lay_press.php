			<div id="main-wrapper">
				<div class="container">
					<div class="row 200%">
					
						
						<!-- Sidebar --->
							
								
                                  <?php 
								   if ($_SERVER["QUERY_STRING"] == ""){
									  echo "&nbsp;";
								  } 	
								  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.main"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'>Press Releases</li>
												</ul>";
								  }
									else {
									  echo "Press";
								  }
								  ?>  
								</section>
							</div>
							
								<?php print trim($Fusebox["layout"]); ?>
							</div>
						</div>
					</div>

			</div>
