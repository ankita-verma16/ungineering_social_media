<?php
    $hostname="127.0.0.1";
    $username="root";
    $db_password="saloni123";
    $db_name="social_media";
    
    $conn=mysqli_connect($hostname,$username,$db_password,$db_name);
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    
    
    $email=$_POST['email'];   
    $password=$_POST['password'];
    
    $sql="SELECT * FROM users";    
    $result=mysqli_query($conn,$sql);
    if(! $result){
        die("Error:".$sql."<br/>".mysqli_error($conn));
    }
    $check=0;
    
    while ($row=mysqli_fetch_array($result)){
        if ($row['email']==$email && $row['password']==$password){
            $check=1;
            break;
        }
    }
    if($check==1) {
        echo "Hello!" .$row['name']."</br>";
        
    } else {  
        echo "invalid user";
    }
    
    
    mysqli_close($conn);
    
?>
        
