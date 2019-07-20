<?php
    session_start();
?>
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
    
    
    $email=$_POST['email'];   
    $password=$_POST['password'];
    
    $sql="SELECT * FROM users";    
    $result=mysqli_query($conn,$sql);
    if(! $result){
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();
    }
    
    $check=0;
    
    while ($row=mysqli_fetch_array($result)){
        if ($row['email']==$email && $row['password']==$password){
            $check=1;
            break;
        }
    }
    if($check==1) {
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        $response['success'] = true;
        $response['message'] = "Hello " . $row['name'];
        
    } else {  
        $response['success'] = false;
        $response['message'] = "Login failed";
    }
    
    echo json_encode($response);
    mysqli_close($conn);
    
?>
        
