<?php 
  function hp_sum($pv) {
    $sum_hp = 0;
    foreach($pv as $pokemon) {
      $sum_hp += $pokemon[5];
    }

    return $sum_hp;
  }

  function ave_attack($pv) {
    $total_atk = 0;
    $total_pokemon = count($pv);

    foreach($pv as $pokemon) {
      $total_atk += $pokemon[6];
    }
    $ave_atk = $total_atk/$total_pokemon;
    return $ave_atk;
  }

  $pv = array //2.
    (
        array(1, "Bulbasaur", "Grass", "Poison", "Overgrow", 45, 49, 49),
        array(2, "Ivysaur", "Grass", "Poison", "Overgrow", 60, 62, 63),
        array(3, "Venusaur", "Grass", "Poison", "Overgrow", 80, 82, 83),
        array(4, "Charmander", "Fire", "N/A", "Blaze", 39, 52, 43),
        array(5, "Charmeleon", "Fire", "N/A", "Blaze", 58, 64, 58),
        array(6, "Charizard", "Fire", "Flying", "Blaze", 78, 84, 78),
        array(7, "Squirtle", "Water", "N/A", "Torrent", 44, 48, 65),
        array(8, "Wartotle", "Water", "N/A", "Torrent", 59, 63, 80),
        array(9, "Blastoise", "Water", "N/A", "Torrent", 79, 83, 100),
        array(10, "Caterpie", "Bug", "N/A", "Shield Dust", 50, 20, 55),
        
    );
    echo "Pokemon Attributes <br>";
    echo "Total HP: ".hp_sum($pv)."<br>";
    echo "Average attack: ".ave_attack($pv);
?>


