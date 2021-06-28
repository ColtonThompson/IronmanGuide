<?php
$count = 1;
?>
<section class="content step">
    <h4>1.2 Thieving, fishing and mining</h4>
    <div id="guide-steps">
        <ul style="list-style: none;">
            <?php
        createStep('Start <a href="https://oldschool.runescape.wiki/w/The_Feud" target="_blank">The Feud</a> at Ali Morrisane.', $current_page, $count++);
        createStep('From Ali Morrisane, buy the desert disguise for <a href="https://oldschool.runescape.wiki/w/The_Feud" target="_blank">The Feud</a> quest, and get 15 cooking with the raw chicken that he sells.', $current_page, $count++);
        createStep('Smelt the 5 silver, make a sickle and unstrung holy symbol, keep 3 bars.', $current_page, $count++);
        createStep('Give the key imprint and bronze bar to Osman for <a href="https://oldschool.runescape.wiki/w/Prince_Ali_Rescue" target="_blank">Prince Ali Rescue</a> quest.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/The_Feud" target="_blank">The Feud</a>.', $current_page, $count++);
        createNote(true, 'If you\'re scared of going to mage bank, unlock the rune shop.
	Don\'t bother with the blackjack miniquest, all of them have the same chance to knock out so just use the willow blackjack.');
            
        createStep('Blackjack until 50 thieving, you can buy wines from the bar to use as food.', $current_page, $count++);
    
        createNote(false, 'If you\'re planning on 3-tick fishing then home tele to lumby and pick up 15 swamp tar now.', 'If you think you\'re gonna keep messing up and making the tar multiple times, it might be worth your time getting 23 hunter 
	and using kebbit claws with leather vambs instead. 23 hunter should take just less than 1 hour.');
        createStep('Use your Ardougne Cloak to teleport and take the boat from Ardougne to Brimhaven.', $current_page, $count++);
        createStep('Use the travel option on the cart to travel to Shilo Village.', $current_page, $count++);
        createStep('Use the furnace to make molten glass until level 32 crafting.', $current_page, $count++);
        createStep('Buy 25k feathers from Shilo Village fishing shop.', $current_page, $count++);
        createNote(false, 'If you can\'t afford them then open some of your wintertodt crates.');
        createStep('Get 58 fishing with trout and salmon.', $current_page, $count++);
        createNote(false, 'Bank the fish for cooking xp', 'You can pretty easily grow cats while doing this fishing grind since you can just feed it the fish you fish.
	I recommend raising 10 cats for death runes in total, after that it\'s up to you if you can be bothered.');
            ?>
        </ul>
    </div>
</section>
