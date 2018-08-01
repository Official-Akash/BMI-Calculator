<!--// Authors: Akash Chouhan// Version: 1.0// Open-Source Code--><?php
if(isset($_POST['submit']))
{
	$age=$_POST['age'];
	$weight=$_POST['weight'];
	$height=$_POST['height'];
	$sen=100;
	$oriheight=$height/$sen;
	if($weight<=0 || $weight>500)
	{
		echo "Please Input Valid weight";
		exit;
	}
	if($oriheight <= 0 || $oriheight > 2.5)
	{
		echo "Please input valid height";
		exit;
	}
	$bmi=$weight/($oriheight*$oriheight);
	echo "Your BMI is: ".$bmi." kg/m<sup>2</sup><br>";
	if($bmi<18.5)
	{
		echo "You are unfit!";
	}
	elseif($bmi=18.5||$bmi>25)
	{
		echo "You are normal!";
	}
	elseif($bmi=25||$bmi>30)
	{
		echo "You are overweight!";
	}
	else
	{
		echo "You are obsessed!";
	}
}
?>
<h1>BMI calculator</h1><br>
<form method="post">
	AGE:<input type="number" name="age"><br>
	HEIGHT(cm):<input type="text" name="height"><br>
	WEIGHT(kg):<input type="text" name="weight"><br>
	<input type="submit" name="submit"/>
</form>
<a href="bmi.txt" download="akashbmi">Download Code</a>