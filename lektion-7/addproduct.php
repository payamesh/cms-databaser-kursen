<?php require 'connect.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>

<?php
  //  model, speed, ram, hd, rd, price
  //  maker, model, type

if (count($_POST) == 8) {
    $query = 'INSERT INTO pc (model, speed, ram, hd, rd, price) VALUES (?, ? ,? ,? ,? ,?)';
    $statement = $pdo->prepare($query);
    $statement->execute([
        $_POST['model'],
        $_POST['speed'],
        $_POST['ram'],
        $_POST['hd'],
        $_POST['rd'],
        $_POST['price']

    ]);
    $query = 'INSERT INTO product (maker, model, type) VALUES (?, ?, ?)';
$statement = $pdo->prepare($query);
$statement->execute([
    $_POST['maker'],
    $_POST['model'],
    $_POST['type']
]);
echo "Added data to the database";
}

?>
   
    <form method="POST">
        <label for="">Model</label>
        <input type="text" name ="model" />
        <br>
        <label for="">Speed</label>
        <input type="text" name ="speed" />
        <br>
        <label for="">Ram</label>
        <input type="text" name ="ram" />
        <br>
        <label for="">HD</label>
        <input type="text" name ="hd" />
        <br>
        <label for="">RD</label>
        <input type="text" name ="rd" />
        <br>
        <label for="">Price</label>
        <input type="text" name ="price" />
        <br>
        

        <input type="hidden" name ="type" value="pc" />
        <br>

        <label for="">Maker</label>
        <select name="maker" id="">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>