<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <link rel="stylesheet" href="./style.php">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>

<body>
         <h2><a href="destroy.php">Session Destroy</a></h2>
    <div class="container">
        <h2>TODO LIST</h2>
        <h3>Add Item</h3>
            <p>
                <input id="new-task" name="new_task" type="text">
                <button id="add_btn">Add</button>
            </p>
        
        <?php
        
        if (!isset($_SESSION["complete_todo"])) {
            $_SESSION["complete_todo"] = array();
        }
    
        ?>

        <h3>Todo</h3>
        <ul id="incomplete-tasks">

        </ul>

        <h3>Completed</h3>
        <ul id="completed-tasks">
            <?php
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
        </ul>
    </div>
    <script src="./ajax.js"></script>
</body>

</html> 