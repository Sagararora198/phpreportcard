

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Card</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        *{
            box-sizing: border-box;
        }
      
        .container{
            background-color: grey;
            display: inline-block;
            width: 60%;
            margin-left: 269px;
            
        }
        .container h1{
            text-align: center;
        }
        .button_area{
            display: flex;
            margin: auto;
            justify-content: space-between;
            width: 50%;
            background-color: ghostwhite;
            
        }
        .primary_btn{
            /* border: 2px solid grey; */
            flex-direction: row;
            
            width: 219px;
            border-radius: 4px;
            background-color: red;
            color: white;
            text-align: center;
            
        }
        .form{
            display: flex;
            width: 80%;
            margin: auto;
            flex-direction: column;
            
        }
        
        .center{
            width:200px;
            margin:0 0 0 80%;
        }

    </style>
</head>
<body>
    <header class="container">
        <h1>
            Report Card Generation System
        </h1>
        <div class="center">
            <a class="nav-link btn btn-danger" href="logout.php">Sign out</a>
        </div>
    </header>
</body>
</html>