<div id="main-wrapper">

<!-- Main -->
    <div id="main" class="container">
			<div class="row 200%">
            
                  <?php 
                   if ($_SERVER["QUERY_STRING"] == ""){
                      echo "&nbsp;";
                  } 	
                  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=fund.main"){
                      echo "<div id='sidebar' class='3u'><section>
                                <ul class='style1'>
                                    <li class='first'>Performance</li>
                                    <li><a href='index.php?fuseaction=fund.statistics'>Statistics</a></li>
                                    <li><a href='index.php?fuseaction=companies.main'>Portfolio</a></li>
                                    <li><a href='index.php?fuseaction=fund.distributions'>Distributions</a></li>
                                    <li><a href='index.php?fuseaction=fund.milestones'>Milestones</a></li>
                                </ul>
							
                                  ";
                  }
                  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=fund.statistics"){
                      echo "<div id='sidebar' class='3u'><section>
                                <ul class='style1'>
                                    <li class='first'><a href='index.php?fuseaction=fund.main'>Performance</a></li>
                                    <li>Statistics</a></li>

                                    <li><a href='index.php?fuseaction=companies.main'>Portfolio</a></li>
                                    <li><a href='index.php?fuseaction=fund.distributions'>Distributions</a></li>
                                    <li><a href='index.php?fuseaction=fund.milestones'>Milestones</a></li>
                                </ul>
                                  ";
                  }
                  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=fund.distributions"){
                      echo "<div id='sidebar' class='3u'><section>
                                <ul class='style1'>
                                  	<li class='first'><a href='index.php?fuseaction=fund.main'>Performance</a></li>
                                    <li><a href='index.php?fuseaction=fund.statistics'>Statistics</a></li>

                                    <li><a href='index.php?fuseaction=companies.main'>Portfolio</a></li>
                                    <li>Distributions</li>
                                    <li><a href='index.php?fuseaction=fund.milestones'>Milestones</a></li>
                                </ul>
                                  ";
                  }

				   
                  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=fund.milestones"){
                      echo "<div id='sidebar' class='3u'><section>
                                <ul class='style1'>
                                    <li class='first'><a href='index.php?fuseaction=fund.main'>Performance</a></li>
                                    <li><a href='index.php?fuseaction=fund.statistics'>Statistics</a></li>

                                    <li><a href='index.php?fuseaction=companies.main'>Portfolio</a></li>
                                    <li><a href='index.php?fuseaction=fund.distributions'>Distributions</a></li>
                                    <li>Milestones</li>
                                </ul>
                                  ";
                  }
				    elseif ($_SERVER["QUERY_STRING"] == "fuseaction=fund.discount"){
                      echo "<div id='sidebar' class='3u'><section>
                                <ul class='style1'>
                                  	<li class='first'><a href='index.php?fuseaction=fund.main'>Performance</a></li>
                                    <li><a href='index.php?fuseaction=fund.statistics'>Statistics</a></li>

									<li><a href='index.php?fuseaction=companies.main'>Portfolio</a></li>
                                    <li><a href='index.php?fuseaction=fund.distributions'>Distributions</a></li>
                                    <li><a href='index.php?fuseaction=fund.milestones'>Milestones</a></li>
                                </ul>
									<h2>Exits and IPOs</h2>
						<ul class='style1a'>
							<li><p>Read more about individual exits.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.exits' class='button'>Learn More</a>
                                  ";
                  }
				 
              
                    else {
                      echo "Fund";
                  }
                  ?>    
                    </section>
                </div>
                    <?php print trim($Fusebox["layout"]); ?>
            </div>
        </div>
    </div>
</div>


				  <!---
				    elseif ($_SERVER["QUERY_STRING"] == "fuseaction=fund.realizations"){
                      echo "<div id='sidebar' class='3u'><section>
                                <ul class='style1'>
                                  	<li class='first'><a href='index.php?fuseaction=fund.main'>Performance</a></li>
                                    <li><a href='index.php?fuseaction=fund.statistics'>Statistics</a></li>
									 <li>Return on Exits</li>
                                    <li><a href='index.php?fuseaction=companies.main'>Portfolio</a></li>
                                    <li><a href='index.php?fuseaction=fund.distributions'>Distributions</a></li>
                                    <li><a href='index.php?fuseaction=fund.milestones'>Milestones</a></li>
                                </ul>
									<h2>Exits and IPOs</h2>
						<ul class='style1a'>
							<li><p>Read more about individual exits.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.exits' class='button'>Learn More</a>
                                  ";
                  }
				  --->
