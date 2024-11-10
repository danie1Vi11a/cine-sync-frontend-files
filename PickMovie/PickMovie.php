<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PickMovie</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    height: 100vh;
    background-color: #352F44; 
    position: relative; 
    overflow: hidden; 
}

.logo {
    position: absolute;
    top: 40px;
    left: 40px;
    width: 150px; 
    height: auto;
    transform: scale(1.2);
}

.broken_line {
    position: absolute;
    top: 100px;
    width: 60%; 
    transform: scale(0.3); 
}

.broken_line2 {
    position: absolute;
    top: 100px;
    width: 60%; 
    transform: scale(0.3); 
    right: 8cm;

}    
.broken_line3 {
    position: absolute;
    top: 100px;
    width: 60%; 
    transform: scale(0.3); 
    right: 21cm;    

}    
.broken_line4 {
    position: absolute;
    top: 100px;
    width: 60%; 
    transform: scale(0.3); 
    right: 2cm;        

}    
.broken_line5 {
    position: absolute;
    top: 100px;
    width: 60%; 
    transform: scale(0.3); 
    right: 22cm;    

}    
.broken_line6 {
    position: absolute;
    top: 100px;
    width: 60%; 
    transform: scale(0.3); 
    right: -4cm;     
    
}    
.broken_line7 {
    position: absolute;
    top: 100px;
    width: 60%; 
    transform: scale(0.3); 
    right: -10cm;        

}    
.cinetape {
    position: absolute;
    top: -20px;
    width: 70%; 
    transform: scale(0.5); 
    right: 21cm;     
    
}    
.cinetape2 {
    position: absolute;
    top: -20px;
    width: 70%; 
    transform: scale(0.5); 
    right: 9cm;   
    
}    
.cinetape3 {
    position: absolute;
    top: -20px;
    width: 70%; 
    transform: scale(0.5); 
    right: -3cm;    
    
}    
.cinetape4 {
    position: absolute;
    top: -20px;
    width: 70%; 
    transform: scale(0.5); 
    right: -10cm;   

}    
.downtape {
    position: absolute;
    bottom: -25px;
    width: 70%; 
    transform: scale(0.5); 
    right: -10cm;     
}    
.downtape1 {
    position: absolute;
    bottom: -25px;
    width: 70%; 
    transform: scale(0.5); 
    right: 2.5cm; 
}    
.downtape2 {
    position: absolute;
    bottom: -25px;
    width: 70%; 
    transform: scale(0.5); 
    left: -4cm;
}    
.downtape3 {
    position: absolute;
    bottom: -25px;
    width: 70%; 
    transform: scale(0.5); 
    left: -11cm;    
}    
.now_showing {
    position: absolute;
    top: 100px;
    width: 70%; 
    transform: scale(0.3); 
    right: 18cm; 
}    
.upcoming {
    position: absolute;
    top: 320px;
    width: 70%; 
    transform: scale(0.2); 
    right: 19cm; 
}    
.movie1 {
    position: absolute;
    top: 200px;
    width: 8%; 
    transform: scale(1); 
    right: 27cm; 
    transition: transform 0.3s ease;
}
.movie1:hover {
    transform: scale(1.3);
}    
.btn-1 {
    position: absolute;
    top: 345px;
    width: 8%; 
    transform: scale(1); 
    right: 27cm; 
    transition: transform 0.3s ease;
}
.btn-1:hover {
    transform: scale(1.3);  
}
.movie2 {
    position: absolute;
    top: 200px;
    width: 8%; 
    transform: scale(1); 
    right: 22cm;  
    transition: transform 0.3s ease;
}
.movie2:hover {
    transform: scale(1.3); 
}    
.btn-2 {
    position: absolute;
    top: 345px;
    width: 8%; 
    transform: scale(1); 
    right: 22cm; 
    transition: transform 0.3s ease;
}
.btn-2:hover {
    transform: scale(1.3);
}
.movie3 {
    position: absolute;
    top: 200px;
    width: 8%; 
    transform: scale(1); 
    right: 17cm;  
    transition: transform 0.3s ease;
}
.movie3:hover {
    transform: scale(1.3); 
}    
.btn-3 {
    position: absolute;
    top: 345px;
    width: 8%; 
    transform: scale(1); 
    right: 17cm; 
    transition: transform 0.3s ease;
}
.btn-3:hover {
    transform: scale(1.3);   
}
.movie4 {
    position: absolute;
    top: 200px;
    width: 8%; 
    transform: scale(1); 
    right: 12cm;  
    transition: transform 0.3s ease;
}
.movie4:hover {
    transform: scale(1.3); 
}    
.btn-4 {
    position: absolute;
    top: 345px;
    width: 8%; 
    transform: scale(1); 
    right: 12cm; 
    transition: transform 0.3s ease;
}
.btn-4:hover {
    transform: scale(1.3); 
}
.movie5 {
    position: absolute;
    top: 200px;
    width: 8%; 
    transform: scale(1); 
    right: 7cm;  
    transition: transform 0.3s ease;
}
.movie5:hover {
    transform: scale(1.3); 
}    
.btn-5 {
    position: absolute;
    top: 345px;
    width: 8%; 
    transform: scale(1); 
    right: 7cm; 
    transition: transform 0.3s ease;
}
.btn-5:hover {
    transform: scale(1.3);                
}    
.upcoming-movie1 {
    position: absolute;
    top: 430px;
    width: 7%; 
    transform: scale(1); 
    right: 27.1cm; 
    transition: transform 0.3s ease;
}
.upcoming-movie1:hover {
    transform: scale(1.3);
}    
.btn-6 {
    position: absolute;
    top: 570px;
    width: 7%; 
    transform: scale(1); 
    right: 27.1cm;  
    transition: transform 0.3s ease;
}
.btn-6:hover {
    transform: scale(1.3);    
}     
.upcoming-movie2 {
    position: absolute;
    top: 430px;
    width: 7%; 
    transform: scale(1); 
    right: 22.1cm; 
    transition: transform 0.3s ease;
}
.upcoming-movie2:hover {
    transform: scale(1.3);
}    
.btn-7 {
    position: absolute;
    top: 570px;
    width: 7%; 
    transform: scale(1); 
    right: 22.1cm;  
    transition: transform 0.3s ease;
}
.btn-7:hover {
    transform: scale(1.3);
}     
.upcoming-movie3 {
    position: absolute;
    top: 430px;
    width: 7%; 
    transform: scale(1); 
    right: 17.1cm; 
    transition: transform 0.3s ease;
}
.upcoming-movie3:hover {
    transform: scale(1.3);
}    
.btn-8 {
    position: absolute;
    top: 570px;
    width: 7%; 
    transform: scale(1); 
    right: 17.1cm;  
    transition: transform 0.3s ease;
}
.btn-8:hover {
    transform: scale(1.3); 
}     
.upcoming-movie4 {
    position: absolute;
    top: 430px;
    width: 7%; 
    transform: scale(1); 
    right: 12.1cm; 
    transition: transform 0.3s ease;
}
.upcoming-movie4:hover {
    transform: scale(1.3);
}    
.btn-9 {
    position: absolute;
    top: 570px;
    width: 7%; 
    transform: scale(1); 
    right: 12.1cm;  
    transition: transform 0.3s ease;
}
.btn-9:hover {
    transform: scale(1.3);
}     
.upcoming-movie5 {
    position: absolute;
    top: 430px;
    width: 7%; 
    transform: scale(1); 
    right: 7.1cm; 
    transition: transform 0.3s ease;
}
.upcoming-movie5:hover {
    transform: scale(1.3);
}    
.btn-10 {
    position: absolute;
    top: 570px;
    width: 7%; 
    transform: scale(1); 
    right: 7.1cm;  
    transition: transform 0.3s ease;
}
.btn-10:hover {
    transform: scale(1.3);               
}     
.searchbar input[type="search"]{
    position: absolute;
    top: 58px;
    width: 30%; 
    transform: scale(1); 
    right: 7cm;
    background-color: #b9b4c7;
    height: 45px;
    border-radius: 20px;
}    
.searchbar button {
    position: absolute;
    top: 58px;
    width: 5%; 
    right: 6cm;
    background-color: #b9b4c7;
    height: 45px;
    border-radius: 20px;
    transition: transform 0.3s ease;
}
.searchbar:hover button {
    transform: scale(1.3);
}    
.nav-bar {
    position: absolute;
    top: 45px;
    width: 6%; 
    right: 1cm;
    height: 65px; 
    transition: transform 0.3s ease;
}
.nav-bar:hover {
    transform: scale(1.3);   
}
.profile {
    position: absolute;
    top: 45px;
    width: 5%; 
    right: 3.7cm;
    height: 65px; 
    transition: transform 0.3s ease;
}
.profile:hover {
    transform: scale(1.3);   
}    
    </style>
