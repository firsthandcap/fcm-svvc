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
													<li><a href='index.php?fuseaction=press.news'>Latest News</a></li>
													 <li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
													
													
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.financials"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'>Press Releases</li>
													<li><a href='index.php?fuseaction=press.news'>Latest News</a></li> 
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
													
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.other"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'>Press Releases</li>
													<li><a href='index.php?fuseaction=press.news'>Latest News</a></li> 
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
												
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
						 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.media"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'>Press Releases</li>
													<li><a href='index.php?fuseaction=press.news'>Latest News</a></li> 
													<li><span class='current'><a href='index.php?fuseaction=press.media'>Recent Media</a></span></li>
													
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								    elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.distributions"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'>Press Releases</li>
													<li><a href='index.php?fuseaction=press.news'>Latest News</a></li> 
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
												
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								    elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.news"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.main'>Press Releases</a></li>
													 <li class='first'><span class='current'><a href='index.php?fuseaction=press.news'>Latest News</a></span></li>
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
												
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								    elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.homepage1"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.main'>Press Releases</a></li>
													 <li class='first'><span class='current'><a href='index.php?fuseaction=press.news'>Latest News</a></span></li>
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
													
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								    elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.nutanix"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.main'>Press Releases</a></li>
													 <li class='first'><span class='current'><a href='index.php?fuseaction=press.news'>Latest News</a></span></li>
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
													
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								    elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.tapad"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.main'>Press Releases</a></li>
													 <li class='first'><span class='current'><a href='index.php?fuseaction=press.news'>Latest News</a></span></li>
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
													
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								    elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.sunrun_ipo"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.main'>Press Releases</a></li>
													 <li class='first'><span class='current'><a href='index.php?fuseaction=press.news'>Latest News</a></span></li>
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
													
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								   elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.vufine"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.main'>Press Releases</a></li>
													 <li class='first'><span class='current'><a href='index.php?fuseaction=press.news'>Latest News</a></span></li>
														<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
													
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								
								   elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.shareholder_letter"){
									  echo "<div id='sidebar' class='4u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.main'>Press Releases</a></li>
													<li><a href='index.php?fuseaction=press.news'>Latest News</a></li> 
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
													
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
							
								    elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.meeting"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.news'>Press Releases</a></li>
													<li><a href='index.php?fuseaction=press.news'>Latest News</a></li> 
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
												
													<li><a href='index.php?fuseaction=press.email'>E-Mail Alerts</a></li>
												</ul>";
								  }
								   elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.email"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.main'>Press Releases</a></li>
													<li><a href='index.php?fuseaction=press.news'>Latest News</a></li> 
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
													
													<li>E-Mail Alerts</li>
												</ul>";
								  }
								     elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.shareholder_letter_2016"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.main'>Press Releases</a></li>
													<li><a href='index.php?fuseaction=press.news'>Latest News</a></li> 
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
												
													<li>E-Mail Alerts</li>
												</ul>";
								  }
								   elseif ($_SERVER["QUERY_STRING"] == "fuseaction=press.confirm_email"){
									  echo "<div id='sidebar' class='3u'><section>
												  <ul class='style1'>
													<li class='first'><a href='index.php?fuseaction=press.main'>Press Releases</a></li>
													<li><a href='index.php?fuseaction=press.news'>Latest News</a></li> 
													<li><a href='index.php?fuseaction=press.media'>Recent Media</a></li>
													
													<li>E-Mail Alerts</li>
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
