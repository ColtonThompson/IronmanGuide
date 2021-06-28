<?php
$count = 1;
?>
<section class="content step">
    <h4>1.3 Fairy rings, 43 prayer, kingdom, and 99 thieving</h4>
    <div id="guide-steps">
        <ul style="list-style: none;">
            <?php
        createStep('Make an Amulet of Magic.', $current_page, $count++);
        createStep('Kill blue dragons with iban\'s blast for 43 prayer.', $current_page, $count++);
        createNote(false, 
                   'We don\'t have the agility level for shortcut yet so don\'t bother banking the hides, not worth doing twice as many trips.', 
                   'Add 2400 xp to your current prayer xp and calculate how many bones you need, level 43 requires 50339xp and 1 bone is 288xp with 
	ectofuntus (2.4k pray xp is from ghosts ahoy quest which will be completed before using the bones)',
                   'Regular ironmen can use the wildy altar if you want to, but either way it\'s only around 85 bones with ecto so do whichever method.');
        createStep('Keep 1 dragon bone in your bank for the <a href="https://oldschool.runescape.wiki/w/Watchtower" target="_blank">Watchtower</a> quest.', $current_page, $count++);
        createStep('Minigame tele to Khazard.', $current_page, $count++);
        createStep('Buy however many buckets of slime you need for the bones.', $current_page, $count++);
        createStep('Equip Ghostspeak amulet.', $current_page, $count++);
        createStep('If you didn\'t prepare the nettle water earlier, do it now.', $current_page, $count++);
        createStep('Make sure you have all ghosts ahoy items.', $current_page, $count++);
        createSetupBox('Inventory Setup', 'GP stack, 9 d bones, 9 pot, 9 slime, (general store sells pots if you don\'t have)');
        createStep('Charter to Port Phasmatys.', $current_page, $count++);
        createStep('Start <a href="https://oldschool.runescape.wiki/w/Ghosts_Ahoy" target="_blank">Ghosts Ahoy</a>.', $current_page, $count++);
        createStep('Grind 9 d bones and offer them, get ecto tokens.', $current_page, $count++);
        createStep('Finish <a href="https://oldschool.runescape.wiki/w/Ghosts_Ahoy" target="_blank">Ghosts Ahoy</a>.', $current_page, $count++);
        createStep('Grind the rest of your bones to get 43 prayer.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Monkey_Madness_I" target="_blank">Monkey madness</a>, focus the reward on attack and defense.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Wanted!" target="_blank">Wanted!</a> quest.', $current_page, $count++);
            ?>
        </ul>
    </div>
</section>
