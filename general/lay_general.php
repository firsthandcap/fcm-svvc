
		<div id="main-wrapper">
				<div class="container">
					<div class="row 200%">
						<!-- Sidebar -->
							
								
                                  <?php 
				 if ($_SERVER["QUERY_STRING"] == ""){
					echo "&nbsp;";
				} 	
				
				elseif ($_SERVER["QUERY_STRING"] == "fuseaction=general.main"){
					echo "<div id='sidebar' class='3u'><section>
						  	  <ul class='style1'>
								  <li class='first'><span class='current'><a href='index.php?fuseaction=general.main'>Contact Us</a></span></li>
								  <li><a href='index.php?fuseaction=general.legal'>Legal Notices</a></li>
								    <li><a href='index.php?fuseaction=general.disclosure'>Additional Disclosure</a></li>
								  <li><a href='index.php?fuseaction=general.privacy'>Privacy Notice</a></li>
							  </ul>
						  		";
				}
			
				elseif ($_SERVER["QUERY_STRING"] == "fuseaction=general.privacy"){
					echo "<div id='sidebar' class='4u'><section>
						  	  <ul class='style1'>
								  <li class='first'><a href='index.php?fuseaction=general.main'>Contact Us</a></li>
								  <li><a href='index.php?fuseaction=general.legal'>Legal Notices</a></li>
								    <li><a href='index.php?fuseaction=general.disclosure'>Additional Disclosure</a></li>
								  <li><span class='current'><a href='index.php?fuseaction=general.privacy'>Privacy Notice</a></span></li>
							  </ul>
							  ";
				}
				
				elseif ($_SERVER["QUERY_STRING"] == "fuseaction=general.legal"){
					echo "<div id='sidebar' class='4u'><section>
						  	  <ul class='style1'>
								  <li class='first'><a href='index.php?fuseaction=general.main'>Contact Us</a></li>
								  <li><span class='current'><a href='index.php?fuseaction=general.legal'>Legal Notices</a></span></li>
								   <li><a href='index.php?fuseaction=general.disclosure'>Additional Disclosure</a></li>
								  <li><a href='index.php?fuseaction=general.privacy'>Privacy Notice</a></li>
							  </ul>";
				}
							elseif ($_SERVER["QUERY_STRING"] == "fuseaction=general.disclosure"){
					echo "<div id='sidebar' class='4u'><section>
						  	  <ul class='style1'>
								  <li class='first'><a href='index.php?fuseaction=general.main'>Contact Us</a></li>
								  <li><a href='index.php?fuseaction=general.legal'>Legal Notices</a></li>
								  <li><span class='current'><a href='index.php?fuseaction=general.disclosure'>Additional Disclosure</a></span></li>
								  <li><a href='index.php?fuseaction=general.privacy'>Privacy Notice</a></li>
							  </ul>";
				}
			
				
			
			
                  else {
					echo "General";
				}
				?>    
                                
                                
								</section>
							</div>
								<?php print trim($Fusebox["layout"]); ?>
							
						</div>
					</div>

			</div>
