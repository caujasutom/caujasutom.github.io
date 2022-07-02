<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="Kočky z kočičí kavárny Zlín" />
    <link rel="stylesheet" href="Assets/Styles/stylesheet.css" />
    <link rel="stylesheet" href="Assets/Styles/hlidani.css" />
    <title>Kočičí ráj Zlín</title>
</head>

<body>
    <div class="wrapper">
        <div class="navbar">
            <div class="top">
                <div class="hamburger-menu" id="hamburger" onclick="openNav()">
                    <div class="bar-top"></div>
                    <div class="bar-middle"></div>
                    <div class="bar-bottom"></div>
                </div>
                <img src="Assets/Obrazky/logo.WebP" alt="logo" id="logo" />
            </div>
            <ul>
                <li>
                    <img src="Assets/Obrazky/domu.WebP" alt="" />
                    <a href="index.html">Domů</a>
                </li>
                <li>
                    <img src="Assets/Obrazky/kocka.WebP" alt="" />
                    <a href="kocky.html">Naše kočičky</a>
                </li>
                <li>
                    <img src="Assets/Obrazky/menu.WebP" alt="" />
                    <a href="menu.html">Menu</a>
                </li>
                <li>
                    <img src="Assets/Obrazky/onas.WebP" alt="" />
                    <a href="onas.html">O nás</a>
                </li>
                <li>
                    <img src="Assets/Obrazky/kontakt.WebP" alt="" />
                    <a href="kontakt.html">Kontakt</a>
                </li>
                <li>
                    <img src="Assets/Obrazky/hlidani.WebP" alt="" />
                    <a href="hlidani.php" class="active">Hlídání koček</a>
                </li>
            </ul>
            <div class="social">
                <a href="https://www.facebook.com/kavarna.kocici.raj/" target="_blank"><img
                        src="Assets/Obrazky/Social/facebook.WebP" alt="facebook" /></a><a
                    href="https://www.instagram.com/kavarna_kocici_raj/" target="_blank"><img
                        src="Assets/Obrazky/Social/instagram.WebP" alt="instagram" /></a>
            </div>
        </div>
        <div class="main" id="main">
            <section class="page" id="page">
                <h1>Hlídání koček</h1>
                <div class="content">
                    <form action="Assets/Scripts/mailer.php" method="post">
                        <div class="form-group">
                            <label for="jmeno">Jméno</label>
                            <input type="text" name="jmeno" id="jmeno" placeholder="Jméno" required />
                        </div>
                        <div class="form-group">
                            <label for="jmeno">Příjmení</label>
                            <input type="text" name="prijmeni" id="prijmeni" placeholder="Příjmení" required />
                        </div>
                        <div class="form-group">
                            <label for="jmeno">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" required />
                        </div>
                        <div class="form-group">
                            <label for="jmeno">Telefoní číslo</label>
                            <input type="tel" name="cislo" id="cislo" placeholder="Telefoní číslo" minlength="9"
                                maxlength="9" required />
                        </div>
                        <div class="form-group">
                            <label for="jmeno">Datum a čas</label>
                            <input type="datetime-local" name="datetime" id="datetime" placeholder="Datum"
                                value="<?php echo date("Y-m-d\TH:i", time()); ?>" required />
                        </div>
                        <div class="form-group">
                            <label for="jmeno">Zapamatovat si mě</label>
                            <input type="checkbox" name="rememberme" id="rememberme" />
                        </div>
                        <div class="form-group">
                            <button type="submit">Odeslat</button>
                        </div>
                        <div class="form-group">
                            <textarea name="text" id="text" rows="5" placeholder="Napište, co by jsme měli vědět"
                                maxlength="200" resiz></textarea>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <script src="Assets/Scripts/main.js"></script>
</body>

</html>