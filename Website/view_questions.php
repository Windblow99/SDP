<!DOCTYPE html>
<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>View Questions</title>

  <style>
    body{
      background-image: url("../Pictures/6.jpg");
    }
  </style>
</head>

<body>
<?php include($_SERVER["DOCUMENT_ROOT"].'/template/navbar.php'); ?>

<br/>
<div class="container">
  <div class="row">
    <div class="col-sm-5">
      <p class="text-center" style="font-size: 35px; color: maroon; float: left; font-weight: bold;">
      SUBMITTED QUESTIONS
      </p>
    </div>
    <div class="col-sm-7">
      <p class="text-center" style="font-size: 18px; color: fuchsia; padding-top: 18px; float: left;">
      CLASS 1
      </p>
    </div>
  </div>
</div>
  <hr/>
  <br/><br/>
  <div class="row" style="margin-left: 170px; margin-right: 100px;">
    <div class="dropdown col-sm-3">
      <button class="btn btn-secondary dropdown-toggle"type="button" id="questionapproval" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Sort by status</button>
            <div class="dropdown-menu" aria-labelledby="questionapproval">
            <a class="dropdown-item" href="#!">Approved</a>
            <a class="dropdown-item" href="#!">Pending</a>
            </div>
    </div>
    <div class="dropdown col-sm-3">
      <button class="btn btn-secondary dropdown-toggle"type="button" id="chapters" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Sort by chapter</button>
            <div class="dropdown-menu" aria-labelledby="chapters">
            <a class="dropdown-item" href="#!">Chapter 1</a>
            <a class="dropdown-item" href="#!">Chapter 2</a>
            </div>
    </div>
    <div class="dropdown col-sm-3">
      <button class="btn btn-secondary dropdown-toggle"type="button" id="questiontype" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Sort by type</button>
            <div class="dropdown-menu" aria-labelledby="questiontype">
            <a class="dropdown-item" href="#!">Exam</a>
            <a class="dropdown-item" href="#!">Lab Session</a>
            </div>
    </div>
    <div class="dropdown col-sm-3">
      <button class="btn btn-secondary dropdown-toggle"type="button" id="questiondifficulty" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Sort by difficulty</button>
            <div class="dropdown-menu" aria-labelledby="questiondifficulty">
            <a class="dropdown-item" href="#!">Beginner</a>
            <a class="dropdown-item" href="#!">Intermediate</a>
            <a class="dropdown-item" href="#!">Expert</a>
            </div>
    </div>
</div>

<br/><br/>

<table class="table table-hover" style="margin-left: 175px; max-width: 1000px;">
  <thead>
    <tr style="background-color: fuchsia; color: white;">
      <th>Question</th>
      <th>Status</th>
      <th>Chapter</th>
      <th>Type</th>
      <th>Difficulty</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr style="color: fuchsia;">

      <td>Question 1</td>
      <td>Approved</td>
      <td>1</td>
      <td>E</td>
      <td>A</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Modify</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr style="color: fuchsia;">

      <td>Question 2</td>
      <td>Pending</td>
      <td>1</td>
      <td>L</td>
      <td>B</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Modify</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr style="color: fuchsia;">

      <td>Question 3</td>
      <td>Approved</td>
      <td>1</td>
      <td>E</td>
      <td>C</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Modify</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
    <tr style="color: fuchsia;">

      <td>Question 4</td>
      <td>Pending</td>
      <td>1</td>
      <td>E</td>
      <td>C</td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Modify</button></td>
      <td><button style="width: 175px; height: 35px; background-color: #333333;" type="submit" class="btn btn-primary">Remove</button></td>
    </tr>
  </tbody>
</table>

<p style="margin-left: 600px; opacity: 0.7">
  Note: <br/>
   E = Exam <br/>
   L = Lab <br/>
   A = Beginner <br/>
   B = Intermediate <br/>
   C = Expert <br/>
</p>

</body>
</html>