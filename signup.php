<?php 

include("nav.php");

if(isset($_POST["save"])){
    $name = $_POST["uname"];
    $email = $_POST["uemail"];
    $password = $_POST["upass"];
    $address = $_POST["uaddress"];
    $phone = $_POST["uphone"];
    $role = 'user';
    $postuserdata = "INSERT into users (name , email , password , address , phone , role) VALUE ('$name' , '$email' , '$password' ,'$address' , '$phone' ,'$role') ";
    $res = mysqli_query($conn, $postuserdata);
    if($res){
        echo "<script>alert('success')</script>";
    }
}

?>


        <!-- login -->
        <div class="container login">
            <div class="row">
                <div class="col-md-4" id="side1">
                    <h3>Welcome Back!!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <div id="btn"><a href="login.html">Login</a></div>
                </div>
                <div class="col-md-8" id="side2">
                <form action="" method="post">
                    <h3>Create Account</h3>
                    <div class="inp">
                        <input name="uname" type="text" placeholder="Name" required>
                        <input name="uemail" type="email" placeholder="Email" required>
                        <input name="upass" type="text" placeholder="Password" required>
                        <input name="uaddress" type="text" placeholder="Address" required>
                        <input name="uphone" type="text" placeholder="Phone number" required>
                    </div>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <div class="icons">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div id="login"><button type="submit" name="save">SIGN UP</button></div>
                </form>
                </div>
            </div>
        </div>
        <!-- login -->


<?php 

include("footer.php");

?>