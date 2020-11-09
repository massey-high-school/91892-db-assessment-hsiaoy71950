 <?php include "topbit.php";

    $name = $_POST['name'];
    $type1 = $_POST['type1'];
    $type2 = $_POST['type2'];
    $generation_more_less = $_POST['generation_more_less'];
    $generation = $_POST['generation'];
    $total_more_less = $_POST['total_more_less'];
    $total = $_POST['total'];
    $hp_more_less = $_POST['hp_more_less'];
    $hp = $_POST['hp'];
    $attack_more_less = $_POST['attack_more_less'];
    $attack = $_POST['attack'];
    $defense_more_less = $_POST['defense_more_less'];
    $defense = $_POST['defense'];
    $spattack_more_less = $_POST['spattack_more_less'];
    $spattack = $_POST['spattack'];
    $spdefense_more_less = $_POST['spdefense_more_less'];
    $spdefense = $_POST['spdefense'];
    $speed_more_less = $_POST['speed_more_less'];
    $speed = $_POST['speed'];
    $sort = $_POST['sort'];
    $sort_asc_desc = $_POST['sort_asc_desc'];

    // Legendary

    if (isset($_POST['legendary'])) {
        $legendary = 1;
    }

    else {
        $legendary = 0;
    }

    $find_sql = "SELECT *
FROM `L2_pokemon_details`
JOIN (

SELECT TypeID, Typename AS Typename1
FROM L2_type_data
)a ON ( L2_pokemon_details.Type1ID = a.TypeID )
JOIN (

SELECT TypeID, Typename AS Typename2
FROM L2_type_data
)b ON ( L2_pokemon_details.Type2ID = b.TypeID )
WHERE `Name` LIKE '%$name%'
AND `Generation` $generation_more_less $generation
AND `Legendary` = $legendary
AND ((`Typename1` LIKE '%$type1%' AND `Typename2` LIKE '%$type2%') 
OR (`Typename1` LIKE '%$type2%' AND `Typename2` LIKE '%$type1%'))
AND `Totalstats` $total_more_less $total
AND `HPstat` $hp_more_less $hp
AND `Attackstat` $attack_more_less $attack
AND `Defensestat` $defense_more_less $defense
AND `SpAttackstat` $spattack_more_less $spattack
AND `SpDefensestat` $spdefense_more_less $spdefense
AND `Speedstat` $speed_more_less $speed
ORDER BY `L2_pokemon_details`.$sort 
    if $sort_asc_desc = 'ASC' {'&nbsp;ASC'}
    else {'&nbsp;DESC'}

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
        