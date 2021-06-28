<?php
$count = 1;
?>
<section class="content step">
    <h4>1.1 - Early quests, wintertodt and ardy cloak 1</h4>
    <div id="guide-steps">
        <ul style="list-style: none;">
            <?php
        createStep('Minigame tele to fish trawler', $current_page, $count++);
        createStep('Buy 2 buckets of slime.', $current_page, $count++);
        createStep('Buy 10 flour from general store.', $current_page, $count++);
        createStep('Buy buckets of sand and soda ash until you hit the log-in limit.', $current_page, $count++);
        createNote(false, 'You only need to buy around 1200 buckets of sand and soda ash in total, rest of crafting will be done with other methods.', 'I recommend buying these supplies when you\'re gonna go afk for more than 10mins, this way you can buy them again when u log in.');  
        createStep('Mine 15 clay south of Khazard.', $current_page, $count++);
        createSetupBox('Inventory Setup', 'Runes for fire strike, barcrawl card, cakes, axe');
        createStep('Fire strike imps west of the tower of life for all 4 beads.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Fight_Arena" target="_blank">Fight Arena</a>.', $current_page, $count++);
        createStep('Do Tree gnome village, get Glarial\'s pebble on the way for Waterfall.', $current_page, $count++);
        createNote(false, 'Safespot the khazard warlord, either by using another account to block him or just by walking in and out of his aggro range.'); 
        createStep('Use the spirit tree and go to battlefield of khazard.', $current_page, $count++);
        createStep('Run to ZMI bank and safespot the zamorak warrior until you get a rune scimitar.', $current_page, $count++);
        createNote(false, 'Getting the scim is optional but it\'s not too rare and you\'re still getting mage xp.', 'You can also buy a rune sword from champion\'s guild if you don\'t want to camp for the scimitar.');     
        createStep('Get a drink from Ardy bar for the barcrawl.', $current_page, $count++);
        createStep('Buy 4 compost pack from the Ardy farming shop.', $current_page, $count++);
        createStep('Train 42 magic at Moss giants near fishing guild.', $current_page, $count++);
        createNote(false, 'Bury the bones.', 'From this point on, use teleports if it saves time/run energy. I\'m not going to write every teleport to this guide.');    
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Hazeel_Cult" target="_blank">Hazeel Cult</a>.', $current_page, $count++);
        createStep('Get a drink for the barcrawl quest from the brimhaven bar.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Tribal_Totem" target="_blank">Tribal Totem</a>.', $current_page, $count++);
        createNote(false, 'Buy some swordfish and karambwans from the food shop where you start the quest at for some of the more difficult quests'); 
        echo '<br>';
        createSetupBox('Inventory Setup', '<b>No GP</b>, glarial\'s pebble, notes for dwarf cannon and ammo mould, rope, 6 air/water/earth runes, cakes<'); 
            ?>
        </ul>
    </div>
</section>
