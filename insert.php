<?php 

include 'connect.php';


if(isset($_POST['submit'])){
    $idnum = $_POST['st_idnum'];
    $name = $_POST['st_name'];
    $course = $_POST['st_course'];

    insertStuds($idnum,$name,$course, $conn);

}

function insertStuds($idnum,$name,$course, $conn){

    $sql = "INSERT INTO students(stud_id_num,stud_name,stud_course) VALUES('$idnum','$name','$course')";
  
    if(mysqli_query($conn, $sql)){
      echo "Data saved!";
      header('Location: index.php');
    }else{
      echo mysqli_error($conn);
    }
  
  
  }