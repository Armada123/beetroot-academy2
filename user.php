<?php
    $name = 'Sansa';
    $sername = 'Stark';
    $age = '25';
    $email = 'jofree@gmail.com';
    var_dump($_POST);
    var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<br />

<div class="container">
<form method="post" action="user.php">
    <div class="form-group">
        <label for="formGroupExampleInput">Имя</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="<?php echo $_POST ['name'] ?? 'MIKE'?>" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Фамилия</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="<?php echo $_POST ['sername'] ?? 'TYSON'?>" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Возраст</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="<?php echo $age ?>" >
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Почта</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="<?php echo $email ?>" >
    </div>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
            </form>
    <button type="submit" class="btn btn-primary">Отправить </button>
</form>
</div>
</body>
</html>
