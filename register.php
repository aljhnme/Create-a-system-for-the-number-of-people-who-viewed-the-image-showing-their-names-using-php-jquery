<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <h1>Sign up</h1>
        <div class="container">
            <div class="sign-up-content">
                    <h2 class="form-title">What type of user are you ?</h2>
                    <div id="text_mass">
                        
                    </div>

        
                    <div class="form-textbox">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" />
                    </div>

                    <div class="form-textbox">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" />
                    </div>

                    <label for="password_2">Retype password</label>
                    <div class="form-textbox">
                        <input type="password" name="password_2" id="password_2" />
                    </div>
                    <br>
                    <div class="form-textbox">
                        <input type="submit" name="submit" id="insert_data" class="submit" value="Create account" />
                    </div>

                <p class="loginhere">
                    Already have an account ?<a href="login.php" class="loginhere-link"> Log in</a>
                </p>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

   <html>
<head>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>
    $( document ).ready(function() {
       
        $(document).on("click","#insert_data",function(){
           
                var username=$("#username").val();
                var password=$("#password").val();
                var password_2=$("#password_2").val();
                if (username != ""){
                
                if (password != "" && password_2 != "") 
                {

                if (password == password_2)
                {

                $.ajax({

                    url:"insert_data_register.php",
                    type:"post",
                    data:{username:username,password:password},
                    success:function(data)
                    {
                      $("#text_mass").html(data);
                    }
                });
                }else{
                       $("#text_mass").html('<h2 style="color:red;" class="form-title">Password does not match</h2>');
                }
                }else{
                   $("#text_mass").html('<h2 style="color:red;" class="form-title">Please fill in the password fields correctly</h2>');
                }
                }else{
                
                       $("#text_mass").html('<h2 style="color:red;"  class="form-title">please add username</h2>');
              }
             });
           });
    </script>
</body>
</html>
