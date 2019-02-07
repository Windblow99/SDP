<html>

<head>

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/header.php'); ?>

<title>Add Questions</title>

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

<?php include($_SERVER["DOCUMENT_ROOT"].'/template/teachernavbar.php'); ?>

<br/>

<div class="container-fluid title">
  <div class="row-xl">
    <b>ADD A QUESTION</b>
</div>

<hr>

<form class="justify-content-center" method="post" action="add_question_teacher_function.php" enctype="multipart/form-data" style="padding-top: 30px;">
	<div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Question</h4>
      </div>
      <div class="col">
        <textarea class="form-control" id="exampleFormControlTextarea1" name="question" rows="3" placeholder="Enter your question here..."></textarea>
      </div>
    </div>
  </div>

	<div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Image</h4>
      </div>
      <div class="col-4">
        <input type="file" name="fileupload" class="form-control-file form-control-sm">
      </div>

      <div class="col-2">
        <h4>Chapter</h4>
      </div>
      <div class="col-4">
        <select class="form-control form-control-sm" name="chapter">
        <option disabled selected>Select a chapter</option>
          <option>Chapter 1</option>
          <option>Chapter 2</option>  
          <option>Chapter 3</option>                
      </select>
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Format</h4>
      </div>
      <div class="col-4">
        <select class="form-control form-control-sm" name="format">
          <option disabled selected>Select a format</option>
          <option>Text</option>
          <option>MCQ</option>
        </select>
      </div>
      <div class="col-2">
        <h4>Difficulty</h4>
      </div>
      <div class="col-4">
        <select class="form-control form-control-sm" name="difficulty">
          <option disabled selected>Select difficulty</option>
          <option>Beginner</option>
          <option>Intermediate</option>
          <option>Expert</option>
        </select>
      </div>
    </div>
  </div>

 <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Marks</h4>
      </div>
      <div class="col-4">
        <input type="number" class="form-control form-control-sm" name="mark" id="colFormLabelSm" placeholder="Enter marks here...">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Selections</h4>
      </div>
      <div class="col">
        <input type="text" class="form-control form-control-sm" name="answer1" id="colFormLabelSm" placeholder="Enter first selection here...">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
      </div>
      <div class="col">
        <input type="text" class="form-control form-control-sm" name="answer2" id="colFormLabelSm" placeholder="Enter second selection here...">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
      </div>
      <div class="col">
        <input type="text" class="form-control form-control-sm" name="answer3" id="colFormLabelSm" placeholder="Enter third selection here...">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
      </div>
      <div class="col">
        <input type="text" class="form-control form-control-sm" name="answer4" id="colFormLabelSm" placeholder="Enter fourth selection here...">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>True Answer</h4>
      </div>
      <div class="col">
        <input type="text" class="form-control form-control-sm" name="trueanswer" id="colFormLabelSm" placeholder="Enter true answer here.">
      </div>
    </div>
  </div>

  <div class="container-fluid questionbuttons">
    <div class="col">
      <input type="submit" value="Add Question" class="btn btn-secondary">
      <!--<button type="button" class="btn btn-secondary">Add Question</button>-->
    </div>
  </div>
  
</form>



</body>

</html>