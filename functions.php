<?php



function renderHome(){
   header("Location: home.php"); 
}


function renderServices(){
   echo "<h1>Servisi</h1>";
    
}


function theySayAboutUs(){
   echo "<h1>Rekli su o nama</h1>";      
}


function clients(){
   echo "<h1>Klijenti</h1>";      
}


function contact(){
   echo "<h1>Kontakt</h1>";      
}

function renderLogin(){
    header("Location: login.php");
}

//redirect function
function redirect($url){
    header("Location: $url");
}


function confirmQuery($result){

    global $connection;
    
    if(!$result){
            die("Query FAILED" . mysqli_error($connection));
        }    
}


//check if method is set
function ifItIsMethod($method = ''){
    
    if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){
        return true;
    }
    else{
        return false;
    }
}


//log user and start session
function loginUser($username, $password){
    
    echo $username;
    global $connection;
    $username = trim($username);
    $password = trim($password);
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    
    $query = "SELECT * FROM user WHERE username = '$username'";
    $select_user_query = mysqli_query($connection, $query);
    
    if(!$select_user_query){
        die ("Query failed" . mysqli_error($connection));
    }
    
    
    while ( $row = mysqli_fetch_array($select_user_query)){
        
       $db_user_id = $row['user_id'];
       $db_username = $row['username'];
       $db_user_password = $row['user_password'];    
       $db_user_firstname = $row['user_firstname'];
       $db_user_lastname = $row['user_lastname'];
       $db_user_role= $row['user_role'];

        if($password === $db_user_password){
            
            session_start();
            
            $_SESSION['username'] = $db_username;
            $_SESSION['firstname'] = $db_user_firstname;
            $_SESSION['lastname'] = $db_user_lastname;
            $_SESSION['user_role'] = $db_user_role;
            
            redirect("/amplitudo/invictus/admin/");            
        }
        else{
            return false;
        }
    }
    
    return true;
}
// end of logging user and session start

//checks if user is logged
function isLoggedIn(){
    
    if(isset($_SESSION['user_role'])){
        
        return true;
        
    }
    
    return false;
    
}
//end of islogged in
function escape($string){
    
    global $connection;
    return mysqli_real_escape_string($connection, trim($string));    
}



function countFromDb($column, $table){
    
    global $connection;
    $query = "SELECT COUNT($column) FROM $table";
    $num_of_columns = mysqli_query($connection, $query);
    confirmQuery($num_of_columns);
    $row = mysqli_fetch_assoc($num_of_columns);
    $num_of_columns = $row["COUNT($column)"];

    return $num_of_columns;
}


//image placeholder, if there is no pic put this one for admin avatar

function imagePlaceholder($image=''){
    
    if(!$image){
        
        return 'noImage-avatar.png';
    } else {
        return $image;
    }
}