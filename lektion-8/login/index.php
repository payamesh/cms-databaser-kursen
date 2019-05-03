<?php
require 'partials/session.php';
require 'partials/connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'register') {
            $statement = $pdo->prepare(
                "INSERT INTO users (username, password) VALUES (:username, :password)"
            );
            $statement->execute([
                ":username" => $_POST['username'],
                ":password" => password_hash($_POST['password'], PASSWORD_BCRYPT)
            ]);
            echo "You tried to register as {$_POST['username']}";
        }

        if ($_GET['action'] == 'login') {
            $statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
            $statement->execute([
                ":username" => $_POST['username']
                ]);
                $user = $statement->fetch(PDO::FETCH_ASSOC);
                if (password_verify($_POST['password'], $user['password'])) {
                    $_SESSION["loggedIn"] = true;
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['userID'] = $user['userID'];

            }
        }
        
        


        
    }
    //Skapa entry
    if (isset($_GET['create'])) {
        
        
        if ($_GET['create'] == true) {
            require 'views/create.php';


        }
    }

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'createEntry') {
            $statement = $pdo->prepare(
                "INSERT INTO entries (title, content, createdAt, userID, entryUserID) VALUES (:title, :content, :createdAt, :userID, :entryUserID)"
                
            );

            $statement->execute([
                ":title" => $_POST['title'],
                ":content" => $_POST['content'],
                ":createdAt" => date('Y-m-d'),
                "userID" => $_SESSION['userID'],
                "entryUserID"=> $_SESSION['userID']

    
    
    
            ]);

            echo "You have published:  {$_POST['title']} {$_POST['content']} ";
        }
    }
  
    
   
    ?>
    
<?php
if (isset($_SESSION["loggedIn"])) {
    require 'views/greeting.php';


}else{
    require 'views/login.php';
    require 'views/register.php';

}
?>

</body>
</html>