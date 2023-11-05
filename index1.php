
<!DOCTYPE html>
<html>
<head>
    <title>Todo List with Database</title>
</head>
<body>
    <h1>Todo List</h1>

    <?php
    // Database connection details
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'task';

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Add task to the database
    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['due_date'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $due_date = $_POST['due_date'];

        // Insert query
        $sql = "INSERT INTO tasks (title, description, due_date) VALUES ('$title', '$description', '$due_date')";
        if ($conn->query($sql) === TRUE) {
            echo "Task added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Retrieve tasks from the database
    $tasks_query = "SELECT * FROM task";
    $tasks_result = $conn->query($tasks_query);
    ?>

    <form method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="description" placeholder="Description">
        <input type="date" name="due_date">
        <button type="submit">Add Task</button>
    </form>

    <h2>Tasks:</h2>
    <ul>
        <?php
        while ($row = $tasks_result->fetch_assoc()) {
            echo "<li><strong>Title:</strong> " . $row['title'] . " | <strong>Description:</strong> " . $row['description'] . " | <strong>Due Date:</strong> " . $row['due_date'] . "</li>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </ul>
</body>
</html>
