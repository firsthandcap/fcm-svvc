
		<div id="main-wrapper">
				<div class="container">
					<div class="row 200%">
						<!-- Sidebar -->
							<div id="sidebar" class="3u">
								
                                  <?php 
									 if ($_SERVER["QUERY_STRING"] == ""){
										echo "&nbsp;";
									} 	
									
									elseif ($_SERVER["QUERY_STRING"] == "fuseaction=invest.main"){
										echo "<section>
													<ul class='style1'>
													  <li class='first'>Shareholder Services</li>
													  <li><a href='index.php?fuseaction=invest.login'>Account Access</a></li>
													  <li><a href='index.php?fuseaction=invest.trades'>Placing a Trade</a></li>
													  <li><a href='index.php?fuseaction=invest.cef'>Closed-End Funds</a></li>
													  <li><a href='index.php?fuseaction=invest.faq'>FAQs</a></li>
												  </ul>
													";
									}
								
									elseif ($_SERVER["QUERY_STRING"] == "fuseaction=invest.trades"){
										echo "<section>
													<ul class='style1'>
													  <li class='first'><a href='index.php?fuseaction=invest.main'>Shareholder Services</a></li>
													  <li><a href='index.php?fuseaction=invest.login'>Account Access</a></li>
													  <li>Placing a Trade</li>
													  <li><a href='index.php?fuseaction=invest.cef'>Closed-End Funds</a></li>
													  <li><a href='index.php?fuseaction=invest.faq'>FAQs</a></li>
												  </ul>
												  ";
												  }
									elseif ($_SERVER["QUERY_STRING"] == "fuseaction=invest.cef"){
										echo "<section>
													<ul class='style1'>
													  <li class='first'><a href='index.php?fuseaction=invest.main'>Shareholder Services</a></li>
													  <li><a href='index.php?fuseaction=invest.login'>Account Access</a></li>
													  <li><a href='index.php?fuseaction=invest.trades'>Placing a Trade</a></li>
													  <li>Closed-End Funds</li>
													  <li><a href='index.php?fuseaction=invest.faq'>FAQs</a></li>
												  </ul>
												  ";
												  }	
									 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=invest.faq"){
										echo "<section>
													<ul class='style1'>
													  <li class='first'><a href='index.php?fuseaction=invest.main'>Shareholder Services</a></li>
													  <li><a href='index.php?fuseaction=invest.login'>Account Access</a></li>
													  <li><a href='index.php?fuseaction=invest.trades'>Placing a Trade</a></li>
													  <li><a href='index.php?fuseaction=invest.cef'>Closed-End Funds</a></li>
													  <li>FAQs</li>
												  </ul>
												  ";
												  }			  
									elseif ($_SERVER["QUERY_STRING"] == "fuseaction=invest.login"){
										echo "<section>
													<ul class='style1'>
													  <li class='first'><a href='index.php?fuseaction=invest.main'>Shareholder Services</a></li>
													  <li>Account Access</li>
													  <li><a href='index.php?fuseaction=invest.trades'>Placing a Trade</a></li>
													  <li><a href='index.php?fuseaction=invest.cef'>Closed-End Funds</a></li>
													  <li><a href='index.php?fuseaction=invest.faq'>FAQs</a></li>
												  </ul>
												  ";
												  }		  
											  
									  else {
										echo "Investors";
									}
									?>    
                                
								</section>
							</div>
							<!---OPENING AND CLOSING DIV IN SUBFILES--->
								<?php print trim($Fusebox["layout"]); ?>
						</div>
					</div>

			</div>