</head>
<body>
    <img class="profile" src="profile.png" alt="Profile">
    <img class="nav-bar" src="nav-bar.png" alt="Nav-bar">
    <img class="logo" src="logo.png" alt="Logo">
    <img class="broken_line" src="broken_line.png" alt="Broken_line">
    <img class="broken_line2" src="broken_line 2.png" alt="Broken_line2">
    <img class="broken_line3" src="broken_line 3.png" alt="Broken_line3">
    <img class="broken_line4" src="broken_line 4.png" alt="Broken_line4">
    <img class="broken_line5" src="broken_line 5.png" alt="Broken_line5">
    <img class="broken_line6" src="broken_line 6.png" alt="Broken_line6">
    <img class="broken_line7" src="broken_line 7.png" alt="Broken_line7">
    <img class="cinetape" src="cinetape.png" alt="Cinetape">
    <img class="cinetape2" src="cinetape 2.png" alt="Cinetape2">
    <img class="cinetape3" src="cinetape 3.png" alt="Cinetape3">
    <img class="cinetape4" src="cinetape 4.png" alt="Cinetape4">
    <img class="downtape" src="downtape.png" alt="Downtape">
    <img class="downtape1" src="downtape1.png" alt="Downtape1">
    <img class="downtape2" src="downtape2.png" alt="Downtape2">
    <img class="downtape3" src="downtape3.png" alt="Downtape3">
    <img class="now_showing" src="now_showing.png" alt="now_showing">
    <img class="upcoming" src="upcoming.png" alt="Upcoming">
    <img class="movie1" src="movie1.png" alt="Movie1">
    <img class="movie2" src="movie2.png" alt="Movie2">
    <img class="movie3" src="movie3.png" alt="Movie3">
    <img class="movie4" src="movie4.png" alt="Movie4">
    <img class="movie5" src="movie5.png" alt="Movie5">
    <img class="upcoming-movie1" src="upcoming-movie1.png" alt="Upcoming-movie1">
    <img class="upcoming-movie2" src="upcoming-movie2.png" alt="Upcoming-movie2">
    <img class="upcoming-movie3" src="upcoming-movie3.png" alt="Upcoming-movie3">
    <img class="upcoming-movie4" src="upcoming-movie4.png" alt="Upcoming-movie4">
    <img class="upcoming-movie5" src="upcoming-movie5.png" alt="Upcoming-movie5">
    <button id="btn1">
        <img class="btn-1" src="btn-1.png" alt="Btn-1">
        </button>
    <button id="btn2">
        <img class="btn-2" src="btn-2.png" alt="Btn-2">
        </button>
    <button id="btn3">
        <img class="btn-3" src="btn-3.png" alt="Btn-3">
        </button>  
    <button id="btn4">
        <img class="btn-4" src="btn-4.png" alt="Btn-4">
        </button>    
    <button id="btn5">
        <img class="btn-5" src="btn-5.png" alt="Btn-5">
        </button>         
    <button id="btn6" >
        <img class="btn-6" src="btn-6.png" alt="Btn-6">
        </button>
    <button id="btn7">
        <img class="btn-7" src="btn-7.png" alt="Btn-7">
        </button>
    <button id="btn8">
        <img class="btn-8" src="btn-8.png" alt="Btn-8">
        </button>
    <button id="btn9">
        <img class="btn-9" src="btn-9.png" alt="Btn-9">
        </button>
    <button id="btn10">
        <img class="btn-10" src="btn-10.png" alt="Btn-10">
        </button>              
    <div class="searchbar">
        <form action="/search" method="get">
            <input type="search" name="q" placeholder="SEARCH">
            <button type="submit">🔍</button>
        </form>
    </div>
    <script>
        document.getElementById("btn1").addEventListener("click", function() {
            window.location.href = "example-page.php";
        });
        document.getElementById("btn2").addEventListener("click", function() {
            window.location.href = "example-page.php";
        });
        document.getElementById("btn3").addEventListener("click", function() {
            window.location.href = "example-page.php"; /* insert connected webpage */
        });
        document.getElementById("btn4").addEventListener("click", function() {
            window.location.href = "example-page.php"; 
        });
        document.getElementById("btn5").addEventListener("click", function() {
            window.location.href = "example-page.php"; 
        });
        document.getElementById("btn6").addEventListener("click", function() {
            window.location.href = "example-page.php"; 
        });
        document.getElementById("btn7").addEventListener("click", function() {
            window.location.href = "example-page.php"; 
        });
        document.getElementById("btn8").addEventListener("click", function() {
            window.location.href = "example-page.php"; 
        });
        document.getElementById("btn9").addEventListener("click", function() {
            window.location.href = "example-page.php"; 
        });
        document.getElementById("btn10").addEventListener("click", function() {
            window.location.href = "example-page.php"; 
        });
    </script>
</body>
</html>
