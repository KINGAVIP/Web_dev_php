<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login form using session and cookies</h2>
    <form action="validate.php"  method="post">
        <tr><th>Email</th><td><input type="text" id="email" name="email" value=""></td></tr>
        <tr><th>Password</th><td><input type="text" id="password" name="password" value=""></td></tr>
        </br>
        <tr><td colspan="2" align="center"><input type="checkbox" name="remember" id='remember' value="1">Remmber me</td></tr>
        </br>
        <tr><td colspan="2" align="right"><input type="submit" name="submit"></td></tr>
    </form>
</body>
</html>