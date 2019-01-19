<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Admin Panel</title>

<style>
  body{
    background-image: url("/Pictures/5.jpg");
    background-repeat: no-repeat;
    background-size: 100%;
  }
</style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/adminnavbar.php'); ?>

<br/>

<div class="container">
  <div class="row">
    <div class="col-lg-10">
      <h4 class="float-left" style="font-size: 2.5em; color: #953031; font-weight: bold;">
      ADMIN PANEL&nbsp;&nbsp;&nbsp;
      </h4>
      <p class="float-left" style="font-size: 1em; color: #CC2865; padding-top: 18px;float: left;">
      Manage Registered Accounts
      </p>
    </div>
  </div>
</div>

<hr/><br/>

<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-2">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Enter a name..." aria-label="" aria-describedby="basic-addon1">
      <div class="input-group-append">
        <button class="btn btn-default" style="background-color: #9A9A9A; color: white;" type="button">Search</button>
      </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle"
          type="button" id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Sort by
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <a class="dropdown-item" href="#!">Role</a>
          <a class="dropdown-item" href="#!">Date registered</a>
        </div>
      </div>
    </div>
  </div>
</div>

<br/><br/>

<center>
<table class="table table-hover" style="width: 70%;">
  <thead>
    <tr style="background-color: #CC2865; color: white;">
      <th>Name</th>
      <th>Role</th>
      <th>Date Registered</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <td>Name 1</td>
      <td>Student</td>
      <td>1/12/2018</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Ban</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr>

      <td>Name 2</td>
      <td>Teacher</td>
      <td>1/12/2018</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Ban</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr>

      <td>Name 3</td>
      <td>Corporate</td>
      <td>1/12/2018</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Ban</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr>

      <td>Name 4</td>
      <td>Teacher</td>
      <td>1/12/2018</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Ban</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
  </tbody>
</table>
</center>

</body>
</html>