<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyMovie</title>
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
            top: 115px;
            left: 300px;
            width: 150px; 
            height: auto;
            transform: scale(1.2);

        }

        .profile {
            position: absolute;
            top: 115px;
            width: 5%; 
            right: 10cm;
            height: 65px; 
            transition: transform 0.3s ease;
        }
        .profile:hover {
            transform: scale(1.3);
        }

        .nav-bar {
            position: absolute;
            top: 115px;
            width: 6%; 
            right: 7.5cm;
            height: 65px; 
            transition: transform 0.3s ease;
        }
            .nav-bar:hover {
            transform: scale(1.3);
        }
        .curtain-up {
            position: absolute;
            top: -1px;
            width: 70%; 
            transform: scale(1.5); 
            right: 5.5cm;     
        } 
        .curtain-left {
            position: absolute;
            top: 89px;
            width: 17%; 
            left: 0cm;
        } 
        .curtain-right {
            position: absolute;
            top: 89px;
            width: 17.5%; 
            right: 0.0cm;         
        } 
        .broken_line50 {
            position: absolute;
            top: 195px;
            width: 60%; 
            transform: scale(0.3);
            left: -1.9cm; 
        }
        .broken_line51 {
            position: absolute;
            top: 195px;
            width: 60%; 
            transform: scale(0.3);
            left: 4cm; 
        }
        .broken_line52 {
            position: absolute;
            top: 195px;
            width: 60%; 
            transform: scale(0.3);
            left: 10cm; 
        }
        .broken_line53 {
            position: absolute;
            top: 195px;
            width: 60%; 
            transform: scale(0.3);
            left: 16cm; 
        }
        .up_line54 {
            position: absolute;
            top: 245px;
            width: 2%; 
            transform: scale(1);
            left: 10cm; 
        }
        .up_line55 {
            position: absolute;
            top: 245px;
            width: 2%; 
            transform: scale(1);
            left: 25cm; 
        }
        .TicketQuantity {
            position: absolute;
            top: 250px;
            width: 10%; 
            transform: scale(1);
            left: 6cm;
        }
        .QuantityBar input[type="number"]{
            position: absolute;
            top: 330px;
            width: 14%; 
            transform: scale(1); 
            right: 26.5cm;
            background-color: white;
            height: 45px;
            border-radius: 10px;
        }
        .price {
            position: absolute;
            top: 378px;
            width: 10%; 
            transform: scale(1);
            left: 6cm;
        }
        .PriceBar input[type="text"]{
            position: absolute;
            top: 420px;
            width: 14%; 
            transform: scale(1); 
            right: 26.5cm;
            background-color: white;
            height: 45px;
            border-radius: 10px;
        }
        .seat {
            position: absolute;
            top: 460px;
            width: 9%; 
            transform: scale(1);
            left: 6cm;
        }
        .SeatBar input[type="text"]{
            position: absolute;
            top: 510px;
            width: 14%; 
            transform: scale(1); 
            right: 26.5cm;
            background-color: white;
            height: 45px;
            border-radius: 10px;            
        }    
        .PaymentMethod {
            position: absolute;
            top: 251px;
            width: 10%; 
            transform: scale(1);
            left: 27cm;
        }
        .PaymentBar1 input[type="checkbox"]{
            position: absolute;
            top: 325px;
            width: 5%; 
            transform: scale(1.5); 
            right: 6cm;
            background-color: white;
            height: 45px;
            border-radius: 8px;      
        }
        .PaymentBar1 label {
            position: absolute;
            top: 62%;
            left: 80.5%;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }
        .PaymentBar2 input[type="checkbox"]{
            position: absolute;
            top: 425px;
            width: 5%; 
            transform: scale(1.5); 
            right: 6cm;
            background-color: white;
            height: 45px;
            border-radius: 8px;
            pointer-events: none; 
            opacity: 0.5; 
        }
        .PaymentBar2 label {
            position: absolute;
            top: 78%;
            left: 80.5%;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }
        .PaymentBar3 input[type="checkbox"]{
            position: absolute;
            top: 525px;
            width: 5%; 
            transform: scale(1.5); 
            right: 6cm;
            background-color: white;
            height: 45px;
            border-radius: 8px;
            pointer-events: none; 
            opacity: 0.5; 
        }
        .PaymentBar3 label {
            position: absolute;
            top: 95%;
            left: 80.5%;
            transform: translate(-50%, -50%);
            cursor: pointer;
        }
        .MovieMain1 {
            position: absolute;
            top: 280px;
            left: 520px;
            width: 120px; 
            height: auto;
            transform: scale(1.2);
            transition: transform 0.3s ease;
        }
        .MovieMain1:hover {
            transform: scale(1.3);
        }
        .MovieDetails {
            position: absolute;
            top: 280px;
            left: 690px;
            width: 120px; 
            height: auto;
            transform: scale(1.2);
        }
        .OrderSummary {
            position: absolute;
            top: 450px;
            left: 570px;
            width: 230px; 
            height: auto;
            transform: scale(1.2);
        }
        .SeatPrice {
            position: absolute;
            top: 500px;
            left: 500px;
            width: 120px; 
            height: auto;
            transform: scale(1.2);
        }
        .OnlineFee {
            position: absolute;
            top: 540px;
            left: 500px;
            width: 115px; 
            height: auto;
            transform: scale(1.2);
        }
        .TotalPrice {
            position: absolute;
            top: 580px;
            left: 500px;
            width: 115px; 
            height: auto;
            transform: scale(1.2);
        }
        .SeatPriceBar input[type="text"]{
            position: absolute;
            top: 490px;
            width: 12%; 
            transform: scale(1); 
            right: 14cm;
            background-color: white;
            height: 30px;
            border-radius: 10px;            
        }
        .OnlineFeeBar input[type="text"]{
            position: absolute;
            top: 535px;
            width: 12%; 
            transform: scale(1); 
            right: 14cm;
            background-color: white;
            height: 30px;
            border-radius: 10px;            
        } 
        .TotalPriceBar input[type="text"]{
            position: absolute;
            top: 580px;
            width: 12%; 
            transform: scale(1); 
            right: 14cm;
            background-color: white;
            height: 30px;
            border-radius: 10px;            
        } 
        .square-button {
            position: absolute;
            top: 550px;
            width: 5%; 
            transform: scale(1); 
            right: 3cm;
            background-color: #AE98AA;
            height: 60px;
            border-radius: 5px;
            font-size: 20px;
            transition: background-color 0.3s ease;
        }
        .square-button:hover {
            background-color: purple;
        }
        .DateTimeMovie {
            position: absolute;
            top: 350px;
            left: 700px;
            width: 130px;
            transform: scale(1.3);
        }
    </style>
