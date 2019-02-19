<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg sticky-top" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="/website/admin/admin_panel.php"><img src="/Pictures/e.png" height="35" width="35">duco</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link" href="/website/moderator/moderator_panel.php">Moderator</a>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Welcome Back, <?php echo $_SESSION['user']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/website/account/account_security.php">Account Settings</a>
          <a class="dropdown-item" href="/website/account/logout.php">Log Out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

