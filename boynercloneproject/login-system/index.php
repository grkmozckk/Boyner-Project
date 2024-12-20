<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // Logo ve Hoş Geldiniz Mesajı
    $logo = "BOYNER";
    $welcome_message = "Biz de seni bekliyorduk 😊<br>Hemen giriş yap, tarzını yakalamak için alışverişe başla!<br>Henüz üye değil misin? <a href='#'>Hemen Üye Ol</a>";
    ?>
    <div class="header">
        <h1 class="logo"><?php echo $logo; ?></h1>
        <p class="welcome-message"><?php echo $welcome_message; ?></p>
    </div>

    <?php
    // Tablar
    $tabs = ["Giriş Yap", "Üye Ol"];
    ?>
    <div class="login-container">
        <div class="tabs">
            <?php
            foreach ($tabs as $index => $tab) {
                $active = $index === 0 ? "active" : "";
                echo "<button class='tab $active'>$tab</button>";
            }
            ?>
        </div>

        <!-- Giriş Formu -->
        <form action="login.php" method="post" class="login-form">
            <?php
            // E-posta Alanı
            echo '<label for="email">E-posta</label>';
            echo '<input type="email" id="email" name="email" placeholder="E-posta adresini girmelisin" required>';

            // Şifre Alanı
            echo '<label for="password">Şifre</label>';
            echo '<div class="password-container">';
            echo '<input type="password" id="password" name="password" placeholder="Şifre" required>';
            echo '<button type="button" class="show-password">👁</button>';
            echo '</div>';

            // Giriş Butonu
            echo '<button type="submit" class="login-button">GİRİŞ YAP</button>';

            // Ekstralar
            echo '<div class="extras">';
            echo '<label><input type="checkbox" name="remember"> Beni Hatırla</label>';
            echo '<a href="#" class="forgot-password">Şifremi Unuttum</a>';
            echo '</div>';

            // Sipariş Takibi
            echo '<div class="order-tracking">';
            echo '<a href="#">Üye olmadan verdiğin siparişler için <b>Sipariş Takibi</b></a>';
            echo '</div>';
            ?>
        </form>
    </div>
</body>

</html>