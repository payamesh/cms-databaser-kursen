<?php
require 'partials/connect.php';
?>
<h2>Welcome</h2>
<?php
$num = (int)$_SESSION['userID'];
$query = 'SELECT users.username, entries.title, entries.createdAt, entries.userID, users.userID' ;
$query .= " FROM entries INNER JOIN users ON entries.userID = users.userID";

$statement = $pdo->prepare($query);
$statement->execute();

$data = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
    <table>
        <thead>
            <th><a href="?orderby=title">Title</a></th>
            <th><a href="?orderby=createdAt">Created at: </a></th>
            <th><a href="?orderby=username">Written by: </a></th>
            <th><a href="?orderby=userID">User ID: </a></th>
            <th><a href="" target="_blank" >Remove</a></th>
        </thead>
        <tbody>

<?php
foreach ($data as $info) {

?>
    <tr>
        <td><a href=""><?= $info['title'] ?></a> </td>
        <td><?= $info['createdAt'] ?></td>
        <td><?= $info['username'] ?></td>
        <td><?= $info['userID'] ?></td>
    </tr>
    <?php
}


?>
</tbody>
</table>
<h3><a href="?create=true"  >Create a new post</a></h3>

