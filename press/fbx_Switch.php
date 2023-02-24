<?php
/*
<fusedoc fuse="fbx_Switch.php">
	<responsibilities>
		I am the switch statement that handles the fuseaction, delegating work to various fuses.
	</responsibilities>
	<io>
		<in>
			<string name="$Fusebox['fuseaction']" />
			<string name="$Fusebox['circuit']" />
		</in>
	</io>	
</fusedoc>
*/
switch($Fusebox["fuseaction"]) {
	case "blogs":
		include("dsp_blogs.php");
		break;
	case "confirm_email":
		include("dsp_confirm_email.php");
		break;		
	case "distributions":
		include("dsp_distributions.php");
		break;	
	case "media":
		include("dsp_media.php");
		break;	
	case "2014_distributions":
		include("dsp_2014_distributions.php");
		break;	
	case "email":
		include("dsp_email.php");
		break;
	case "financials":
		include("dsp_financials.php");
		break;	
	case "financials_2013":
		include("dsp_financials_2013.php");
		break;	
	case "financials_2012":
		include("dsp_financials_2012.php");
		break;	
	case "financials_2011":
		include("dsp_financials_2011.php");
		break;	
	case "holdings":
		include("dsp_holdings.php");
		break;
	case "holdings_2013":
		include("dsp_holdings_2013.php");
		break;	
	case "holdings_2012":
		include("dsp_holdings_2012.php");
		break;				
	case "holdings_2011":
		include("dsp_holdings_2011.php");
		break;	
	case "homepage1":
		include("dsp_homepage1.php");
		break;	
	case "nutanix":
		include("dsp_nutanix.php");
		break;	
	case "tapad":
		include("dsp_tapad.php");
		break;			
	case "news":
		include("dsp_news.php");
		break;
	
	case "meeting":
		include("dsp_meeting.php");
		break;	
	case "other":
		include("dsp_other.php");
		break;
	case "other_2013":
		include("dsp_other_2013.php");
		break;
	case "other_2012":
		include("dsp_other_2012.php");
		break;	
	case "other_2011":
		include("dsp_other_2011.php");
		break;		
	case "shareholder_letter":
		include("dsp_shareholder_letter.php");
		break;	
		case "shareholder_letter_2016":
		include("dsp_shareholder_letter_2016.php");
		break;		
	case "sunrun_ipo":
		include("dsp_sunrun_ipo.php");
		break;	
	case "vufine":
		include("dsp_vufine.php");
		break;	
	case "wrightspeed_fedex":
		include("dsp_wrightspeed_fedex.php");
		break;
	case "main":
	case "Fusebox.defaultFuseaction":
		include("dsp_main.php");
		break;
		
	default:
		print "I received a fuseaction called <b>'" . $Fusebox["fuseaction"] . "'</b> that circuit <b>'" . $Fusebox["circuit"] . "'</b> does not have a handler for.";
		break;
}

?>