<?php
$count = 1;
?>
<section class="content step">
    <h4>1.3 Fairy rings, 43 prayer, kingdom, and 99 thieving</h4>
    <div id="guide-steps">
        <ul style="list-style: none;">
            <?php
        createStep('Travel to Varrock.', $current_page, $count++);
        createStep('Smith 3 bronze wire.', $current_page, $count++);
        createStep('Buy Oak longbow.', $current_page, $count++);
        createStep('Start <a href="https://oldschool.runescape.wiki/w/Priest_in_Peril" target="_blank">Priest in Peril</a>.', $current_page, $count++);
        createNote(false, 'If you didn\'t manage to buy 400 steel nails at the start, check sawmill now.');
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Priest_in_Peril" target="_blank">Priest in Peril</a>.', $current_page, $count++);
        createStep('Start <a href="https://oldschool.runescape.wiki/w/Rag_and_Bone_Man" target="_blank">Rag and Bone Man</a> on the way to the temple.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Nature_Spirit" target="_blank">Nature spirit</a>.', $current_page, $count++);
        createStep('Buy 1 Raw Shark from the Canifis food shop.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Creature_of_Fenkenstrain" target="_blank">Creature of Fenkenstrain</a>.', $current_page, $count++);
        createNote(false, 'Use port Phasmatys furnace, you should have slime in bank, use it to get 5 ecto-tokens.');
        echo '<br>';
        createSetupBox('Inventory Setup', 'Teleport runes, GP, and Rune Scimitar.');
        createStep('Use your Chronicle teleport.', $current_page, $count++);
        createStep('Go champion\'s guild and continue <a href="https://oldschool.runescape.wiki/w/Dragon_Slayer" target="_blank">Dragon Slayer</a>, ask every question.', $current_page, $count++);
        createStep('Buy a coif, green dhide chaps and vambs.', $current_page, $count++);
        createStep('Kill the nearby ram, bear and unicorn for their bones (Rag and bone man quest).', $current_page, $count++);
        createStep('Teleport to Camelot.', $current_page, $count++);
        createStep('Kill a giant bat (Rag and bone man) south west of Catherby.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Elemental_Workshop_II" target="_blank">Elemental workshop II</a>.', $current_page, $count++);
        createStep('Travel to Lumbridge.', $current_page, $count++);
        createSetupBox('Inventory Setup', 'Axe, Rope, Lit candle, Hammer, Stake for vampire slayer, and a Spade.');
        createStep('Get anti-dragon shield from the duke.', $current_page, $count++);
        createStep('Kill a goblin for the bone for rag and bone man.', $current_page, $count++);   

            ?>
        </ul>
    </div>
</section>
