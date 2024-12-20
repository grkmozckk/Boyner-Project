<?php
function renderCategory($src, $alt, $name)
{
    echo "<div class='category'>";
    echo "<img src='$src' alt='$alt'>";
    echo "<p>$name</p>";
    echo "</div>";
    error_log("Category rendered: $name");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boyner - Çocuk</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <div class="logo">
            <h1>BOYNER</h1>
        </div>
        <div class="search-icons">
            <div class="search-box">
                <img src="images/search-icon.png" alt="Search Icon">
                <input type="text" placeholder="Hadi gel aradığını hızlıca bulalım...">
            </div>
        </div>
        <div class="icons">
            <img src="images/user-icon.png" alt="User Icon">
            <div class="user-menu">
                <h3>Giriş Yap</h3>
                <p>Hesabın yok mu? <a href="#">Üye Ol</a></p>
                <div class="menu-item">
                    <img src="images/order-icon.png" alt="Order Icon">
                    <span>Sipariş Takip</span>
                </div>
                <div class="menu-item">
                    <img src="images/help-icon.png" alt="Help Icon">
                    <span>Destek Yardım</span>
                </div>
            </div>
        </div>
    </header>

    <div class="menu">
        <a href="#">Kadın</a>
        <a href="#">Erkek</a>
        <a href="#">Çocuk</a>
        <a href="#">Spor & Outdoor</a>
        <a href="#">Ayakkabı & Çanta</a>
        <a href="#">Kozmetik</a>
        <a href="#">Ev & Yaşam & Elektronik</a>
        <a href="#">Saat & Aksesuar</a>
        <a href="#">Outlet</a>
        <a href="#">Hediye</a>
        <a href="#" class="active">Kampanyalar</a>
        <a href="#">Markalar</a>
    </div>

    <div class="breadcrumb">
        <p>Anasayfa / <strong>Çocuk</strong></p>
    </div>

    <h2 class="category-title">Çocuk</h2>

    <section class="categories">
        <?php
        error_log("Rendering categories...");
        renderCategory("images/mont.jpg", "Mont", "Mont");
        renderCategory("images/bot.jpg", "Bot", "Bot");
        renderCategory("images/pantolon.jpg", "Pantolon", "Pantolon");
        renderCategory("images/sweatshirt.jpg", "Sweatshirt", "Sweatshirt");
        renderCategory("images/esofman.jpg", "Eşofman", "Eşofman");
        renderCategory("images/sneaker.jpg", "Sneaker", "Sneaker");
        renderCategory("images/gomlek.jpg", "Gomlek", "Gömlek");
        renderCategory("images/jean.jpg", "Jean", "Jean");
        renderCategory("images/tshirt.jpg", "T-Shirt", "T-Shirt");
        renderCategory("images/elbise.jpg", "Elbise", "Elbise");
        error_log("Categories rendered.");
        ?>
    </section>

    <footer>
        <p> 2024 Boyner. Tüm hakları saklıdır.</p>
    </footer>
</body>

</html>