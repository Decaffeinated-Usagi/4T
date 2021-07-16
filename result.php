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
    <title>ClassADMU</title>
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
        <a href="register.php"><button type="button" class="btn btn-light" id="register">Sign In</button></a>   
        <a href="" class="btn btn-outline-light my-2 my-lg-0" role="button">Sign Up</a>
      </div>
    </nav> 
<div 
        class="bg-image"
           style=
          "background-image: url('');
          height: 100vh;" 
      >
      <?php
        $ingredient = $_POST['ingredient'];

        $sql = "SELECT * FROM recipe_ingredients JOIN dish ON recipe_ingredients.Dish_dishId = dish.dishId JOIN ingredients ON recipe_ingredients.Ingredients_ingredientsId = ingredients.ingredientsId WHERE ingredients.ingredientsName = '$ingredient'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            echo "<table class=\"table table-striped table-bordered table-hover\"> 
            <thead>
            <tr>
                <th scope=\"col\">Dish Name</th>
            </tr>
            </thead>";
            while($row = $result->fetch_assoc())
            {
                echo "
                <tr>
                <td> <a href = \"description.php?id=".$row['dishId']."\">" . $row['dishName'] . " </a></td>
                </tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "<tr>
            <td>No results found</td>
            </tr>";
        }
    ?>
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