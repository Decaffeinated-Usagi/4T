<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

include("API/connect.php");

$ingredient = $_GET['ingredient'];
    echo "<p>$ingredient</p>";
    $sql = "SELECT * FROM recipe_ingredients JOIN dish ON recipe_ingredients.Dish_dishId = dish.dishId JOIN ingredients ON recipe_ingredients.Ingredients_ingredientsId = ingredients.ingredientsId WHERE ingredients.ingredientsName = $ingredient";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "
            <tr> <!-- insert some action here later -->
            <td>" . $row['dishName'] . "</td>
            </tr>";
        }
    }
    else
    {
        echo "<tr>
        <td>No results found</td>
        </tr>";
    }
$conn->close();

?>