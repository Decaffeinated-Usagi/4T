<html lang="en">

<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
include("API/connect.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <title>Clean Plate</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-success px-5 ">
      <a class="navbar-brand" href="index.php">Clean Plate</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
        </ul>
        <a href="#"><button type="button" class="btn btn-light" id="register">Sign In</button></a>   
        <a href="#" class="btn btn-outline-light my-2 my-lg-0" role="button">Sign Up</a>
      </div>
    </nav> 
<div 
        class="bg-image"
           style=
          "background-image: url('veganDark.png');
          height: 100vh;" 
      >
        <div class="container-fluid p-5">
        <p class="lead" style="font-size:24px; color:white"; >The food we eat contributes a certain amount of greenhouse gas to our atmosphere, which lead to hotter temperatures. Different types of food emit varying amounts of greenhouse gases. Beef is one of the types of food that contribute a lot, while bananas contribute very little. To see more about the greenhouse gas emissions from different types of food, visit the link: <a href="https://ourworldindata.org/grapher/food-emissions-supply-chain">https://ourworldindata.org/grapher/food-emissions-supply-chain</a> </p>
        <p class="lead" style="font-size:30px; color:white">Look for greener alternatives to your favorite dishes. Search below to start today!</p>
        
        <h3 style="color:white">Search for an ingredient!</h3>
        <form action="result.php" method="POST" role="form" class="form-group">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Ingredient" aria-label="Ingredient" name="ingredient">
        </div>
        <button type="Check" class="btn btn-success" name="check">Check</button>
        </form>

        

        <!-- <h3 style="color:white">Got a recipe that you want to share?</h3>
        <a class="btn btn-success btn-lg" href="addRecipe.php" role="button">Add New Recipe</a> -->
    </div>   
    </div> 

    <!-- DO NOT TOUCH THE SCRIPT FILES BELOW THIS LINE -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- DO NOT TOUCH THE SCRIPT FILES ABOVE THIS LINE -->
</body>
</html>

<?php $conn->close();?>