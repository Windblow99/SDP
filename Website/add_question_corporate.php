<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Add Questions (Corporate)</title>

<style>
  h4{
    font-size: 0.5em;
    color: #CC2865;
  }

  .questionbuttons{
    text-indent: 75%;
  }
</style>

</head>

<body>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/navbar.php'); ?>

<br/>

<div class="container-fluid title">
  <div class="row-xl">
    <b>ADD A QUESTION</b>
</div>

<hr>

<form class="justify-content-center">
	<div class="container-fluid form-group" style="width: 83%;">
    <div class="row">
      <div class="col-2">
        <h4>Question</h4>
      </div>
      <div class="col">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your question here..."></textarea>
      </div>
    </div>
  </div>

	<div class="container-fluid form-group" style="width: 83%;">
    <div class="row">
      <div class="col-2">
        <h4>Image</h4>
      </div>
      <div class="col-4">
        <input type="file" class="form-control-file form-control-sm">
      </div>
      <div class="col-2">
        <h4>Certificate</h4>
      </div>
      <div class="col-4">
        <select class="form-control form-control-sm">
        <option disabled selected>Select a certificate</option>
      </select>
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 83%;">
    <div class="row">
      <div class="col-2">
        <h4>Format</h4>
      </div>
      <div class="col-4">
        <select class="form-control form-control-sm">
          <option disabled selected>Select a certificate</option>
          <option>Text</option>
          <option>MCQ</option>
        </select>
      </div>
      <div class="col-2">
        <h4>Marks</h4>
      </div>
      <div class="col-4">
        <input type="number" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter marks here...">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 83%;">
    <div class="row">
      <div class="col-2">
        <h4>Selections</h4>
      </div>
      <div class="col">
        <input type="number" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter first selection here...">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 83%;">
    <div class="row">
      <div class="col-2">
      </div>
      <div class="col">
        <input type="number" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter second selection here...">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 83%;">
    <div class="row">
      <div class="col-2">
      </div>
      <div class="col">
        <input type="number" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter third selection here...">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 83%;">
    <div class="row">
      <div class="col-2">
      </div>
      <div class="col">
        <input type="number" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Enter fourth selection here...">
      </div>
    </div>
  </div>

  <div class="container-fluid questionbuttons">
    <div class="col">
      <button type="button" class="btn btn-secondary">Add Question</button>
    </div>
  </div>
  
</form>



</body>

</html>