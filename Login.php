<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidenţa rezultatelor concursurilor sportive</title>
    <link rel="stylesheet" href="./Tema.css">
</head>
<body>
    <header>
        <nav id="Titlu">
            <h1 id='PrimaLinie'>Evidenţa rezultatelor concursurilor sportive</h1>
            <ul class="a">
                <li>
                    <a href="Descriere.php">Descriere</a>
                </li>
                <li>
                    <a href="index.php">Pagina principala</a>
                </li>
                <li>
                    <a href="Football.php">Football</a>
                </li>
                <li>
                    <a href="Tennis.php">Tennis</a>
                </li>
                <li>
                    <a href="Basketball.php">Basketball</a>
                </li>
                <li>
                    <a href="Login.php">Login</a>
                </li>
            </ul>
        </nav>
    </header>
    <nav id="Continut">
        <div id="login-form">
            <h2>Register</h2>
            <form action="register.php" method="post"> 
            <div class="form-group">
                    <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Register" name="submit">
                </div>
        </form>
        <div>
        <div><p>Already Registered <a href="Login2.php">Login Here</a></p></div>
        </div>
    </nav>
    <footer id="allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>
