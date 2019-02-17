<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>URL Shortner.</title>
</head>
<body class="main_body">

    <h1 class="main_heading">Url Shortner</h1>
    <br>
    <form action="backend.php" method="POST">
        <center>
            <div class="search_div">
                    <input type="text" name="input" class="url" placeholder="Enter URL To Create Short URL" autocomplete="off" required>
                    <button class="but">Shorten</button>
            </div>
        </center>      
    </form>
    
</body>
</html>