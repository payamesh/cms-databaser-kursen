<?php
$password = "hej";


echo "Hej, " . $_POST['username'] . " Du är född den: ". $_POST['date']. " och din favorit CSS-egenskap är: ". $_POST['favcss']. "..nice!";


if ($_POST['pwd'] == $password) {
    echo "Välkommen!";
    # code...
}
else{
    echo "<img src='https://media.giphy.com/media/3ohzdQ1IynzclJldUQ/giphy.gif' style='height:50vh; width:50vw'>";

}