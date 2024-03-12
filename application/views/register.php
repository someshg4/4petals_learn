<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4petals</title>
       <!-- link style sheet -->
       <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/flaticon-uicons/css/all/all.css">
    <!-- tailwind -css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- bootstrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<section id="nav_sec" class=" shadow-sm">

<div class="container border-gray-200">
    <div class="nav_section p-2 flex justify-between items-center" style="border-bottom: 1px solid #e7e7e7;">
        <div class="nav_logo">
            <a href="index.php"> <img src="<?= base_url(). "assets/logo.png" ?>" alt="">
            </a>
        </div>

        

        <div class="nav_buttons grid justify-items-center">
            <img src="assets/svg-icons/user.svg" alt="" class="w-6 md:w-9">
            <a href="" class="text-sm text-gray-500">
                <p class="text-xs md:text-sm mt-1 hover:text-black font-medium">Register</p>
            </a>
        </div>
    </div>
   



</div>

</section>

    <div class="signin">


        <div class="col-12 signup_container ">
            <div class="signup_section">
                <div class="form_header">
                    <h2>Sign Up</h2>
                </div>
                <div class="form_section">
                    <form action="#">
                        <table>
                            <tr>
                                <td>Username</td>
                                <td>
                                    <div class="in__box">
                                        <input type="text" placeholder="Enter your name" id="user_input">
                                    </div>
                                </td>
                                <span class="err_msg">User name innvalid</span>
                            </tr>
                            <tr>
                                <td>Phone no</td>
                                <td>
                                    <div class="in__box">
                                        <input type="Mobile" placeholder="Enter your number" id="mobile_input">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Email </td>
                                <td>
                                    <div class="in__box">
                                        <input type="Mobile" placeholder="Enter your Email" id="email_input">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <div class="in__box">
                                        <input type="password" placeholder="Password">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>
                                    <div class="in__box">
                                        <input type="password" placeholder="Confirm Password">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="checkbox_cont">
                    <p><input type="checkbox" name="" id="">I accept the terms and conditions</p>
                </div><br>
                <div class="signin_btn">
                    <a href="#" id="register_submit">Sign In</a>
                </div><br>
                <div class="forget_content">
                    <a href="#">Forget Password?</a>
                </div>
                <div class="last_content">
                    <p>Already have an account?<a href="#">Login</a></p>
                </div>

            </div>

        </div>
    </div>


<script>

    let userName = document.getElementById("user_input")
    let mobileNumber = document.getElementById("mobile_input")
    let userEmail = document.getElementById("email_input")
    let register_btn = document.querySelector("#register_submit")
 

    phoneRegix = /^\d{10}/g

    register_btn.addEventListener("click", ()=>{
        if(phoneRegix(mobileNumber) != true ){
            console.log("No")
        }
    })


</script>
<!-- bootstrap script -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
</body>
</html>