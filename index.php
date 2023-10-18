<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoviePark</title>
    <link rel="stylesheet" type="text/css" href= style.css>
</head>
<body>
<div class="page-layout">
    <!-- Navigatiebalk -->
    <nav>
        <div class="nav-container">
            <div class="nav-left">
                <img class="logo" src="img/logo.png" alt="mooi">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./OverOns.php">Over</a></li>
                    <li><a href="./Weather.php">Weer</a></li>
                    <li><a href="./Contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="nav-right">
                <div class="login-signup">
                    <a href="./login.php">Inloggen</a>
                    <a class="sign-up-btn" href="./signup.php">Registreren</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero-sectie -->
    <div class="hero-section">
        <div class="hero-content">
            <h1>Welkom bij MoviePark!</h1>
            <p>Welkom in ons attractiepark! We hebben een scala aan spannende attracties en activiteiten voor het hele gezin. Kom en beleef een onvergetelijke dag vol avontuur en plezier.</p>
            <a href="./signup.php" class="cta-button">Doe met ons mee</a>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>Website gemaakt door Moussa, Jamill en Zakaria. &copy; 2023</p>
            <ul class="footer-links">
                <li><a href="#">Gebruiksvoorwaarden</a></li>
                <li><a href="#">Privacybeleid</a></li>
                <li><a href="#">Neem contact op</a></li>
            </ul>
        </div>
    </footer>
</div>
<script src="./Assets/Engine.js"></script>
</body>
</html>
