<?php
session_start();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./ajax.js"></script>


<?php
if (!isset($_SESSION["complete_todo"])) {
    $_SESSION["complete_todo"] = array();
}
$checkTodo = $_REQUEST['checkTodo'];
array_push($_SESSION['complete_todo'], $checkTodo);
// $_SESSION['complete_todo'] . append("#completed-tasks"),
array_splice($_SESSION['complete_todo'], $key, 1);

foreach($_SESSION["complete_todo"] as $key => $value) {
    echo "<li>
    <form action='uncheck.php' method='post'>
        <input type='checkbox' onclick='form.submit()' value='$key' name='unchk_$key'>
    </form>
    <label>$value</label><input type='text'> 
    <a href='delete.php?id=$key'><button class='delete'>Delete</button></a>
     </li>";
};
?>