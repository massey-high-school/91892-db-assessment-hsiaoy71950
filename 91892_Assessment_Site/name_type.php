 <?php include "topbit.php";

    $nametype = $_POST['nametype'];

    $find_sql = "SELECT *
FROM `L2_pokemon_details`
JOIN (
SELECT TypeID, Typename AS Typename1
FROM L2_type_data
) a
ON ( L2_pokemon_details.Type1ID = a.TypeID )
JOIN 
(
SELECT TypeID, Typename AS Typename2
FROM L2_type_data
) b 
ON ( L2_pokemon_details.Type2ID = b.TypeID )
WHERE `Name` LIKE '%$nametype%' OR `Typename1` LIKE '%$nametype%' OR `Typename2` LIKE '%$nametype%'
    ";
    $find_query = mysqli_query($dbconnect, $find_sql);
    $find_rs = mysqli_fetch_assoc($find_query);
    $count = mysqli_num_rows($find_query);

?>
        <div class="box main">

            <h2>All Results</h2>
            
            
            <?php include("results.php") ?>
            

            
        </div> <!-- / main -->
 <?php include "bottombit.php"?>
        