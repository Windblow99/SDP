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

<form class="justify-content-center" method="post" action="add_question_teacher_function.php" enctype="multipart/form-data" style="padding-top: 20px;">
	<div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Question</h4>
      </div>
      <div class="col">
        <textarea class="form-control" id="exampleFormControlTextarea1" name="question" rows="3" placeholder="Enter your question here..." required="required"></textarea>
      </div>
    </div>
  </div>

	<div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Chapter</h4>
      </div>
      <div class="col-4">
        <select class="form-control form-control-sm" name="chapter" required="required">
        <!--<option disabled selected>Select a chapter</option>-->
          <option>Chapter 1</option>
          <option>Chapter 2</option>  
          <option>Chapter 3</option>
          <option>Chapter 4</option> 
          <option>Chapter 5</option> 
          <option>Chapter 6</option>
          <option>Chapter 7</option>
          <option>Chapter 8</option>
          <option>Chapter 9</option>
          <option>Chapter 10</option>                 
      </select>
      </div>

      <!--<div class="col-2">
        <h4>Image</h4>
      </div>
      <div class="col-4">
        <input type="file" name="fileupload" class="form-control-file form-control-sm">
      </div>-->
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Format</h4>
      </div>
      <div class="col-4">
        <input type="text" name="format" value="MCQ" disabled="disabled" class="form-control form-control-sm">
        <!--<select class="form-control form-control-sm" name="format" id="format">
          <option disabled selected>Select a format</option>
          <option value='Text'>Text</option>
          <option value='MCQ'>MCQ</option>
        </select>-->
      </div>
      <div class="col-2">
        <h4>Difficulty</h4>
      </div>
      <div class="col-4">
        <select class="form-control form-control-sm" name="difficulty" required="required">
          <!--<option disabled selected>Select difficulty</option>-->
          <option>Exam</option>
          <option>Lab</option>
        </select>
        <!--<input type="text" name="difficulty" value="Exam" disabled="disabled" class="form-control form-control-sm">-->
      </div>
    </div>
  </div>

 <!--<div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Marks</h4>
      </div>
      <div class="col-4">
        <input type="number" class="form-control form-control-sm" name="mark" id="colFormLabelSm" placeholder="Enter marks here...">
      </div>
    </div>
  </div>-->

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>Selections</h4>
      </div>
      <div class="col">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4 style="text-align: right;">A</h4>
      </div>
      <div class="col-6">
        <input type="text" class="form-control form-control-sm" name="answer1" id="colFormLabelSm" placeholder="Enter first selection here..." required="required">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4 style="text-align: right;">B</h4>
      </div>
      <div class="col-6">
        <input type="text" class="form-control form-control-sm" name="answer2" id="colFormLabelSm" placeholder="Enter second selection here..." required="required">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4 style="text-align: right;">C</h4>
      </div>
      <div class="col-6">
        <input type="text" class="form-control form-control-sm" name="answer3" id="colFormLabelSm" placeholder="Enter third selection here..." required="required">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4 style="text-align: right;">D</h4>
      </div>
      <div class="col-6">
        <input type="text" class="form-control form-control-sm" name="answer4" id="colFormLabelSm" placeholder="Enter fourth selection here..." required="required">
      </div>
    </div>
  </div>

  <div class="container-fluid form-group" style="width: 80%;">
    <div class="row">
      <div class="col-2">
        <h4>True Answer</h4>
      </div>
      <div class="col-6">
      <select class="form-control form-control-sm" name="trueanswer" required="required">
        <option disabled selected>Select True Answer</option>
          <option>A</option>
          <option>B</option>  
          <option>C</option>
          <option>D</option>
        </select>
        <!--<input type="text" class="form-control form-control-sm" name="trueanswer" id="colFormLabelSm" placeholder="Enter true answer here.">-->
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