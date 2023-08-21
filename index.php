<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo-app</title>
</head>

<body style="display: flex; align-items:center; justify-content:center; flex-direction:column;">
    <h1 style="display: flex; ">Todo app</h1>
    <div style="flex-direction:row;">
        <form action="create-todo.php" method="POST">
            <input placeholder="enter-todo-item" type="text" name="task" />
            <button>Add</button>
        </form>
    </div>

    <!-- get the data from database -->
    <?php
    session_start();
    include('database.php');
    
    // get user_id from session
    $user_id = $_SESSION['user_id'];

    // create prepare statement to pick user todo items 
    $sql_stmnt_get_todos = "SELECT * FROM todo WHERE user_id = ?";
    $get_todos = mysqli_prepare($conn,$sql_stmnt_get_todos);
    mysqli_stmt_bind_param($get_todos,'i',$user_id);
    $todoData = mysqli_query($conn, "select * from todo ;");
    ?>

    <!-- list-down-todo  -->
    <div class="container" style="display: flex;padding-top:2rem;width:600px;">
        <table style="width: 100%;">
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($todoData)) {
                ?>
                    <tr>
                        <!-- <td style="width: 10%;"><?php echo $row['id']; ?></td> -->
                        <td style="width: 80%;padding:1em"><?php echo $row['task']; ?></td>
                        <td style="width: 10%;"><a href="update-todo.php? ID=<?php echo $row['id'] ?>">update</a></td>
                        <td style="width: 10;"><a href="delete-todo.php? ID=<?php echo $row['id'] ?>">delete</a></td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>