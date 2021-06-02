<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="record/5" method="post"> -->
    <form action="record/5" method="post">
    @csrf
    <!-- @method('delete') -->
    @method('put')
        <button tyle="button">Click</button>
    </form>
</body>
</html>
