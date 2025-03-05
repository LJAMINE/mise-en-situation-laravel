<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<h1>register</h1>

    <form action="/store" method="POST">
        @csrf
        <input type="text" name="name" id=""><br>
        <input type="text" name="email" id=""><br>
        <input type="text" name="password" id=""><br>

        <select name="role_id" id="">
            <option value="1">admin</option>
            <option value="2">client</option>
        </select><br>

        <input type="submit" name="" value="submit" id="">
    </form>

<a href="/login">login</a>

</body>

</html>