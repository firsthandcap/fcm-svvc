
<div id="main-wrapper">
    <div class="container">
        <div class="row 200%">
            <!-- Sidebar -->
                <div id="sidebar" class="3u">
                        
                          <?php 
         if ($_SERVER["QUERY_STRING"] == ""){
            echo "&nbsp;";
        } 	
        
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=about.main"){
            echo "<section>
                        <ul class='style1'>
                          <li class='first'>Company Background</li>
                          <li><a href='index.php?fuseaction=about.kevin'>Our Team</a></li>
                          <li><a href='index.php?fuseaction=about.process'>Our Process</a></li>
                          <li><a href='index.php?fuseaction=about.governance'>Governance</a></li>
                          <li><a href='index.php?fuseaction=about.filings'>Filings</a></li>
                      </ul>
                        ";
        }
    
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=about.kevin"){
            echo "<section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=about.main'>Company Background</a></li>
                          <li>Our Team</li>
                          <li><a href='index.php?fuseaction=about.process'>Our Process</a></li>
                          <li><a href='index.php?fuseaction=about.governance'>Governance</a></li>
                          <li><a href='index.php?fuseaction=about.filings'>Filings</a></li>
                      </ul>
                </section>
                <section>
                          <ul class='style2'><h2>Board Seats</h2>
						   <li><a href='http://www.herasys.com/' target='new'>Hera Systems, Inc.</a></li>
                          <li><a href='http://www.intraopmedical.com/' target='new'>IntraOp Medical Corp.</a></li>
                         
                          <li><a href='http://www.pivotalsys.com/' target='new'>Pivotal Systems, Inc.</a></li>
                          
						  <li><a href='http://www.revasum.com/' target='new'>Revasum, Inc.</a></li>
                          <li><a href='http://www.sigen.net/' target='new'>Silicon Genesis Corp.</a></li>
                          
                          <li><a href='http://wrightspeed.com/' target='new'>Wrightspeed, Inc.</a></li>
                          </ul>
						  <div class='network'>
                          <ul class='social'>
                            <li><a href='https://www.linkedin.com/pub/kevin-landis/53/8b8/308' class='icon fa-linkedin'><span class='label'>LinkedIn</span></a></li>
                          </ul>
						  </div>

                      ";
        }
        
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=about.phil"){
            echo " <section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=about.main'>Company Background</a></li>
                          <li>Our Team</li>
                          <li><a href='index.php?fuseaction=about.process'>Our Process</a></li>
                          <li><a href='index.php?fuseaction=about.governance'>Governance</a></li>
                          <li><a href='index.php?fuseaction=about.filings'>Filings</a></li>
                      </ul>";
        }
        
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=about.kelvin"){
            echo "<section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=about.main'>Company Background</a></li>
                          <li>Our Team</li>
                          <li><a href='index.php?fuseaction=about.process'>Our Process</a></li>
                          <li><a href='index.php?fuseaction=about.governance'>Governance</a></li>
                          <li><a href='index.php?fuseaction=about.filings'>Filings</a></li>
                      </ul>";
        }
    
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=about.greg"){
            echo "<section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=about.main'>Company Background</a></li>
                          <li>Our Team</li>
                          <li><a href='index.php?fuseaction=about.process'>Our Process</a></li>
                          <li><a href='index.php?fuseaction=about.governance'>Governance</a></li>
                          <li><a href='index.php?fuseaction=about.filings'>Filings</a></li>
                      </ul>";
        }
        
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=about.process"){
            echo "<section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=about.main'>Company Background</a></li>
                          <li><a href='index.php?fuseaction=about.kevin'>Our Team</a></li>
                          <li>Our Process</li>
                          <li><a href='index.php?fuseaction=about.governance'>Governance</a></li>
                          <li><a href='index.php?fuseaction=about.filings'>Filings</a></li>
                      </ul>";
        }
            elseif ($_SERVER["QUERY_STRING"] == "fuseaction=about.governance"){
            echo "
                  <section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=about.main'>Company Background</a></li>
                          <li><a href='index.php?fuseaction=about.kevin'>Our Team</a></li>
                          <li><a href='index.php?fuseaction=about.process'>Our Process</a></li>
                          <li>Governance</li>
                          <li><a href='index.php?fuseaction=about.filings'>Filings</a></li>
                      </ul>";
        }
    
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=about.filings"){
            echo "
                  <section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=about.main'>Company Background</a></li>
                          <li><a href='index.php?fuseaction=about.kevin'>Our Team</a></li>
                          <li><a href='index.php?fuseaction=about.process'>Our Process</a></li>
                          <li><a href='index.php?fuseaction=about.governance'>Governance</a></li>
                          <li>Filings</li>
                      </ul>";
        }
    
          else {
            echo "About";
        }
        ?>    
                        
                        
                  </section>
              </div>
              <div id="content" class="6u important(collapse)">
                  <?php print trim($Fusebox["layout"]); ?>
              </div>
          </div>
    </div>
</div>
