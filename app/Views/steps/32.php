<?php
$count = 1;
?>
<section class="content step">
    <h4>1.4 Various skilling, agility for graceful</h4>
    <div id="guide-steps">
        <ul style="list-style: none;">
            <?php
        createStep('Dive down and blow all of your molten glass into unpowered orbs.', $current_page, $count++);
        createNote(false, 
                   'The goal here is to pick up the seaweed spores that spawn every now and then.', 
                   '<img src="https://i.imgur.com/ecDT2Az.png">', 
                   'The spores can spawn north of the anchor so make sure you\'re checking the minimap and not just your item overlay
		I was getting around 25 spores/h while doing this, it\'s not much but it\'ll get you started.');
        createStep('Plant seaweed after you get your first 2 spores.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/The_Hand_in_the_Sand" target="_blank">Hand in the sand</a> quest, get daily sand every day.', $current_page, $count++);
        
        createStep('Do these quests while fletching darts: ', $current_page, $count++);
        createNote(false,
                   '<a href="https://oldschool.runescape.wiki/w/Big_Chompy_Bird_Hunting" target="_blank">Big Chompy Bird Hunting</a>', 
                   '<a href="https://oldschool.runescape.wiki/w/Rag_and_Bone_Man" target="_blank">Rag and Bone Man</a> (first part, should have all bones in bank already)', 
                   '<a href="https://oldschool.runescape.wiki/w/Family_Crest" target="_blank">Family crest</a>',
                   'Start <a href="https://oldschool.runescape.wiki/w/Legends%27_Quest" target="_blank">Legend\'s Quest</a> (Get vanilla pod for RFD)',
                   '<a href="https://oldschool.runescape.wiki/w/Death_Plateau" target="_blank">Death Plateau</a>',
                   '<a href="https://oldschool.runescape.wiki/w/Troll_Stronghold" target="_blank">Troll Stronghold</a>');
        createStep('Go back to the seaweed patches to pick up the random seaweed spores.', $current_page, $count++);
        createStep('Fletch maple shortbows (u) until 55 fletching.', $current_page, $count++);
        createStep('Fletch all of your maple logs into maple longbows (u).', $current_page, $count++);
        createNote(false, 
                   'You will get a weight warning but you can just ignore that, it makes no difference unless you go to the deep water.', 
                   'Make sure to leave some maple logs for birdhouses.');
        createStep('Buy 2300 gold ore from blast furnace ore shop, 2 invs per world.', $current_page, $count++);
        createStep('Get goldsmith gauntlets.', $current_page, $count++);
        createStep('Get 60 smithing.', $current_page, $count++);
            ?>
        </ul>
    </div>
</section>
