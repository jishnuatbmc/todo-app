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

    <!-- list-down-todo  -->
    <div class="container" style="display: flex;padding-top:2rem;width:600px;">

        <div style="display: flex;flex-direction:row;justify-content:space-between;width:100%;">
            <td>do something</td>
            <button>update</button>
            <button>delete</button>
        </div>

    </div>
</body>

</html>