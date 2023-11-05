<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $task = $_POST['name'];
        $number = 0;
        $username = "root";
        $servername = "localhost";
        $password = "";
        $database = "task";
        $conn = "";

        try{
            $conn = mysqli_connect($servername, $username, $password, $database);
            // echo "We are connected";
            $number = $number + 1;
            $sql = "INSERT INTO `Task` (`S.No.`, `Task`) VALUES ('$number', '$task')";
            $result = mysqli_query($conn, $sql);
        }
        catch(mysqli_sql_exception)
        {
            echo mysqli_connect_error()." We are failed to connect with the server";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <style>
        .main
        {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .container{
            overflow: scroll;
            height: 400px;
            width: 60%;
        }
        label{
            font-size: 40px;
        }
        #name{
            font-size: 30px;
            width: 600px;
            height: 40px;
        }
        #btn{
            padding: 6px 20px;
            font-size: 40px;
        }
        .fixed{
            position: ab;
        }
    </style>
</head>
<body>
    <div class="main">
    <div class="from">
        <form action="$_get&$_post.php" method="post">
        <label>Task</label>
        <br>
        <input id="name" type="text" name="name"><br>
        <input id="btn" type="submit" value="Add">
    </form>
    </div>

    <div class="container" id="parentDiv" >

    <table>
        <tr class="fixed">
          <th scope="col">S.No</th>
          <th scope="col">Title</th>
          <th scope="col">Actions</th>
        </tr>
    <?php
        $sql = "SELECT * FROM task";
        $result = mysqli_query($conn, $sql);
        $sno = 0;
        while($row = mysqli_fetch_assoc($result))
        {
            $sno = $sno + 1;
            $sql = "INSERT INTO `Task` (`S.No.`) VALUES ('$number')";
            echo "div<tr>
                    <td>{$sno}</td>
                    <td>{$row['Task']}</td>
                    <td><button id='edit' name = 'edit'>Edit</button>
                    <button id='delete' name = 'delete'>Delete</button></td>
                  </tr>";
        }
    ?>
    </table>
  </div>
    </div>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    var objDiv = document.getElementById("parentDiv");
    objDiv.scrollTop = objDiv.scrollHeight;

</script>
</body>
</html>


