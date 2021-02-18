<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <h1>Sign up</h1>
        <div class="container">
            <div class="sign-up-content">
                    <h2 class="form-title">Enter your information</h2>
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

                    <div class="form-textbox">
                        <input type="submit" name="submit" id="insert_data_login" class="submit" value="Login" />
                    </div>

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
       
        $(document).on("click","#insert_data_login",function(){
           
                var username=$("#username").val();
                var password=$("#password").val();
                var password_2=$("#password_2").val();
                if (username != ""){
                
                if (password != "") 
                {

                $.ajax({

                    url:"insert_data_login.php",
                    type:"post",
                    data:{username:username,password:password},
                    success:function(data)
                    {
                      $("#text_mass").html(data);
                    }
                });
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
