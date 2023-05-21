<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imam's Profile || Dicoding</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="header" id="header">
        <nav>
            <p class="logo">H IP O</p>
            <ul>
                <li><a href="#header">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
            </ul>
        </nav>

        <div class="typo">
            <h1>Hi, <span>Imam</span> Bahy's Here</h1>
            <p> Currently, I do studied in Universitas Gunadarma majoring Information System 
                <br />also I am a cloud computing student 2023 at bangkit. 
                <br />And this is my Profile Website.</p>
            <a href="https://www.linkedin.com/in/imambahyputra/" target="_blank">LINKEDIN</a>
        </div>

        <div class="images">
            <img src="assets/img/lagih.png" class="shape" alt="">
            <img src="assets/img/pp.png" class="pp" alt="">
        </div>
    </div>
    
        <div class="about" id="about">
            <h1>About Me</h1>
            <p>I am ux designer (Soon to be//amen) who loves to take a picture of many things, especially skies thing.</p>
            <div class="slideshow-container">

                <div class="slideKu fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="assets/img/1.jpg" style="width:100%">
                </div>
                
                <div class="slideKu fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="assets/img/4.jpg" style="width:100%">
                </div>
                
                <div class="slideKu fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="assets/img/2.jpg" style="width:100%">
                </div>
                
            </div>
        </div>
</body>

<script>
    let slideIndex = 0;
    showSlides();
    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("slideKu");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides, 2000);
    }
    </script>

</html>