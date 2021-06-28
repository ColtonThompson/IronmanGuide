<?php
$count = 1;
?>
<section class="content step">
    <h4>1.2 Thieving, fishing and mining</h4>
    <div id="guide-steps">
        <ul style="list-style: none;">
            <?php
        createStep('Minigame tele to Burthrope games\' room.', $current_page, $count++);
        createStep('Cook all of your trout, don\'t cook salmon yet.', $current_page, $count++);
        createStep('Use your minigame tele to Barbarian Assault.', $current_page, $count++);
        createStep('Get 50 agility from barb fishing, should be at 74 fishing.', $current_page, $count++);
        createNote(false, 'You can feed caviar and roe to kitten, bring a knife to cut the fish.', 'I honestly can\'t recommend any other way to train to 50 agi than fishing, it doesn\'t take that long and you\'ll need the fish levels
	eventually anyway.');
        createStep('After you reach 50 Agility, use your minigame tele to Burthrope.', $current_page, $count++);
        createStep('Do the <a href="https://oldschool.runescape.wiki/w/Rogues%27_Den" target="_blank">Rogue\'s Den</a> minigame for full rogue outfit.', $current_page, $count++);
        createNote(false, 'Guide for Rogue\'s Den by Lelador.', '<b>Safespot Location:</b>', '<iframe width="520" height="300" src="https://www.youtube.com/embed/c5tQewEZPe4?controls=1" frameborder="0"></iframe><br>', 'Cook the salmon to regen run energy after every time you finish 1 attempt of the minigame.', 'Buy 50 lockpicks while you\'re here.');
            ?>
        </ul>
    </div>
</section>
