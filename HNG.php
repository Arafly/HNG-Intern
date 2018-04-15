<!DOCTYPE HTML>
<html lang="en-US">
    <meta charset ="utf-8"> 
    <head>
        <title>Hotel</title>
    </head>

    <body>
        
        <div class="wallpaper"></div>
        <div class="content">
            <h3>HNG 4.0</h3>
            <br />
            <h3><?php 
                $time = date("h:i:sa");
                echo "The current time is".$time 
            ?></h3>
        </div>
        

        <style>

            html { 
                background: url(luca-bravo-207676-unsplash.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .wallpaper{
            
                position: absolute;
                border-radius:20px;
                border: 1px solid rgba(0, 0, 0, 0.8);
                box-sizing: border-box;
                backdrop-filter: blur(4px);
                

            }
            .content{
                
                font-family:'Roboto Condensed';
                font-size:30px;
                font-weight: bold;
                font-style: italic;
                line-height:normal;
                
                
                text-align: center;
                width:200px;
                height:400px;
                position:absolute;
                padding-left: auto;
                margin-left: auto;

                color:#f2f2f2;
                mix-blend-mode: normal;
                
                text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);  

            }

        </style>
    </body>

</html>