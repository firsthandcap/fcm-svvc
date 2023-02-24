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

	case "exits":
		include("dsp_exits.php");
		break;			
	case "facebook_exit":
		include("dsp_facebook_exit.php");
		break;	
	case "hightail_exit":
		include("dsp_hightail_exit.php");
		break;		
	case "intraop_study":
		include("dsp_intraop_study.php");
		break;
	case "wrightspeed_study":
		include("dsp_wrightspeed_study.php");
		break;			
	case "qmat_study":
		include("dsp_qmat_study.php");
		break;	
	case "lyncean":
		include("dsp_lyncean.php");
		break;
	case "kyma":
		include("dsp_kyma.php");
		break;			
	case "gilt_exit":
		include("dsp_gilt_exit.php");
		break;	
	case "hera":
		include("dsp_hera.php");
		break;	
	case "mattson_exit":
		include("dsp_mattson_exit.php");
		break;	
	case "turn_exit":
		include("dsp_turn_exit.php");
		break;		
	case "cloudera":
		include("dsp_cloudera.php");
		break;	
	case "eqx":
		include("dsp_eqx.php");
		break;	
	case "explore":
		include("dsp_explore.php");
		break;	
	case "vufine":
		include("dsp_vufine.php");
		break;	
	case "hightail":
		include("dsp_hightail.php");
		break;	


	case "innovion_exit":
		include("dsp_innovion_exit.php");
		break;			
	case "intevac":
		include("dsp_intevac.php");
		break;	
	case "intraop":
		include("dsp_intraop.php");
		break;	
	case "jawbone":
		include("dsp_jawbone.php");
		break;
	case "newsletter":
		include("dsp_newsletter.php");
		break;
	case "nutanix":
		include("dsp_nutanix.php");
		break;	
	case "nutanix_exit":
		include("dsp_nutanix_exit.php");
		break;		
	case "phunware_exit":
		include("dsp_phunware_exit.php");
		break;	
	case "pivotal_exit":
		include("dsp_pivotal_exit.php");
		break;	
	
	case "purestorage_exit":
		include("dsp_purestorage_exit.php");
		break;			
	case "qmat":
		include("dsp_qmat.php");
		break;	
	case "quicklogic":
		include("dsp_quicklogic.php");
		break;	
	case "revasum_exit":
		include("dsp_revasum_exit.php");
		break;	
	case "rorus":
		include("dsp_rorus.php");
		break;	
	case "roku":
		include("dsp_roku.php");
		break;	
	case "roku_exit":
		include("dsp_roku_exit.php");
		break;	
	case "sigen":
		include("dsp_sigen.php");
		break;	
	case "soi":
		include("dsp_soi.php");
		break;
	case "solarcity_exit":
		include("dsp_solarcity_exit.php");
		break;	
	case "sunrun_exit":
		include("dsp_sunrun_exit.php");
		break;	
	case "stages":
		include("dsp_stages.php");
		break;

	case "sunrun":
		include("dsp_sunrun.php");
		break;	
	case "tapad_exit":
		include("dsp_tapad_exit.php");
		break;	
	case "telepathy":
		include("dsp_telepathy.php");
		break;	
	case "top5":
		include("dsp_top5.php");
		break;	
	case "svxr":
		include("dsp_svxr.php");
		break;	
	case "turn":
		include("dsp_turn.php");
		break;	
	case "twitter_exit":
		include("dsp_twitter_exit.php");
		break;			
	case "uct":
		include("dsp_uct.php");
		break;	
	case "wrightspeed":
		include("dsp_wrightspeed.php");
		break;
	case "yelp_exit":
		include("dsp_yelp_exit.php");
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