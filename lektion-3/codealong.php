<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CodeAlong</title>
</head>
<body>
    

<form action="" method="POST">
<label for="firstname">First Name</label>
<input type="text" id="firstname" name="firstname">
<br>
<label for="lastname">Last Name</label>
<input type="text" id="lastname"name="lastname">
<br>
<label for="occupation">developer</label>
<input type="radio" id="developer" name="occupation" value="developer">
<br>
<label for="occupation">teacher</label>
<input type="radio" id="teacher" name="occupation" value="teacher">
<br>
<label for="busy">busy</label>
<input type="checkbox" id="busy" name="busy" value="busy">
<br>



<input type="submit" value="Submit">

</form>

<pre>
<?php 

echo $_POST['firstname'];
echo $_POST['lastname'];
echo $_POST['occupation'];
if (isset($_POST['busy'])) {
echo "busy is set";
}
else{
    echo "busy is not set";
}



?>

</pre>


</body>
</html>