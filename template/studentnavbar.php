<?php
  session_start(); 
  
  if(!isset($_SESSION['user']))
  {
    echo "<script>window.location.href='/website/general/login.php';</script>";   
  }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg sticky-top" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="studentmainpage.php"><img src="/Pictures/e.png" height="35" width="35">duco</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="studentmainpage.php">Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="studentexamperformance.php">Exams</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="studentlabperformance.php">Lab Sessions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="studentcertificate.php">Certificates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="studentclassdetails.php">Class Details</a>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Welcome Back, <?php echo $_SESSION['user']; ?>.
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/website/account/account_security.php">Account Settings</a>
          <a class="dropdown-item" href="/website/account/logout.php">Log Out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

