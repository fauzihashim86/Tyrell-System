<?php
if(isset($_GET['players'])){
    $playerNo = $_GET['players'];
    // list of cards in array
    $cards = [
        "S-A", "S-2", "S-3", "S-4", "S-5", "S-6", "S-7", "S-8", "S-9", "S-X", "S-J", "S-Q", "S-K",
        "H-A", "H-2", "H-3", "H-4", "H-5", "H-6", "H-7", "H-8", "H-9", "H-X", "H-J", "H-Q", "H-K",
        "D-A", "D-2", "D-3", "D-4", "D-5", "D-6", "D-7", "D-8", "D-9", "D-X", "D-J", "D-Q", "D-K",
        "C-A", "C-2", "C-3", "C-4", "C-5", "C-6", "C-7", "C-8", "C-9", "C-X", "C-J", "C-Q", "C-K"
    ];

    shuffle($cards);//shuffle value in array

    // Distribute the card among players
    $players = array_fill(0, $playerNo, []);
    for ($i = 0; $i < count($cards); $i++) {
        $players[$i % $playerNo][] = $cards[$i];
    }
    //display card
    foreach($players AS $play){
        for($x=0;$x<count($play);$x++){
            if($x == 0){
                echo $play[$x];
            } else {
                echo ",".$play[$x];
            }
        }
        echo "<br>";
    }
}
?>