<?php include 'connect.php';?>

<FORM NAME = "form12" METHOD = "post" ACTION = "" >

<h1> DISPLAY DATA </h1>
<BR><BR>
<style>
	th,
	td{
		border: 1px double #000;
		padding: 5px;
	}
	</style>
<a href="firstHTML.php">Back</a> 
<table>
	<thead>
		<th>SL No</th>
		<th>Username</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>Oprations</th>
	</thead>
	<tbody>
<?php 
  $display_data=mysqli_query($conn,"Select * from `phpcrud`");
  $num = 1;
  if(mysqli_num_rows($display_data)>0)
  {
	  while($row=mysqli_fetch_assoc($display_data))
	  {
		  
	?>
	<tr>
			<td><?php echo $num;?></td>
			<td><?php echo $row['username']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['mobile']?></td>
			<td><?php echo $row['address']?></td>
			<td>
				<a href="delete.php?delete=<?php echo $row['id']?>" onclick="return confirm('Are you sure you want to delete this data');">Delete</a>
				<a href="update.php?edit=<?php echo $row['id']?>">Edit</a>
			</td>
	</tr>
<?php
$num++;
		  
}
	}
?>

<BR>
</tbody>
</table>
</FORM>