
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-List</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.nav
{
    width: 90%;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    box-shadow: 0 2px 20px 2px rgba(0, 0, 0, 0.2);
    position: fixed;
    z-index: 100;
    background-color: black;
    color: white;
}

.main {
    max-width: 90%;
    height: 90%;
    background-color: #fff;
    box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.2);
    overflow: scroll;
    z-index: 10;
}
.content{
    padding: 100px 10px;
    height: 600px;
    /* display: grid; */
    /* grid-template-columns: 50% 50%; */

}
#big{
    display: flex;
    /* flex-direction: column; */
    justify-content: space-between;
    font-size: 4vw;
    box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.2);
}
.btn{
    display: flex;
    justify-content: space-evenly;
    align-items: flex-end;
    box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.2);
    padding: 10px 10px;
    position: sticky;
    bottom: 0;
    background-color: black;
    z-index: 100;

}
.btn button
{
    font-size: 20px;
    font-weight: 700;
    border: none;
    background-color: lightseagreen;
    box-shadow: 2px 2px 10px 2px rgba(0, 0, 0, 0.2);
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 10px;
}  
#addMore{ 
    display: none;
    border: 2px solid black;
}

  
</style>
</head>
<body>
    <div class="main">
        <div class="nav">
            <h1>Add Notes</h1>
        </div>
        <div class="content">
            <div id="addMore">
                <input type="text" name = "task">
                <button>Add</button>
            </div>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "task";

                try{
                    $conn = mysqli_connect($servername, $username, $password, $database);
                    // echo "connected";
                }
                catch(mysqli_sql_exception)
                {
                    echo mysqli_connect_error()." We are failed to connect with the server";
                }
                
                try{
                    $sql = "SELECT *FROM task";
                    $result = mysqli_query($conn, $sql);
                }
                catch(mysqli_sql_exception)
                {
                    echo mysqli_connect_error()."SQL query is wrong";
                }
                $sno = 0;
                while($row = mysqli_fetch_assoc($result))
                {
                    $sno = $sno + 1;
                    $sql = "INSERT INTO `Task` (`S.No.`) VALUES ('$sno')";
                    echo "<div id = 'big'>{$sno} <div id = 'big'>{$row['Task']} </div> </div><br>";
                }
            ?>
        </div>
        <div class="btn">
            <button id="add" class="on">Add</button>
            <button id="update" >Update</button>
            <button id="delete" >Delete</button>
        </div>
    </div>
    <script>
        const addElement =document.querySelector("#add");
        const updateElement =document.querySelector("#update");
        const deleteElement =document.querySelector("#delete");
        const addData =document.querySelector("#addMore");
                flag = 1;
        addElement.addEventListener("click",()=>{
            if(flag === 1)
            {
                addData.style.display = "block";
                flag = 0;
            }
            else
            {
                addData.style.display = "none";
                flag = 1;
            }
        })
    </script>
</body>
</html>