<?php
$count = 1;
?>
<section class="content step">
    <h4>1.1 - Early quests, wintertodt and ardy cloak 1</h4>
    <div id="guide-steps">
        <ul style="list-style: none;">
            <?php
        createStep('Take the boat to Great Kourend.', $current_page, $count++);
        createStep('Make your way to Wintertodt.', $current_page, $count++);
        createStep('Fletch all 1k bronze arrows while you walk.', $current_page, $count++);
        createNote(false, 
                   'If you see wolves near wintertodt, you went the wrong way. Shouldn\'t get hit by anything on the way.', 
                   'Should now have 15 fletching and hopefully 15+ construction as well, this will increase the xp you get in these skills from wintertodt.');
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Wintertodt" target="_blank">Wintertodt</a> until 60 Woodcutting, should get this at 89 firemaking if you don\'t fletch', $current_page, $count++);
        createNote(false,
                   'You really shouldn\'t be in any danger of dying with 10hp, but pay attention anyway, it\'s a long walk back if you die.', 
                   '10HP accounts start taking 1 damage at 56FM even without warm clothing, but if you dug up the clue hunter boots and gloves earlier
	then you might as well use them.',
                   'Save crates if you want better rewards for later, your skill levels determine the rewards you get otherwise you can open them right away.',
                  'Every 500 additional points will guarantee an extra reward, with points increasing the chance in between these intervals.');
        echo '</br>';
        createSetupBox('Inventory Setup', 'GP, few cakes, chronicle, bronze sword');
        createStep('Home tele to Lumbridge.', $current_page, $count++);
        createStep('Buy 3 buckets and 1 bucket pack from the general store.', $current_page, $count++);
        createStep('Walk north to Fred\'s farm.', $current_page, $count++);
        createStep('Get raw chicken at Fred\'s.', $current_page, $count++);
        createStep('Pick up egg north of Fred.', $current_page, $count++);
        createStep('Kill 1 cow calf for meat.', $current_page, $count++);
        createStep('Fill 3 buckets with milk.', $current_page, $count++);
        createNote(false, 'Dairy cow is north of the windmill.');
            ?>
        </ul>
    </div>
</section>
