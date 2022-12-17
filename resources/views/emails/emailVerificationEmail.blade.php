<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Email Verification Mail</h1>
        
        Please verify your email with bellow link: 
        <a href="{{ route('user.verify', $token) }}">Verify Email</a>
</body>
</html>