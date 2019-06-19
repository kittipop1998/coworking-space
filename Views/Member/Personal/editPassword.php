<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Password</title>
</head>
<style>
	.err{color:red}
</style>
<script>
function validate()
{
//Lấy thông tin từ form về ______________________________________________________________________________________________________________
	var newpass =  document.getElementById("newpass").value;
	var cpass = document.getElementById("cpass").value;
	var reg= /^[A-Za-z0-9]+$/;
//Validate Password _______________________________________________________________________________________________________________________
	if(newpass.length<=5 || newpass.length>30 || !reg.test(newpass) || cpass.length<=5 || cpass.length>30 || !reg.test(cpass))
	{
		document.getElementById("errpass").innerHTML=
			"Enter from 6 to 30 characters<br />Password is characters and number (No space or special characters)";
		if(newpass.length<=5 || newpass.length>30 || !reg.test(newpass))
		{
			document.getElementById("newpass").focus();
			return false;
		}
		if(cpass.length<=5 || cpass.length>30 || !reg.test(cpass))
		{
			document.getElementById("cpass").focus();
			return false;	
		}
	}
	if(newpass!=cpass)
	{
		document.getElementById("errpass").innerHTML="Confirm password does not match new password";
		document.getElementById("cpass").focus();
		return false;	
	}
	else 
	{
		document.getElementById("errpass").innerHTML="";
	}
	return true;
}
</script>
<body>
<div style="width:500px">
  <form method="post" class="pure-form">
    <fieldset>
      <legend><h2>Edit Password</h2></legend>
      <table align="center" width="100%">
        <tr>
          <td>
            <label for="oldpass"><strong>Current Password:</strong></label><br />
            <input type="password" name="oldpass" id="oldpass" class="pure-input-1" autofocus="autofocus"/>
            <div id="erroldpass" class="err"><?php if(isset($_GET['eroldpass'])) echo "*Old pass is not correct";?></div><br />
          </td>
        </tr> 
        <tr>
          <td>
            <label for="newpass"><strong>New Password:</strong></label><br />
            <input type="password" name="newpass" id="newpass" class="pure-input-1" /><br /><br />
          </td>
        </tr>
        <tr>
          <td>
            <label for="cpass"><strong>Confirm Password:</strong></label><br />
            <input type="password" name="cpass" id="cpass" class="pure-input-1" />
            <div id="errpass" class="err"></div><br />
          </td>
        </tr>
        <tr>
          <td align="center">
            <input type="submit" value="Save" name="save" id="submit" class="pure-button pure-button-primary" onclick="return validate()"/>
            <input type="reset" value="Clear" id="button" class="pure-button pure-button-active"/><br />
          </td>
        </tr>
      </table>
	  <a href="?action=editInfor" style="float:right; font-size:20px">Edit Information</a>
    </fieldset>
  </form>
</div>
</body>
</html>