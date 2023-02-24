<div id="main-wrapper">
    <div class="container">
        <div class="row 200%">
		<?php 
         if ($_SERVER["QUERY_STRING"] == ""){
            echo "&nbsp;";
        } 	
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.main"){
            echo "<div id='sidebar' class='4u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   

                        ";
        }
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.stages"){
            echo "<div id='sidebar' class='4u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li>Stages of Investment</li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   

					  ";
        }
			 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.pivotal_study"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li>Stages of Investment</li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Connect With Pivotal</h2></header>
						<ul class='style1a'>
							 <li class='first'><a href='http://pivotalsys.com/' target='new'>pivotalsys.com</a></li>
						</ul>  
						
						<header><h2>Fast Facts</h2></header>
						<ul class='style1a'>
							<li>More than $12M revenue in 2016</li>
							<li>Founded 1998</li>
							<li>SVVC Ownership: more than 25%</li>
						</ul>  

					  ";
        }
					 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.wrightspeed_study"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li>Stages of Investment</li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					    <header><h2>Connect With Wrightspeed</h2></header>
						<ul class='style1a'>
							  <li class='first'><a href='http://www.wrightspeed.com/' target='new'>www.wrightspeed.com</a></li>
						</ul>  
						 <ul class='social'>
        <li><a href=https://www.facebook.com/wrightspeedpowertrains' target='new'><img src='images/buttons/facebook.png'' /></a></li>
          <li><a href='https://twitter.com/GOWrightspeed' target='new'><img src='images/buttons/twitter.png' /></a></li>
      </ul> 

						<header><h2>Fast Facts</h2></header>
						<ul class='style1a'>
							<li>Founded 2005</li>
							<li>SVVC Ownership: more than 25%</li>
						</ul>  

					  ";
        }
					 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.intraop_study"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li>Stages of Investment</li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					    <header><h2>Connect With IntraOp</h2></header>
						<ul class='style1a'>
							  <li class='first'><a href='http://www.intraop.com/' target='new'>www.intraop.com</a></li>
						</ul>  
						 <ul class='social'>
          <li><a href='https://twitter.com/IntraOp_Medical' target='new'><img src='images/buttons/twitter.png' /></a>
         </li>
           <li><a href='https://www.youtube.com/channel/UCTnhSOs6qJh8skt-RFSZMvg' target='new'><img src='images/buttons/youtube.png' /></a></li>
      </ul> 

						<header><h2>Fast Facts</h2></header>
						<ul class='style1a'>
							<li>Less than $10M revenue in 2020</li>
							<li>Founded 1993</li>
							<li>SVVC Ownership: more than 25%</li>
						</ul>  

					  ";
        }
				 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.qmat_study"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li>Stages of Investment</li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					    <header><h2>Connect With QMAT</h2></header>
						<ul class='style1a'>
							  <li class='first'><a href='http://www.qmatinc.com/' target='new'>www.qmatinc.com</a></li>
						</ul>  
						

						<header><h2>Fast Facts</h2></header>
						<ul class='style1a'>
							<li>Less than $10M revenue in 2016</li>
							<li>Founded 1993</li>
							<li>SVVC Ownership: less than 25%</li>
						</ul>  

					  ";
        }
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.top5"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li>Top 5 Holdings</li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>

";
        }
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.exits"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li>IPOs/Acquisitions/Exits</li>
                      </ul>
					  	<h2>Returns on Investment</h2>
						<ul class='style1a'>
							<li><p>Review the Fund's rate of return on its exits.</p></li>
						</ul>  
						<a href='index.php?fuseaction=fund.realizations' class='button'>Learn More</a>
					  
";
        }
		
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.eqx"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
                      ";
        }
		
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.jawbone"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
		 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.cloudera"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
			 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.lyncean"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
                      ";
        }
			 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.kyma"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
                      ";
        }       
		  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.hera"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
                      ";
        } 
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.hightail_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        } 
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.rorus"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.intraop"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
					   
                      ";
        } 
			elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.nutanix"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
					   
                      ";
        } 
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.intevac"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        } 
        elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.revasum_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
                      ";
        }
		   elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.quicklogic"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.phunware_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					  
					<section>
					<header><h2>Red Herring Top 100</h2></header>
					<ul class='style1'>
						<li class='first'><a href='http://www.redherring.com/events/rhna/2015winners/' target='new'>Phunware was named one of Red Herring's top 100 private companies in North America in 2015.</a></li>
					</ul>    
				 </section>  
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.pivotal"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
		 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.purestorage"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
					  
	 
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.qmat"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
			 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.svxr"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
                      ";
        }
		   elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.roku"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.sigen"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
                      ";
        }
		 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.soi"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Video Profiles</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.sunrun"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.telepathy"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
                      ";
        }
        
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.turn"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.uct"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
                      ";
        }
		 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.vufine"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					   <header><h2>Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.wrightspeed"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><span class='current'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></span></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></li>
                      </ul>
					  <header><h2>More Featured Videos</h2></header>
						<ul class='style1a'>
							<li><p>Learn more about our portfolio companies through these behind-the-scenes looks at their technology and interviews with the companies' founders and executives.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.explore' class='button'>Go to Videos</a>
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.facebook_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
		     elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.gilt_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
				     elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.sunrun_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
		 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.mattson_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
				 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.roku_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
		 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.tapad_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.twitter_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
		  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.sunrun_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.innovion_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
		  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.nutanix_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
			 elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.pivotal_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
		     elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.purestorage_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.solarcity_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
		  elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.explore"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
					 
<p>The videos featured here are the property of the respective portfolio companies and are for informational purposes only.</p>	


                      ";
        }
         elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.yelp_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
			
		elseif ($_SERVER["QUERY_STRING"] == "fuseaction=companies.turn_exit"){
            echo "<div id='sidebar' class='3u'><section>
                        <ul class='style1'>
                          <li class='first'><a href='index.php?fuseaction=companies.main'>Current Portfolio</a></li>
                          <li><a href='index.php?fuseaction=companies.stages'>Stages of Investment</a></li>
                          <li><a href='index.php?fuseaction=companies.top5'>Top 5 Holdings</a></li>
                          <li><span class='current'><a href='index.php?fuseaction=companies.exits'>IPOs/Acquisitions/Exits</a></span></li>
                      </ul>
                      ";
        }
         else {
            echo "Companies";
        }
        ?>    
     
               

     
    
          </section>
          </div>

    	<!---opening DIV in subfiles--->
        	<?php print trim($Fusebox["layout"]); ?>
    		</div>
		</div>
	</div>
</div>



<!---
<header><h2>Portfolio at a Glance</h2></header>
						<ul class='style1a'>
							<li><p>Review our complete list of portfolio holdings, including most recent fair market value for each.</p></li>
						</ul>  
						<a href='index.php?fuseaction=companies.soi' class='button'>More</a>
--->