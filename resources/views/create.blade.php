<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="/store" method="post">

        @csrf
        <input type="text" name="name" id=""><br>
        <input type="text" name="description" id=""><br>
        <input type="text" name="price" id=""><br>

        <input type="submit" name="" value="submit">
    </form>
</body>

</html>