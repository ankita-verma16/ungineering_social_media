<?php
    include "db_connect.php";
    
    $response = array();
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
        
    }
    $user_id=$_SESSION['id'];
    $status=$_POST['status'];
    $sql="INSERT INTO statuses(id,status) VALUES ('$status', '$user_id')";
    
    $result=mysqli_query($conn,$sql);
    if(! $result){
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    
    $response['success'] = true;
    $response['message'] = "Status update successful";
    echo json_encode($response);
    mysqli_close($conn);
?>
