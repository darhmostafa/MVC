<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <h1>Login</h1>
    <form action="postLogin" method="POST">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit">
    </form>
</body>
</html>