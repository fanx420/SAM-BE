<?php
    $islands = array();

    $islandQuery = "SELECT * FROM islandsofpersonality";
    $islandResult = executeQuery($islandQuery);
    
    while ($islandRow = mysqli_fetch_assoc($islandResult)) {
        
        $island = new IslandofPersonalities($islandRow['name'], $islandRow['shortDescription'], $islandRow['color'], $islandRow['image']);
        array_push($islands, $island);
    
    }
?>