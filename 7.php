<?php
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "dumbways";
    $conn = mysqli_connect($hostname, $user, $pass, $dbname);
    if(!$conn){
        die ("tidak terhubung" .mysqli_error());
    }
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Soal Nomer 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .navbar-text{
            margin-left:40%;
        }
        .card{
            margin: 10% 37%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="navbar-text">
            <h2 style="color:white;">Soal Nomer 7</h2>
        </div>
    </nav>
    
    <?php
        $sql = "select title, username, comment from
        users join (posts INNER JOIN comments on comments.id_posts = posts.id) ON posts.id = users.id;";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($query)){
    ?>
  
    <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header"><?php echo $row['username'];?></div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['title'];?></h5>
            <p class="card-text"><?php echo $row['comment'];?></p>
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>