<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update TODO</title>
</head>

<body style="display: flex; align-items:center; justify-content:center; flex-direction:column;">
    <?php
    include("database.php");
    $id = $_GET['ID'];
    $todo_item_data = mysqli_query($conn, "SELECT * FROM `todo` WHERE id = $id");
    $todo_item = mysqli_fetch_array($todo_item_data);
    ?>
    <h1 style="display: flex; ">Update Todo</h1>
    <div style="flex-direction:row;">
        <form action="update.php" method="POST">
            <input placeholder="enter-todo-item" type="text" name="task" value="<?php echo $todo_item['task']; ?>" />
            <input name = "id" value = "<?php echo $todo_item['id'];?>" type="hidden"/>
             <button>Update</button>
        </form>
    </div>

</body>

</html>