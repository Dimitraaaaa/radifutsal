<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body{
            background-color:#191414;
        }
        .menu{
            list-style-type: none;
            overflow: hidden;
            background-color:#191414;
            margin:0px;
            padding:0px;
        }
        .menu-list{
            float: left;
        }
        .menu-list a {
            display: block;
            color: #1DB954;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
        }
        .menu-list a:hover{
            background-color: #191414;
        }
        .jumbotron{
            padding:30px;
        }
        .container{
            margin:0 auto;
            padding: 30px;
            border-radius:10px;
        }
        .jumbotron .container{
            max-width: 100%;
            background-color:#191414 ;
        }
        .jumbotron h1{
            text-align:left;
            color:#1DB954;
            font-family: 'raleway', helvetica, arial, sans-serif;
            font-weight:600;
            font-size:40px;
            text-transform:uppercase;
        }
        .jumbotron p{
            text-align:left;
            color:#1DB954;
            font-family: 'raleway', helvetica, arial, sans-serif;
            font-weight:600;
            font-size:25px;
            text-transform:uppercase;

        }
    </style>
</head>

<body>
    <ul class="menu"> 
        <li class="menu-list"><a href="./form/pendaftar.php">|| Regist ||</a></li>
        <li class="menu-list"><a href="./logout.php">|| Log out ||</a></li>
    </ul>
    <div class="jumbotron">
        <div class="container">
        <h1>WELCOME TO RADIFUTSAL</h1>
        <p>CLICK THE REGISTER BOTTON BELOW</p>
        </div>
    </div>
    
    <br><br>
 
</body>

</html>