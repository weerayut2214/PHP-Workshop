<?php include 'template/header.php'; ?>
<?php
    if($_SESSION['username']){
        header('Location: home.php');
        exit();
    }
?>
<br>
<?php
    $action = $_GET['action'];
    if($action){
        if($action === 'register'){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $name = $_POST["name"];
            $lastname = $_POST["lastName"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
        
            $hashPassword = hash('SHA256', $password);
            echo 'Worked.';
            $sql = "INSERT INTO table_member 
            (member_username,member_password,member_role,member_name,member_lastName,member_email,member_gender) VALUES ('$username','$hashPassword','0','$name','$lastname','$email','$gender')";
            $result = $conn->exec($sql);
            
            if($result){
                echo "<script>alert('ลงทะเบียนสำเร็จ !')</script>";
                echo "<script>window.location ='login.php'</script>";
            }
            else{
                echo "<script>alert('ลงทะเบียนไม่สำเร็จ !')</script>";
                echo "<script>window.history.back()</script>";
            }
        }
    }
?>
<div class="container">
    <form action="register.php?action=register" method="post">

    <div class="form-group" >
        <label for="username">Username</label>
        <input type="text" placeholder="username" name="username" id="" class="form-control">
    </div>

    <div class="form-group" >
        <label for="password">Password</label>
        <input type="password" placeholder="password" name="password" id="" class="form-control">
    </div>

    <div class="form-group" >
        <label for="name">Name</label>
        <input type="text" placeholder="name" name="name" id="" class="form-control">
    </div>

    <div class="form-group" >
        <label for="lastName">LastName</label>
        <input type="text" placeholder="lastName" name="lastName" id="" class="form-control">
    </div>

    <div class="form-group" >
        <label for="email">Email</label>
        <input type="email" placeholder="email" name="email" id="" class="form-control">
    </div>

        <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gender1" value="M">
        <label class="form-check-label" for="gender1">
            M
        </label>

        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gender2" value="F">
        <label class="form-check-label" for="gender2">
            F
        </label>
        </div>

    <div class="form-check" >
        <input type="submit" class="btn btn-primary" value="Register">
    </div>

    </form>
</div>

<?php include 'template/footer.php'; ?>