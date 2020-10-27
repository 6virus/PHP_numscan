<!DOCTYPE html>
<html>
    <head>
    <script>
            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
                alert("يزينن الهكر هههههههههههههههههههههههههههه")
            });
        </script>
        <style>
     @import url(https://fonts.googleapis.com/css?family=Ubuntu);
    *{
        background-color: black;
        font-family: 'Ubuntu';
        font-size: 16px;
        color: #fff;
    }
    .top{
        border-bottom: 1px solid white;
    }
    .sub{
        border: 2px solid #2d2d2e;
        border-radius: 20px;
        color: white;
        background-color: #2d2d2e;
        padding: 8px;
        padding-left: 20px;
        padding-right: 20px;
        margin-top: 20px;
    }   
    .in{
        border: 2px solid #2d2d2e;
        border-radius: 20px;
        color: white;
        background-color: #2d2d2e;
        padding: 10px;
        padding-right: 30px;
        margin-top: 20px;
        
    } 
    </style>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta charset="UTF-8">
    </head>
    <body>
    <div class=top>
    <a href="../index.php" style="text-decoration: none;"><h2>6Virus | [ R00t ]</h2></a>
</div>
        <center>
        <img src="../img/anon.gif">
        <h1>Numscan (SA) </h1>
        <h3 style="font-size:16px;">Don't write +966 , (Example: 556621772) . </h3>
        <h4 style="font-size:10px;">Saudi Numbers Only </h4>
            <form name="form" method="post">
                <input class=in type="text" name="txt" placeholder="phone number" >
                <button type="submit" name="submit" class=sub >Submit</button>
                <?php
                if (isset($_POST['submit'])) {
                    $num = $_POST['txt'];
                    $url = "http://146.148.112.105/caller/index.php/UserManagement/search_number?number=".$num."&country_code=SA";
                    $jsondata = file_get_contents($url);
                    $json = json_decode($jsondata,true);
                    if ($json['msg'] == "Record found.") {
                        echo "<h2>"." number : ".$json['result'][0]['number'];"</h2>";
                        echo "<h2>"." name : ".$json['result'][0]['name'];"</h2>";
                        echo "<h2>"." Country Code : ".$json['result'][0]['country_code'];"</h2>";
                        echo "<h2>"." id : ".$json['result'][0]['id'];"</h2>";
                    }
                    else {
                        echo "<h2>Not Found</h2>";
                    }
                }
                else {
                    echo "<h2>Enter Target Phone Number</h2>";
                }

                ?>
            </form>
        </center>
    </body>
</html>
