<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="div">
        <form  method="get">
            <label for="login">Username</label>
            <input type="text" id="fname" name="fname" ><br><br>
            <label for="password" >Password</label>
            <input  id="lname" type="password" name="lname"><br><br>
            <button onclick="myFunction()">login</button>
            <a href="https://instagram.com/" id="a"></a>

          </form>
          

          
    </div>
    <h1 id="demo"></h1>
    <script> 
      function myFunction(){
var x = document.getElementById('fname').value
var b = document.getElementById('lname').value
var form = document.querySelector('form')

document.getElementById("demo").innerHTML = x;



if (x == "akylbek" , b == "12345"){
    form.setAttribute("action", "https://instagram.com/")

}else{
    alert("permission denied")
}

}
    </script>
</body>
</html> -->


<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image:url("img/bg.png") ; color: #ddd;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  text-align: center;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="" style="border:1px solid #ccc">
  <div class="container">
    <h1 style="text-align: center;">Sign Up</h1>
    <p style="text-align: center;" >Please fill in this form to create an account.</p>
    <hr>

    <label type="email" size="32" required name="email" style="text-align: center;"><b >Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="fname"required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="lname" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="bname" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p style="text-align: center;">By creating an account you agree to our <a href="https://policies.google.com/" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn" >Cancel</button>
      <button type="submit" onclick="myFunction()"class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
    <script> 
      function myFunction(){
var x = document.getElementById('fname').value
var b = document.getElementById('lname').value
var c = document.getElementById('bname').value
var form = document.querySelector('form')

if (x == "nurel011" && b == "5555" && c=="5555"){
    form.setAttribute("action", "/main.php")

}else{
    alert("permission denied")
}

}
    </script>
</body>
</html>
