<?php
   if(Session::get('logindtl')){
    redirect('menu');
    exit;
}
$error=null;
if(isset($_POST['username'])){
   
    extract($_POST);
    if(Session::get('attempt')<3){
    $username=addslashes($username);
    $password=md5($password);
    if(trim($username)){
    $sql="select id,username,password from users where username='$username' and password='$password'";
    $data= db('users')->custom($sql,0);
    if($data && is_array($data) && $data['password']==$password){
Session::set('logindtl',$data);
redirect('menu');
    }
    else{
        Session::set('attempt',Session::get('attempt')?(Session::get('attempt')+1):1);
        $error= "Enter valid username and password";
    }
    
}

else{
    $error="Enter Username or password both";
}
}
else{
$error="You are blocked";
}
}
?>
<form method="post">
<div class="cont">
            <div class="pagetitle">
                Login <span>Form</span>
            </div>
            <?php if($error){?>
            <div class="alert alert-danger">
                <?=$error;?>
            </div>
            <?php }?>
          <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" id="username" autofocus name="username" required class ="form-control" placeholder="Enter Username">
                </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class ="form-control" placeholder="Enter Password" required>
            </div>
            <div class="mb-4 text-center">
                <button type="submit" class="login-btn">Login</button>
            </div>
            </div>
        </form>
    


