<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<style>
    form {

        background: #9d9eff;
        width: 400px;
        margin: 200px auto 0;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        padding: 20px 0 40px;
        text-align: center;
    }

    .content {
        margin: 0 auto;
        width: 50%;
    }

    input {
        width: 100%;
        border: none;
        height: 30px;
        border-radius: 5px;
        padding-left: 5px;
        color: rgba(0, 0, 0, 0.48);
    }

    input[type='submit'] {
        height: 35px;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
    }

    h1 {
        color: #ffffff;
        font-family: sans-serif;
    }

</style>
<body>

<form action="index.php?action=UserController@signup" method="post">
    <div class="content">
        <h1>Sign up</h1>
        <p><input type="text" name="pseudo" placeholder="pseudo"></p>
        <p><input type="password" name="password" placeholder="password"></p>
        <input type="submit" value="sign up">
    </div>
</form>
</body>
</html>
