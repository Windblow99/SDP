<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/Website/template/header.php'); ?>

<title>Admin Panel</title>

  <style>
    body{
      background-image: url("../Pictures/5.jpg");
    }
  </style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/Website/template/navbar.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <p class="text-center" style="font-size: 35px; color: maroon; float: right; font-weight: bold;">
      ADMIN PANEL
      </p>
    </div>
    <div class="col-sm-6">
      <p class="text-center" style="font-size: 18px; color: fuchsia; padding-top: 18px; float: left;">
      MANAGE REGISTERED ACCOUNTS
      </p>
    </div>
  </div>
</div>
<hr/>

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

<br/>

<table class="table table-hover" style="margin-left: 175px; max-width: 1000px;">
  <thead>
    <tr style="background-color: fuchsia; color: white;">
      <th>Name</th>
      <th>Role</th>
      <th>Date Registered</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr style="color: fuchsia;">

      <td>Name 1</td>
      <td>Student</td>
      <td>1/12/2018</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Ban</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr style="color: fuchsia;">

      <td>Name 2</td>
      <td>Teacher</td>
      <td>1/12/2018</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Ban</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr style="color: fuchsia;">

      <td>Name 3</td>
      <td>Corporate</td>
      <td>1/12/2018</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Ban</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr style="color: fuchsia;"style="color: fuchsia;">

      <td>Name 4</td>
      <td>Teacher</td>
      <td>1/12/2018</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Ban</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
  </tbody>
</table>


</body>
</html>