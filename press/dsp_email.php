<meta name="description" content="Sign Up page for our alert e-mail.">
<title>Alert Mail Sign Up</title>
<div id="content" class="6u important(collapse)">
	<header>
    <h2>E-Mail Alerts</h2>
    <p class="subtitle">Stay Up-to-Date</P>
    </header>
    <p>Sign up to receive important updates from Firsthand Technology Value Fund, Inc. Subscribers will receive periodic emails regarding:</p>
    <p>
        <ul class="style4-alt">
        <li>Quarterly NAV</li>
        <li>Earnings announcements</li>
        <li>Press releases</li>
        <li>Quarterly newsletter</li>
        </ul>
     </p>

<!--START OF REACHMAIL FORM, CUT FROM HERE DOWN-->
<script language="JavaScript">
<!-- 
function submitIt(form) {
var checkEmail = "@.";
var checkStr = form.rm_email.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
var bad = "";
for (i = 0;  i < checkStr.length;  i++)
{
     ch = checkStr.charAt(i);
     for (j = 0;  j < checkEmail.length;  j++)
     {
        if (ch == checkEmail.charAt(j) && ch == "@")
        EmailAt = true;
        if (ch == checkEmail.charAt(j) && ch == ".")
           EmailPeriod = true;
	      if (EmailAt && EmailPeriod)
		          break;
	      if (j == checkEmail.length)
		          break;
	    }
      if (EmailAt && EmailPeriod)
      {
		    EmailValid = true
		    break;
	    }
}
if (!EmailValid)
{
bad = bad + "\n    Please enter a valid Email Address.";
}
if (bad != "") {alert("Please fill in the following fields:"+bad +"\n"); return (false);}
return (true);
}
//-->
</script>
<!--END OF JAVASCRIPT-->
<section>
<form name="signup" method="post" onSubmit="return submitIt(this);"  action="https://go.reachmail.net/libraries/form_wizard/process_subscribe.asp" >
<div class="row 50%">
   <div class="6u">
   		<input type="text" name="rm_email" size="40" placeholder="E-mail">
   </div>
   <div class="6u">
		<input type="text" name="rm_name" size="40" placeholder="Name">
  </div>
</div>  
<p></p>
  <input type="hidden" name="form_id" value="1624">
  <input type="hidden" name="list_name" value="XLIST_EB71E00EE42F4A92865872AC7DA28911">
  <input type="hidden" name="list_id" value="191565">
  <input type="hidden" name="el_list" value="email,name">
  <input type="hidden" name="list_uname" value="">
  <input type="hidden" name="list_umsg" value="">
  <input type="hidden" name="page_confirm" value="http://www.firsthandtvf.com/index.php?fuseaction=press.confirm_email">
  <input type="hidden" name="list_fromname" value="">
  <input type="hidden" name="list_fromemail" value="">
  <input type="hidden" name="list_subject" value="">
  									
<input type="image" name="submit" id="submit" src="../images/buttons/subscribe.png">

</form>
</section>
<!--REACHMAIL FORM ENDS HERE-->  
</div>
<div id="sidebar2" class="3u">
	<section>
        <a class="image featured-alt"><img src="images/sidenav/privacy.png" /></a>
        <header>   
        <h2>Your Privacy</h2>
        </header>
        <ul class="style1">
            <li>	
            <p>Firsthand respects your privacy and does not tolerate spam and will never sell, rent, lease or give away your information (name, address, email, etc.) to any third party. Nor will we send you unsolicited email.</p></li>
            </ul>
    </section>
 <!---final <DIV> in lay_press file---> 
