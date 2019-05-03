<?php
require 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Products</title>
</head>
<body>
    


<?php
$query = 'SELECT product.maker, product.type, pc.model, pc.speed, pc.ram, pc.price FROM';
$query .= ' pc INNER JOIN product ON pc.model = product.model';
$query .= ' UNION ';
$query .= 'SELECT product.maker, product.type, laptop.model, laptop.speed, laptop.ram, laptop.price FROM';
$query .= ' laptop INNER JOIN product ON laptop.model = product.model';

// Check if GET orderby is set
    if (isset($_GET['orderby'])) {
        $query .= " ORDER BY {$_GET['orderby']} "; // use curly brackets when assoc array value in string
    }


    $statement = $pdo->prepare($query);
    $statement->execute();

    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    ?>
        <table>
            <thead>
                <th><a href="?orderby=maker">Maker</a></th>
                <th><a href="?orderby=type">Type</a></th>
                <th><a href="?orderby=model">Model</a></th>
                <th><a href="?orderby=speed">Speed</a></th>
                <th><a href="?orderby=ram">Ram</a></th>
                <th><a href="?orderby=price">Price</a></th>
            </thead>
            <tbody>

<?php
foreach ($data as $product) {
  
?>
        <tr>
            <td><?= $product['maker'] ?></td>
            <td><?= $product['type'] ?></td>
            <td><?= $product['model'] ?></td>
            <td><?= $product['speed'] ?></td>
            <td><?= $product['ram'] ?></td>
            <td><?= $product['price'] ?></td>
        </tr>
        <?php
}
?>
</tbody>
</table>;

</body>
</html>