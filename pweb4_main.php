<?php  
$name=$password="";
$namaer=$passworder="";
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $namaer="Please insert your name";    
            }else{
            $nama= test_input($_POST["name"]);}

            if(empty($_POST["password"])){
                $passworder="Required password"; 
            }else{
            $password= test_input($_POST["password"]);}
}
            function test_input($data){
            $data= trim($data);
            $data= stripslashes($data);
            $data= htmlspecialchars($data);
            return $data;
            }

if (isset($_POST['submit'])) {
    if ($_POST['password'] == "password" && $_POST['name'] == "BlueOcean"){
        $_SESSION['login'] = TRUE;
        $URL =isset($_SESSION['RedirectKe']) ? $_SESSION['RedirectKe']: 'welcome.php';
        header('location:'.$URL.'');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head><meta name="view" content="" scale="">
    <title>Schreiben | write it!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#formnya").hide();
        $("#loginshow").click(function(){
            $("#formnya").animate({
            height: 'toggle'
            });
        });
    });
    </script>
    <style>
        body {background-image: url(http://webneel.com/wallpaper/sites/default/files/images/04-2013/8-beach-sea-photography.1024.jpg);
            font-family: fantasy;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;}

        h1 {font-family: Garamond; color: black; font-size: 80px; text-align: center;}
        h2 {font-family: Garamond; color:white;text-align: center; font-size: 20px;}
        p {font-family: fantasy; color:#4d3267; font-size: 12px; text-align: center;}
        .content {
            width: 1000px;
            margin: 2px auto;}
        .content .title {
            background-color: #f5e6fe;
            padding: 3px 13px;
            background: rgba(235, 250, 250, 0.6);
        }
        .register{
            width: 500px;
            margin: 2px auto;
            text-align: center;
            font-style: Garamond;
            font-size: 20px;
            background: rgba(242, 230, 255, 0.6);
        }
        .errormsg{
            color: #990033;
        }

        .subreg{
            font-size: 12px;
            font-style: Garamond;
        }
    </style>
</head>

<body>
        <div class="content">
            <div class="title">
                <h1><b>Schreiben</b></h1>
                <h2>Write it!</h2>
                <p>All your dreams fulfilled</p>
            </div>
        </div>

    <h2>Register here</h2>




<div class="register"><button id="loginshow">Log in</button>
<div class="subreg">
<form action="" method="post" id="formnya">
    <p>*required</p>
    Username    <span class="errormsg">* <?php echo $namaer;?></span><br> <input type="text" name="name"><br><br>
    Password    <span class="errormsg">* <?php echo $passworder;?></span><br><input type="password" name="password" ><br><br>
    <input type="submit" name="submit" value="Enter"><br><br>

    <p>haven't registered yet? try:<br>
    username : BlueOcean<br>
    password : password<br>
</p>


</div>
</form>
</div>


</body>
</html>