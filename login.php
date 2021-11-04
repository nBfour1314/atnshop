<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logoor-rbg.png">
    <title>ATN Shop</title>
    <link rel="stylesheet" href="stylefunction.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div id="wrap_login">
        <form action="" id="form-login">
            <h1 class="form-heading">LOGIN</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Username">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Password">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            
            <div class="form-group">
                <input type="submit"  value="SIGN UP" class="form-submit">
                <input type="submit" value="CANCEL" class="form-submit">                
            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    $(document).ready(function(){
        $('#eye').click(function(){
            $(this).toggleClass('open');
            $(this).children('i').toggleClass('fa-eye-slash fa-eye');
            if($(this).hasClass('open')){
                $(this).prev().attr('type', 'text');
            }
            else{
                $(this).prev().attr('type', 'password');
            }
        });
    });
</script>
</html>