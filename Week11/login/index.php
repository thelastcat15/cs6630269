<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="main.css">
<script>
    class CheckColumn {
        constructor(column) {
            this.column = column;
            this.xmlHttp = new XMLHttpRequest();
        }

        check() {
            document.getElementById(this.column).className = "thinking";
            
            this.xmlHttp.onreadystatechange = () => this.showStatus();
            
            var username = document.getElementById(this.column).value;
            var url = "checkName.php?"+this.column+"=" + username;
            this.xmlHttp.open("GET", url);
            this.xmlHttp.send();
        }

        showStatus() {
            if (this.xmlHttp.readyState == 4 && this.xmlHttp.status == 200) {
                if (this.xmlHttp.responseText == "okay") {
                    document.getElementById(this.column).className = "approved";

                } else {
                    document.getElementById(this.column).className = "denied";
                    document.getElementById(this.column).focus();
                    document.getElementById(this.column).select();
                }
            }
        }
    }

    const checkEmail = new CheckColumn("email")
    const checkUsername = new CheckColumn("username")
</script>
</head>

<body>
	<form>
		<h1>Please register:</h1>
		Email:<input id="email" type="text" onblur="checkEmail.check()"><br>
		Username:<input id="username" type="text" onblur="checkUsername.check()"><br>
		First Name:<input type="text" name="firstname"><br> 
		Last Name:<input type="text" name="lastname"><br> 
		Email:<input type="text" name="email"><br> 
		<input type="submit" value="Register">
	</form>
</body>
</html>
