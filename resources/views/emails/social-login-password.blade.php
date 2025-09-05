<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <p>Hello {{ $user->name }},</p>

    <p>Welcome to our site! Here is your temporary password:</p>

    <p><strong>{{ $password }}</strong></p>

    <p>Please log in and change your password as soon as possible.</p>

    <p>Thank you!</p>
</body>
</html>