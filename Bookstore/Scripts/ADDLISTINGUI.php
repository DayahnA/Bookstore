<!DOCTYPE html>
<html>
    <head>
        <title>VC Bookstore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="\Bookstore\CSS\ADDLISTINGCSS.css">
        <style>
            .container {  display: grid;
                grid-template-columns: 0.5fr 2.1fr 0.4fr;
                grid-template-rows: 0.3fr 0.5fr 3fr 0.2fr;
                gap: 0px 0px;
                grid-auto-flow: row;
            }

            .Heading { grid-area: 1 / 1 / 2 / 4; }
            .Body { grid-area: 2 / 1 / 4 / 4; }
            .Footer { grid-area: 4 / 2 / 5 / 4; }
            .Top { grid-area: 2 / 1 / 3 / 4; }
            .login { grid-area: 3 / 2 / 4 / 3; }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="Heading">
            Book Store &emsp; Customer helpline: 012 345 678 &emsp;
            <img src="img/shopcart.png" width="75" height="75">
        </div>
        <div class="Top"><img src="img/arrow-25858_960_720.png" width="100" height="100">Add New Listing</div>
        <div class="login">    
        <form method="post">
        <label><b>Book Title:</b></label> 
        <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>Author:</b></label> 
                 <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>Publisher:</b></label> 
                 <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>ISBN Number:</b></label> 
                 <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 <label><b>Edition:</b></label> 
                 <select name="Edition">
                            <option value="first">first</option>
                            <option value="second">second</option>
                            <option value="third">third</option>
                            <option value="fourth">fourth</option>
                            <option value="fifth">fifth</option>
                            <option value="sixth">sixth</option>
                            <option value="seventh">seventh</option>
                        </select><Br><Br>
                        <label><b>Add Image:</b></label><br><br>
                        <img src="img/Imageone.jpeg" width="75" height="75"/>
                        <img src="img/Imageone.jpeg" width="75" height="75"/>
                        <img src="img/Imageone.jpeg" width="75" height="75"/>
                        <img src="img/Imageone.jpeg" width="75" height="75"/><Br><Br>
                        <label><b>Price:</b></label> 
                        <input type="text" name="list" class="text"
                 autocomplete="off" required><Br><Br>
                 
                 <label><b>Select The Condition:</b></label> <Br><Br>

                
                        
                        
                 <input type="radio" class="radio" id="acceptable" name="acceptable"/>
                 <label for="acceptable">Acceptable</label><br><br>  


                
                <input type="radio" class="radio" id="average" name="average"/>
                <label for="average">Average</label><br><br>  



                
                <input type="radio" class="radio" id="excellent" name="excellent"/>
                <label for="excellent">Excellent</label><br><br>  


            </form>
            </div>
            <div class="Footer">
                <input type="button" name="nxt" id="nxt" value="Next"> 
            </div>
            
    </div>
    </body>
</html>