</head>
<body>
    <img class="profile" src="profile.png" alt="Profile">
    <img class="nav-bar" src="nav-bar.png" alt="Nav-bar">
    <img class="logo" src="logo.png" alt="Logo">
    <img class="curtain-up" src="curtain-up.png" alt="Curtain-up">
    <img class="curtain-left" src="curtain-left.png" alt="Curtain-left">
    <img class="curtain-right" src="curtain-right.png" alt="Curtain-right">
    <img class="broken_line50" src="broken_line50.png" alt="Broken_line50">
    <img class="broken_line51" src="broken_line51.png" alt="Broken_line51">
    <img class="broken_line52" src="broken_line52.png" alt="Broken_line52">
    <img class="broken_line53" src="broken_line53.png" alt="Broken_line53">
    <img class="up_line54" src="up_line54.png" alt="up_line54">
    <img class="up_line55" src="up_line55.png" alt="up_line55">
    <img class="TicketQuantity" src="TicketQuantity.png" alt="TicketQuantity">
    <img class="PaymentMethod" src="PaymentMethod.png" alt="PaymentMethod">
    <img class="price" src="price.png" alt="Price">
    <img class="seat" src="seat.png" alt="Seat">
    <img class="MovieMain1" src="MovieMain1.png" alt="MovieMain1">
    <img class="MovieDetails" src="MovieDetails.png" alt="MovieDetails">
    <img class="OrderSummary" src="OrderSummary.png" alt="OrderSummary">
    <img class="SeatPrice" src="SeatPrice.png" alt="SeatPrice">
    <img class="OnlineFee" src="OnlineFee.png" alt="OnlineFee">
    <img class="TotalPrice" src="TotalPrice.png" alt="TotalPrice">
    <img class="DateTimeMovie" src="DateTimeMovie.png" alt="DateTimeMovie">
    <div class="QuantityBar">
            <input type="number" name="q" placeholder="SELECT HERE">
        </div>
    <div class="PriceBar">
            <input type="text" name="q" placeholder="DEFAULT PRICE">
        </div>
    <div class="SeatBar">
            <input type="text" name="q" placeholder="SELECT SEAT">
        </div>
        <div class="PaymentBar1">
    <input type="checkbox" id="gcashCheckbox">
        <label for="gcashCheckbox"><span style="color: white; font-style: italic;">GCash</span></label>
        </div>
        <div class="PaymentBar2">
    <input type="checkbox" id="NotAvailabkeCheckbox">
        <label for="gcashCheckbox"><span style="color: white; font-style: italic;">Not Available</span></label>
        </div>
        <div class="PaymentBar3">
    <input type="checkbox" id="OutOfServiceCheckbox">
        <label for="gcashCheckbox"><span style="color: white; font-style: italic;">Out of Service</span></label>
        </div>
    <div class="SeatPriceBar">
            <input type="text" name="q" placeholder=" ">
        </div>
    <div class="OnlineFeeBar">
            <input type="text" name="q" placeholder=" ">
        </div>
    <div class="TotalPriceBar">
            <input type="text" name="q" placeholder=" ">
        </div> 
        <button class="square-button"><strong>OK</strong></button>
</body>
</html>
