<?php 
    session_start();
    require_once('db.php');?>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="login.css" rel="stylesheet" type="text/css" media="all" />
<

<body>
    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                </br>
                                <input type="submit" name="submit" class="btn btn-info btn-md"  value="submit">
                            </div>
                            <div id="register-link" class="text-right">

                                <a href="register.php" class="text-info">Register here</a>
                                
                            </div>
                            <div id="home" class="text-left">
                            
                            <a href="index.php" class="btn btn-info btn-sm" class="text-info">Home</a>
                            </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<?php
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

if(isset($_POST['username'])){
    $username = $_POST['username'];
	$password = $_POST['password'];
    $sql = "SELECT * FROM registration WHERE username='{$username}'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if($row['password'] == $password){
                $_SESSION['user'] = $row['username'];
                redirect('/rentAcar');
            }else{
                echo '<p style="color:red; text-align:center;">Your username or passsword is incorrect.</p>';
            }
        }
    }else{
        echo '<p style="color:red; text-align:center;">Your username or passsword is incorrect.</p>';
    }
}
?>