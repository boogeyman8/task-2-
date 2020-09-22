<!DOCTYPE html>
<html>
<head>
    <title>LARAVEL | HOMEWORK 1</title>
</head>
<body>

    <form action="info" method="GET">
        <!-- @csrf -->
        <input type="text" name="name" placeholder="name">
        <br>
        <input type="text" name="surname" placeholder="surnmae">
        <br>
        <input type="text" name="location" placeholder="Adress">
        <br>
        <input type="textarea" name="bio" placeholder="bio">
        <br>
        <input type="date" name="birth" placeholder="date of birth">
        <br>
        <input type="submit" name="submit" value="send">
    </form>

</body>
</html>