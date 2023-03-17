<?php
function getArchivePlayer()
{
    $url = 'http://localhost/FantacalcioApplication/backend/api/player/getArchivePlayer.php';

    $json_data = file_get_contents($url);
    $decode_data = json_decode($json_data, $assoc = true);

    if ($json_data != false) {
        $player_data = $decode_data;
        $player_arr = array();
        if (!empty($player_data)) {
            foreach ($player_data as $player) {
                $player_record = array(
                    'quotation' => $player['quotation'],
                    'name' => $player['name'],
                    'role' => $player['role'],
                    'team' => $player['team'],
                );
                array_push($player_arr, $player_record);
            }

            return $player_arr;
        } else {
            return -1;
        }

    } else {
        return -1;
    }
}
