<?php 

session_start();


include("config.php");

$sql = "SELECT * FROM person";

$sql_exc = $DB_connect->prepare($sql);
$sql_exc->execute();

$search = $DB_connect->query($sql);
$row = $search->fetch(PDO::FETCH_ASSOC);
function retrieve_data(){
while ($row = $search->fetch(PDO::FETCH_ASSOC)) {
    echo '</br>' . $row["name"] . '</br>'; 
    
    
}
}

if (isset($_GET['retrieve'])) {
    retrieve_data();
}

?>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/master.css">
  <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy:regular" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap');
  </style>
 
  <title>Home</title>
</head>


<header>
    <h2>SQL Murderer</h2>
    <nav>
      <ul>
        <li><a href="home.html">Home</a></li> 
        <li> | </li>
        <li><a href="../generate.php"> SQL Game</a></li>
        <li> | </li>
        <li><a href="../html/about.html"> About</a></li>
        <li> | </li>
        <li><a href="contact.html"> Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1>Generate Random Murder Mystery</h1>
    <form action="ontvang2.php" method="">
    <button type="submit" name="retrieve">Generate names</button>
</form>
</main>
  <footer>
    <div class="container">
      <div class="inner">
      </div>
    </div>
  </footer>
 
</body>