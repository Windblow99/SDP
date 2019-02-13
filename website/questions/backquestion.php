<?php

	$eno = $_GET['eno'];
	$qno = $_GET['qno'];
	$tno = $_GET['tno'];
	//$answer = $_POST['answer'];

	$conn = mysqli_connect("localhost","root","","educo")
    or die("<script>alert('error in db connection');<script>");

	/*$update = "UPDATE test SET UserAnswer = '$answer' WHERE T_No = ".$tno.";";
	mysqli_query($conn, $update);*/

    $select = "SELECT * from test WHERE T_NO = ".$tno.";";
    $result = mysqli_query($conn,$select)
    or die("<script>alert('Maybe select wrong table / columns');</script>");
      
    $count = (mysqli_num_rows($result)>=1? true:
    die("<script>alert('No data available in the table!');</script>"));
    $rows = mysqli_fetch_array($result);
    $ta = $rows['TrueAnswer'];
    $answer = $rows['UserAnswer'];

    $select2 = "SELECT * from result WHERE E_No = ".$eno.";";
    $result = mysqli_query($conn,$select2)
    or die("<script>alert('Maybe select wrong table / columns');</script>");
      
    $count = (mysqli_num_rows($result)>=1? true:
    die("<script>alert('No data available in the table!');</script>"));
    $rows = mysqli_fetch_array($result);
    $score = $rows['Score'];

    if($ta == $answer)
    {--$score;}

	$update = "UPDATE result SET Score = '$score' WHERE E_No = ".$eno.";";
	mysqli_query($conn, $update);
	
	--$tno;
	--$qno;

	echo ("<script>window.location.href='exam_MCQquestion.php?eno=".$eno."&tno=".$tno."&qno=".$qno."';</script>");

?>

  	