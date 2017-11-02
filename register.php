<!DOCTYPE html>
<html >
<head>
  <title>register Form</title>
    <style>
        body
        {
	       margin: 0;
           padding: 0;
	       font-family: Arial;
          font-size: 12px;
        }

        .body
        {
	       position: absolute;
	       top: -20px;
	       left: -20px;
           right: -40px;
	       bottom: -40px;
	       width: auto;
	       height: auto;
	       background-size: cover;
	       filter: blur(5px);
	       z-index: 0;
        }

        .grad
        {
	       position: absolute;
	       top: -20px;
	       left: -20px;
	       right: -40px;
	       bottom: -40px;
	       width: auto;
           height: auto;
	       background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65)));
	       z-index: 1;
	       opacity: 1.0;
        }

        .header
        {
           position: absolute;
	       top: calc(50% - 35px);
	       left: calc(50% - 255px);
	       z-index: 2;
        }

        .header div
        {
	       float: left;
	       color: #fff;
	       font-family: 'Exo', sans-serif;
	       font-size: 35px;
	       font-weight: 200;
        }

        .header div span
        {
            color: #5379fa !important;
        }

        .register
        {
	       position: absolute;
	       top: calc(25% - 75px);
           left: calc(50% - 50px);
	       height: 950px;
           width: 450px;
	       padding: 10px;
	       z-index: 3;
        }

        .register input[type=text]
        {
           width: 250px;
	       height: 30px;
           background: transparent;
	       border: 1px solid rgba(255,255,255,0.6);
           border-radius: 2px;
    	   color: #fff;
           font-family: 'Exo', sans-serif;
	       font-size: 16px;
	       font-weight: 400;
	       padding: 4px;
        }
        .register input[type=number]
        {
           width: 250px;
	       height: 30px;
           background: transparent;
	       border: 1px solid rgba(255,255,255,0.6);
           border-radius: 2px;
    	   color: #fff;
           font-family: 'Exo', sans-serif;
	       font-size: 16px;
	       font-weight: 400;
	       padding: 4px;
        }
        .register input[type=tel]
        {
           width: 250px;
	       height: 30px;
           background: transparent;
	       border: 1px solid rgba(255,255,255,0.6);
           border-radius: 2px;
    	   color: #fff;
           font-family: 'Exo', sans-serif;
	       font-size: 16px;
	       font-weight: 400;
	       padding: 4px;
        }

        .register input[type=email]
        {
           width: 250px;
	       height: 30px;
           background: transparent;
	       border: 1px solid rgba(255,255,255,0.6);
           border-radius: 2px;
    	   color: #fff;
           font-family: 'Exo', sans-serif;
	       font-size: 16px;
	       font-weight: 400;
	       padding: 4px;
        }

        .register input[type=password]
        {
	       width: 250px;
	       height: 30px;
	       background: transparent;
           border: 1px solid rgba(255,255,255,0.6);
	       border-radius: 2px;
           color: #fff;
	       font-family: 'Exo', sans-serif;
	       font-size: 16px;
	       font-weight: 400;
	       padding: 4px;
            margin-top: 10px;
        }

        .register input[type=submit]
        {
	       width: 260px;
	       height: 35px;
	       background: #fff;
	       border: 1px solid #fff;
	       cursor: pointer;
	       border-radius: 2px;
	       color: #a18d6c;
	       font-family: 'Exo', sans-serif;
	       font-size: 16px;
	       font-weight: 400;
	       padding: 6px;
	       margin-top: 10px;
        }

        a{
            font-size: 16px;
	       font-weight: 400;
            color:white;
            text-align: center;
            text-decoration: none;
        }
        .register input[type=submit]:hover
        {
	       opacity: 0.8;
        }

        .register input[type=submit]:active
        {
	       opacity: 0.6;
        }

        .register input[type=text]:focus
        {
	       outline: none;
	       border: 1px solid rgba(255,255,255,0.9);
            }

        .register input[type=password]:focus
        {
	       outline: none;
	       border: 1px solid rgba(255,255,255,0.9);
        }

        .register input[type=submit]:focus
        {
	       outline: none;
        }

        ::-webkit-input-placeholder
        {
            color: rgba(255,255,255,0.6);
        }

        ::-moz-input-placeholder
        {
            color: rgba(255,255,255,0.6);
        }
    </style>

</head>
<script>
function validate() {
    var x = document.forms["register"]["firstname"].value;
    if (x == ""||x==null) {
        alert("Please Enter Your Firstname");
        return false;
    }
    var x = document.forms["register"]["lasttname"].value;
    if (x == ""||x==null) {
        alert("Please Enter Your Lastname");
        return false;
    }

    var x = document.forms["register"]["email"].value;
    if (x == "") {
        alert("Please Enter Your Email");
        return false;
    }
    var x1 = document.forms["register"]["pass"].value;
    if (x1 == ""||x1.length<6) {
        alert("Please Enter Password");
        return false;
    }
	var x2 = document.forms["register"]["cpass"].value;
    if (x1 != x2) {
        alert("Password does not matched");
        return false;
    }

	var x3 = document.forms["register"]["phone"].value;
    if (x3 == ""||x3.length<9 ) {
        alert("Please Enter Phone no.");
        return false;
    }

}
</script>

<body background="wall03.jpg">

 <form  name="register" action="registerp.php" method="POST">
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
            <div>Site<span>Logo</span></div><br>
            <div>Site<span>Name</span></div>
		</div>
		<br>
		<div class="register">
				<input type="text" autocomplete="on" placeholder="First Name" name="firstname"><br><br>

                <input type="text" autocomplete="on" placeholder="Last Name" name="lastname"><br><br>

                <input type="email" autocomplete="on" placeholder="Email" name="email"><br>

                <input type="password" placeholder="Password" name="pass"><br>

                <input type="password" placeholder="Confirm-Password" name="cpass"><br><br>

                <input type="tel" autocomplete="on" placeholder="Phone no" name="phone"><br><br>

               <input type="submit" value="Register" name="sub" onclick="validate()" >
                <br><br>

            <a href="login.html">Already registered? Login here.</a>



		</div>
    </form>
</body>
</html>
