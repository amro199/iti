<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <style>
        header , footer{
            height: 150px;
            background-color: black;
        ;
        }
        ul li{
            list-style: none;
            display: inline;
            margin-right: 30px;
        }
        .container{
            height: 600px;
        }


    </style>
</head>
<body>
<header></header>
<ul>
    <li><a href="localhost/iti/employee.php">employee</a></li>
    <li><a href="localhost/iti/depertment.php">depertment</a></li>
    <li><a href="localhost/iti/client.php">client</a></li>
    <li><a href="localhost/iti/projects.php">projects</a></li>
</ul>
<div class="container">
<h1>client details</h1>
<table  class="table table_bordered table-hover">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>age</td>
        <td>address</td>
    </tr>
    <?php
    $conn =mysqli_connect("localhost","root","","siwa");
    $query ="select * from client";
    $res = mysqli_query($conn,$query);
    while ($row=mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td><a href='#' class='btn btn-info'>view</a>  
        <a href='#' class='btn btn-primary'>edit</a> 
        <a href='#' class='btn btn-danger'>delete</a>
        </td>";
        echo "</tr>";

    }
    ?>
</table>

</div>

<footer></footer>
</body>
</html>

