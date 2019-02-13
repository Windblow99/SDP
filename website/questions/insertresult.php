<?php	
	$eno = $_GET['eno'];

	$conn = mysqli_connect("localhost","root","","educo")
    or die("<script>alert('error in db connection');<script>");

    $select = "SELECT * from result WHERE E_NO = '$eno';";
    $result = mysqli_query($conn,$select)
    or die("<script>alert('Maybe select wrong table / columns');</script>");
      
    $count = (mysqli_num_rows($result)>=1? true:
    die("<script>alert('No data2 available in the table!');</script>"));
    $rows = mysqli_fetch_array($result);
    $score = $rows['Score'];

    $select2 = "Select * from test";
    $result = mysqli_query($conn,$select2)
    or die("<script>alert('Maybe select wrong table / columns');</script>");
      
    $count = (mysqli_num_rows($result)>=1? true:
    die("<script>alert('No data3 available in the table!');</script>"));
            
    While($rows = mysqli_fetch_array($result))
    {
    	$qno = $rows['Q_No'];
    	$chapter = $rows['Chapter'];
        $trueanswer = $rows['TrueAnswer'];
        $useranswer = $rows['UserAnswer'];

    $insert = "INSERT INTO student_question (Q_No, E_No, S_QAnswer, TrueAnswer) VALUES ('$qno', '$eno', '$useranswer', '$trueanswer');";
  
    mysqli_query($conn, $insert);
  
    if (mysqli_affected_rows($conn) <= 0)
    {
      echo "<script>alert('Insert Failed!');</script>";
      die ("<script>window.history.go(-1);</script>");
    }

	}
	$select3 = "SELECT * from question WHERE Q_NO = '$qno';";
    $result = mysqli_query($conn,$select3)
    or die("<script>alert('Maybe select wrong table / columns');</script>");
      
    $count = (mysqli_num_rows($result)>=1? true:
    die("<script>alert('No data1 available in the table!');</script>"));
    $rows = mysqli_fetch_array($result);
    $mark = $rows['Mark'];

    $finalmark = $mark * $score;

	$update = "UPDATE result SET E_Result = '$finalmark' WHERE E_No = ".$eno.";";
	mysqli_query($conn, $update);

	$update2 = "UPDATE result SET EndTime = NOW() WHERE E_No = ".$eno.";";
	mysqli_query($conn, $update2);

	$delete = "Delete from test where Chapter = '$chapter';";
	mysqli_query($conn, $delete);
	
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('Unable to delete the data!');</script>";
		die ("<script>window.history.go(-1);</script>");
	}

    echo ("<script>window.location.href='/website/student/studentmainpage.php';</script>");	
?>