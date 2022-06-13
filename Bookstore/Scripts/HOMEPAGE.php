<!DOCTYPE html>
<html>
    <head>
        <title>VC Bookstore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="\Bookstore\CSS\HOMEPAGECSS.css">
        <style>
            .container {  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-template-rows: 0.5fr 0.9fr 2.2fr 0.4fr;
  gap: 0px 0px;
  grid-auto-flow: row;
}

.heading { grid-area: 1 / 1 / 2 / 4; }

.top { grid-area: 2 / 1 / 3 / 4; }

.listings { grid-area: 3 / 1 / 4 / 4; }

.add { grid-area: 4 / 1 / 5 / 4; }

        </style>
    </head>
    <body>
        <div class="container">

        <div class="heading">
        Book Store &emsp; Customer helpline: 012 345 678 &emsp;
            <img src="img/shopcart.png" width="75" height="75">
        </div>

  <div class="top"><img src="img/arrow-25858_960_720.png" width="100" height="100">BUY or SELL Textbooks 
  TODAY!<br> Our online platform ensures a safe and secure network<br> to buy and sell second-hand textbooks.</div>
  
  <div class="listings">Textbook Listings:</div>

  <div class="add"><img src="img/addition.png" width="75" height="75"></div>
</div>

    </body>
</html>
