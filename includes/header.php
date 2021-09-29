<?php
  include(dirname(__DIR__).'/includes/head.php');
?>

<header id="header">
<a class="logo" href="\My_Website\index.php"><img class="logo" src="\My_Website\img/Logo.png" alt=""></a>

  <div class="navbar">
    <a href="\My_Website\index.php">Home</a>
    <a href="/My_Website/Personal_projects/construction.php">About</a>
    <div class="dropdown">
      <button class="dropbtn">Pers. Projects
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href= "/My_Website/Personal_projects/construction.php">Environment</a>
        <a href="/My_Website/Personal_projects/construction.php">Link 2</a>
        <a href="\My_Website\index.php">This site</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">School Projects
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/My_Website/Personal_projects/construction.php">Link 1</a>
        <a href="/My_Website/Personal_projects/construction.php">Link 2</a>
        <a href="/My_Website/Personal_projects/construction.php">Link 3</a>
      </div>
    </div>
  </div> 
  <img class="pepe" src="\My_Website\img/Pepe.png" alt="">

</header>