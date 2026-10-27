<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php
include('session.php');

$validGames = [
    'FreeFire',
    'LienQuanMobile',
    // 'PUBGMobile',
    // 'Valorant',
    // 'FCOnline',
    'Roblox',
    // 'LMHT',
    // 'TocChien',
    'FCOnlineM'
];

if (isset($_GET['game']) && in_array($_GET['game'], $validGames)) {
    $game = $_GET['game'];
} else {
    $game = 'FreeFire'; 
}

include "$game.php";
exit;
?>
