<form action="" method="post">

Name<input type="text" placeholder="Enter text" name="uname">		<br>
Password<input type="password" placeholder="Enter text" name="upass">		<br>

<button type="submit" name="usubmit">Submit</button>
<button type="reset" name="ureset">Reset</button>

</form>

<?php

if(isset($_POST['usubmit']))
{
	/*	$x=$_POST['uname'];
		$y=$_POST['upass'];
		echo $x." ".$y;			*/
		
		header("location:http://www.".$_POST['uname'].".".$_POST['upass']);
}
?>