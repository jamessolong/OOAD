<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <title>Login</title>

<style>
   body, html {
  height: 100%;
}

h1{
    font-size: 3em;
}

.container{
    opacity: 0.9;
    width: 30%;
}

.bg { 
 
  background-image: url("bg1.jpg");
  opacity: 0.8;
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

<script>
        function goRegister() {
          location.replace("register.php")
        }
</script>

</head>
<body>
    <div class="bg">
<br><br>
<div class="container ">
        <div class="notification">
                        <center>
                        <h1>Login</h1>
                        <br>
                        <div class="frm">
                       <form action="process.php" method="POST">
                                    <p>
                                  <input class="input is-info is-medium" type="text" placeholder="UserName" id="username" name="username">
                                   </p>
                                   <br>
                                    <p>
                                      <input class="input is-info is-medium" type="password" placeholder="Password" id="password" name="password">
                                   </p>

                                  &nbsp;&nbsp;&nbsp;
                              <p>
                                <input class="button is-primary is-medium " type="submit" id="btn" value="&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a class="button is-primary is-medium ">ลืมรหัสผ่าน</a>
                              </p>   
                        
                      </form>
                    </div>

       
                        <br>
                    </center>
                  </div>
                </div>
                <br><br>
                <center>
                        <a class="button is-danger  is-large" onclick="goRegister()">ลงทะเบียน</a>
                </center>
              
                
</div>
</body>
</html>