<?php
$count = 1;
?>
<section class="content step">
    <h4>1.1 - Early quests, wintertodt and ardy cloak 1</h4>
    <div id="guide-steps">
        <ul style="list-style: none;">
            <?php
        createStep('Walk to Falador.', $current_page, $count++); 
        createStep('Start <a href="https://oldschool.runescape.wiki/w/The_Knight%27s_Sword" target="_blank">The Knight\'s Sword</a> quest by talking to the Squire.', $current_page, $count++);
        createStep('Use the Minigame teleport to Clan wars.', $current_page, $count++);
        createSetupBox('Inventory Setup', 'Steel axe, 70gp, Tinderbox, Jug of water, 1 normal log');
        createStep('Recharge run energy using the FFA portal, then use the green portal north of the bank to teleport to Castle wars.', $current_page, $count++);
        createStep('Walk to Yanille.', $current_page, $count++);
        createStep('Check the hunter shop for ardy easy diary.', $current_page, $count++);
        createStep('Buy a pie dish at the Yanille cooking shop.', $current_page, $count++);
        createStep('Walk to Port Khazard.', $current_page, $count++);
        createStep('Buy 1 Swamp Paste in the General Store.', $current_page, $count++);
        createNote(false, 'It\'s possible that the store is bought out and you can\'t afford it, try hopping a few times but if you can\'t get one then it\'s
	fine, you can get one later.');
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Monk%27s_Friend" target="_blank">Monk\'s friend</a>.', $current_page, $count++);
        createStep('Get 35 Woodcutting at Oak trees and firemake the logs as you cut them. If you aren\'t 15 Woodcutting, cut normal logs until you are.', $current_page, $count++);
        createNote(false, '<br><b>Location</b>: (Click for zoom)<br>', '<img src="http://i.imgur.com/EN5Jpdb.png">');         
            ?>
        </ul>
    </div>
</section>
