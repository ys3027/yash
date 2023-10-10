<?php include 'connect.php' ;

//inserting data inside table
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	
	// insert query
	$sql="insert into `phpcrud` (username,email,mobile,address) values('$username','$email','$mobile','$address')";
	$result=mysqli_query($conn,$sql);
	if($result){
		header('location:display.php');
	}
	else{
		echo die("data not inserted");
	}
}
?>  
<FORM NAME = "form1" METHOD = "post" ACTION = "" >

<h1> STUDENT DETAILS </h1>
<BR><BR>
<a href="display.php">View Data</a>
<BR>

Enter Your Name:
<INPUT Type = "text" NAME ="username" required autocomplete="off"/>
<BR><BR>

Enter Your E-mail:
<INPUT TYPE = "email" NAME = "email" required autocomplete="off"/>
<BR><BR>

Enter Your Phone Number:
<INPUT TYPE = "number" NAME = "mobile" required autocomplete="off"/>
<BR><BR>
Enter Your Address:
<INPUT TYPE = "text" NAME = "address" required autocomplete="off"/>
<BR><BR>

<INPUT TYPE="submit" NAME="submit" VALUE="SUBMIT"/>

</FORM>