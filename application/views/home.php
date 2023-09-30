<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bina Nusantara</title>
    <link rel="shortcut icon" href="https://binusasmg.sch.id/ppdb/logobinusa.png" type="image/x-icon">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #000000;
    color: #fff;
    font-family: "Poppins", sans-serif;
}

a {
    text-decoration: none;
}

header {
    width: 100%;
    height: 100vh;
    position: relative;
    display: flex;
    flex-direction: column;
    background: url('https://foto.data.kemdikbud.go.id/getImage/20328986/9.jpg');
    background-size: cover;
    background-position: center;
}

header:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 60vh;
    bottom: 0;
    background: linear-gradient(to top, rgb(0, 0, 0), rgba(0, 0, 0, 0));
}

nav,
.header-bottom {
    display: flex;
    justify-content: space-between;
    padding: 2rem;
    position: relative;
}

.logo span{
    color: orange;
}

.logo a {
    color: #ffff;
    font-size: 2rem;
}

.btn-sign-up {
    padding: 0.7rem 2rem;
    background: #000000;
    color: #fff;
    font-weight: 500;
    border-radius: 50px;
    transition: .3s;
}

.btn-sign-up:hover {
    background-color: #fff;
    color: #000000;
    text-align: center;
}

.header-title {
    margin: auto auto;
    font-size: 5rem;
    position: relative;
    font-weight: 700;
    letter-spacing: 2px;
}

.today-date {
    font-size: 2rem;
    font-weight: 500;
}

.today-date span {
    font-size: 1.5rem;
}

.social-media {
    display: flex;
    list-style: none;
    width: 350px;
    justify-content: space-between;
    align-items: center;
}

.header-title span{
    color: orange;
}

.social-media li a {
    color: #fff;
}
</style>
<body>
    
    <!-- Header -->
    <header>
        <nav>
            <h1 class="logo">
                <a href="">Bina <span>Nusantara</span></a>
            </h1>
            <a href="./auth" class="btn-sign-up">Login</a>
        </nav>
        <div class="header-title"><span>Bina</span> Nusantara.</div>
        <div class="header-bottom">
            <ul class="social-media">
                <li><a href="https://youtube.com/@smkbinanusantarasemarang6730?si=ButNrIhCzCn7F0Ut">Youtube</a></li>
                <li><a href="https://www.facebook.com/smkbinusasmg/?locale=id_ID">Facebook</a></li>
                <li><a href="https://www.instagram.com/smkbinanusantara_smg/">Instagram</a></li>
            </ul>
        </div>
    </header>

</body>
</html>