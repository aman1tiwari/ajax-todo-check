<?php
session_start();
// include('check.php');
?>
    <?php
    if (!isset($_SESSION["addTodo"])) {
        $_SESSION["addTodo"] = array();
    }
    $addTodo = $_REQUEST['addTodo'];
    array_push($_SESSION["addTodo"], $addTodo);

    foreach ($_SESSION["addTodo"] as $key => $value) {
        echo "<li>
                <form action='' method='post'>
                <input type='checkbox' id='check' value='$key' name='check_$key'>
                </form>
                <label>$value</label><input type='text'>
                <a href='edit.php?id=$key'><button class='edit'>Edit</button></a>
                <a href='./delete.php?id=$key'><button class='delete'>Delete</button></a> 
                </li>";
    };
    ?>
  
