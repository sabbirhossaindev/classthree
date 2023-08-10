<!-- login-form.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login page</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
</head>
<style>
.login {
    margin: 400px;
    background-color: palevioletred;
    border-radius: 10px;
}

h1 {
    color: white;
}

label {
    color: white;
}

.btn {
    background-color: blue;
    color: white;

}

.mess {
    color: black;
}
</style>

<body>
    <div class="login p-5 my-5">
        <h1>Login</h1>
        <p class="mess"><?php
            if(isset($_GET['message'])){
                echo $_GET['message'];
            }
        ?></p>
        <form action="login-check.php" method="POST">
            <div class="mt-3 my-2">
                <label for="username">
                    User Name
                </label>
            </div>
            <input type="text" name="username" placeholder="username" id="username" required> <br>

            <div class="mt-3 my-2">
                <label for="password">
                    Password
                </label>
            </div>
            <input type="password" name="password" placeholder="password" id="password" required> <br>

            <button class="mt-3 my-2 btn" type="submit">Login ..</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>