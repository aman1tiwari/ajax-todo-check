<?php
session_start(); 
header("Location:todo.php");

foreach ($_SESSION['addTodo'] as $key => $value) {
    if($key == $_GET['class']){
        array_splice($_SESSION['complete_todo'],$key,1);
    }
    echo "Deleted!";
    }

?> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./ajax.js"></script>



