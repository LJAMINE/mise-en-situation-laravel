<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    


    <form action="/signin" method="POST">
        @csrf
        <input type="text" name="email" id=""><br>
        <input type="text" name="password" id=""><br>

        <input type="submit" name="" value="submit" id="">
    </form>
    <a href="/register">register</a>

</body>

</html>