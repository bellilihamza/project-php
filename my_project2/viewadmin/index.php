<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<script> 
 window.onscroll = function () {
    let valeurScroll = window.scrollY;

    let stars = document.getElementById("stars");
    let moon = document.getElementById("moon");
    let mountains3 = document.getElementById("mountains3");
    let mountains4 = document.getElementById("mountains4");
    let river = document.getElementById("river");
    let boat = document.getElementById("boat");
    let mountains7 = document.getElementById("mountains7");

        stars.style.left = valeurScroll + 'px';
        moon.style.top = valeurScroll *4+ 'px';
        mountains3.style.top = valeurScroll*2 + 'px';
        mountains4.style.top = valeurScroll*1.5 + 'px';

        river.style.top = valeurScroll+ 'px';
        boat.style.top = valeurScroll+ 'px';
        boat.style.left = valeurScroll*3+ 'px';
        if(valeurScroll<=154 ||valeurScroll==0){
            document.querySelector('.main').style.background = 'linear-gradient(#376281,#10001f)'
        }
        else{
            document.querySelector('.main').style.background = 'linear-gradient(#200016,#10001f)'
        }


    
}
</script>
<body>
    <header>
    <h2><a href="#"class="logo"></a>viva togo</h2>
    <ul>
        <li><a href="">home</a></li>
        <li><a href="">product</a></li>
        <li><a href="">chop</a></li>
        <li><a href="login.php">login</a></li>
    </ul>

    </header>
    <section class="main">
        <img src="../image/stars1.webp" alt="" id="stars">
        <img src="../image/moon2.webp" alt="" id="moon">
        <img src="../image/mountains3.webp" alt="" id="mountains3">
        <img src="../image/mountains4.webp" id="mountains4" alt="">
        <img src="../image/river5.webp" id="river" alt=""> 
        <img src="../image/boat6.webp" id="boat" alt="">
        <img src="../image/mountains7.webp" id="mountains7" alt="">
        
    </section>
    <div class="content">
        <div class="form">
            <form method="post" action="rechercheDestination.php">
                <h2>Recherche destination </h2>
                <input type="text" placeholder="Enter country" name="country" required>
                <input type="text" placeholder="Enter state" name="state" required>

                <button type="submit">Chercher</button>
            </form>
</div>
</div>
    
    
</body>
</html>