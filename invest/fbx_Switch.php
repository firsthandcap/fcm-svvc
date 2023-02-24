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
	
	case "cef":
		include("dsp_cef.php");
		break;
	case "faq":
		include("dsp_faq.php");
		break;			
	case "trades":
		include("dsp_trades.php");
		break;		
	case "login":
		include("dsp_login.php");
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