




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <title>Register</title>

<style>
   body, html {
  height: 100%;
}

h1{
    font-size: 3em;
}

.container{
    opacity: 0.9;
    width: 35%;
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
        function goLogin() {
          location.replace("login.php")
        }

        function checkempty(){
           if(document.getElementById('fname').value==""){
               alert("กรุณาป้อนข้อมูลให้ครบถ้วน");
               document.getElementById('fname').style.borderColor = "red";
               return false;
           }
           if(document.getElementById('lname').value==""){
               alert("กรุณาป้อนข้อมูลให้ครบถ้วน");
               document.getElementById('lname').style.borderColor = "red";
               return false;
           }
           if(document.getElementById('email').value==""){
               alert("กรุณาป้อนข้อมูลให้ครบถ้วน");
               document.getElementById('email').style.borderColor = "red";
               return false;
           }
           if(document.getElementById('username').value==""){
               alert("กรุณาป้อนข้อมูลให้ครบถ้วน");
               document.getElementById('username').style.borderColor = "red";
               return false;
           }
           if(document.getElementById('password').value==""){
               alert("กรุณาป้อนข้อมูลให้ครบถ้วน");
               document.getElementById('password').style.borderColor = "red";
               return false;
           }
           if(document.getElementById('repassword').value==""){
               alert("กรุณาป้อนข้อมูลให้ครบถ้วน");
               document.getElementById('repassword').style.borderColor = "red";
               return false;  
        }
        if(document.getElementById('password').value != document.getElementById('repassword').value){
               alert("กรุณาตรวจสอบรหัสผ่าน");
               document.getElementById('repassword').style.borderColor = "red";
               return false;
           }
    }

    
       

</script>

</head>
<body >
    <div class="bg">
<br><br>
<div class="container ">
        <div class="notification">
                        <center>
                        <h1>ระบบลงทะเบียน</h1>
                        <br>
                        
                  
                        <div class="field">
                                <div class="control">
                                  <input class="input is-info is-medium" type="text" placeholder="ชื่อ" id="fname">
                                 
                                </div>
                              </div>

                        <div class="field">
                                    <div class="control">
                                            <input class="input is-info is-medium" type="text" placeholder="นามสกุล" id="lname">
                                    </div>
                                  </div>   
                                     
                        <div class="field" class="mail">
                                        <div class="control">
                                                <input class="input is-info is-medium" type="text" placeholder="E-mail" id="email" >
                                        </div>
                                      </div>        
                                   
                        <div class="field">
                                            <div class="control">
                                                    <input class="input is-info is-medium" type="text" placeholder="Username" id="username">
                                            </div>
                                          </div>   


                                          <form class="pure-form">
                                                <fieldset>
                                                                       
                        <div class="field">
                                <div class="control">
                                        <input class="input is-info is-medium" type="text" placeholder="Password" id="password">
                                </div>
                              </div>    

        <div class="field">
                                    <div class="control">
                                            <input class="input is-info is-medium" type="text" placeholder="Repeat-Password" id="repassword">
                                    </div>
                                  </div> 
                                                </fieldset>
                                            </form>
                        

                        <div>
                            <br>
                                <a class="button is-primary is-medium " name="register_btn" onclick="checkempty()" >บันทึก</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <a class="button is-primary is-medium " onclick="goLogin()">Login</a>
                          
                        </div>
                
                  
                        <br>
                    </center>
                  </div>
                </div>
               </div>

           

</body>
</html>