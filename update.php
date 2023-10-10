<?php include 'connect.php'; 

if(isset($_POST['update_btn']))
{
	$data_id=$_POST['data_id'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$sql="update `phpcrud` set username='$username',email='$email',mobile='$mobile',address='$address' where id=$data_id";
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		header('location:display.php');
	}
	else
	{
		echo die("Error in updating data");
	}
}
?>
 
<?php
if(isset($_GET['edit']))
{
	$edit_id=$_GET['edit'];  
	$get_data=mysqli_query($conn,"Select * from `phpcrud` where id=$edit_id");
	if(mysqli_num_rows($get_data)>0)
	{
		$fetch_data=mysqli_fetch_assoc($get_data);
?>
<FORM NAME = "form3" METHOD = "post" ACTION = "" >
<h1> UPDATE DATA </h1>
<BR><BR>
<a href="display.php">View Data</a>
<BR><BR>
<INPUT type="hidden" name="data_id" value="<?php echo $fetch_data['id'] ?>" />
<INPUT Type = "text" NAME ="username" required autocomplete="off" value="<?php echo $fetch_data['username'] ?>"/>
<BR><BR>
<INPUT TYPE = "email" NAME = "email" required autocomplete="off" value="<?php echo $fetch_data['email'] ?>"/>
<BR><BR>
<INPUT TYPE = "number" NAME = "mobile" required autocomplete="off" value="<?php echo $fetch_data['mobile'] ?>"/>
<BR><BR>
<INPUT TYPE = "text" NAME = "address" required autocomplete="off" value="<?php echo $fetch_data['address'] ?>"/>
<BR><BR>
<INPUT TYPE="submit" NAME="update_btn" VALUE="UPDATE"/>
</FORM>

<?php
		
	}
}
?>




