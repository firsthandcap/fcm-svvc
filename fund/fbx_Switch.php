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
	case "milestones":
		include("dsp_milestones.php");
		break;
	case "discount":
		include("dsp_discount.php");
		break;	
			
	case "distributions":
		include("dsp_distributions.php");
		break;
	case "filings":
		include("dsp_filings.php");
		break;	
	case "statistics":
		include("dsp_statistics.php");
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

<!---
case "realizations":
		include("dsp_realizations.php");
		break;	
--->