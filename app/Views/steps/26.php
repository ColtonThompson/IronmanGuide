<?php
$count = 1;
?>
<section class="content step">
    <h4>1.3 Fairy rings, 43 prayer, kingdom, and 99 thieving</h4>
    <div id="guide-steps">
        <ul style="list-style: none;">
            <?php
        createStep('Do Turael slayer with dorg cbow until 37 Range.', $current_page, $count++);
        createNote(false, 'We\'ll be using Turael until 50 tasks completed, every 10th task should be done with the highest level slayer master you can use.', 'Even though we are using Turael, the goal is to get slayer xp so you should always kill monsters with higher hp, for example
	       on bat tasks kill giant bats.', 'Vannaka has too many bad tasks so I think this is overall better.');
        createStep('Get 100% hosidius favour, you should have at least 300 compost in bank.', $current_page, $count++);
        createStep('At 45% favour, do mess hall until 100% and don\'t forget to lock the favour by talking to <a href="https://oldschool.runescape.wiki/w/Hosa" target="_blank">Hosa</a>.', $current_page, $count++);
        createStep('Buy mithril and rune axe from the woodcutting guild.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Animal_Magnetism" target="_blank">Animal Magnetism</a>.', $current_page, $count++);
        createStep('Buy mithril platebody from Horvik in Varrock.', $current_page, $count++);
        createStep('Buy mithril platelegs from Al-Kharid.', $current_page, $count++);
        createStep('Do <a href="https://oldschool.runescape.wiki/w/Spirits_of_the_Elid" target="_blank">Spirits of the Elid</a> quest.', $current_page, $count++);
        createNote(false, 'You can use the mithril armor for tanking the golems, or flinch them if you\'re taking too much damage.');
        createStep('Do the <a href="https://oldschool.runescape.wiki/w/Underground_Pass" target="_blank">Underground Pass</a> quest.', $current_page, $count++);
        createNote(false,  
                   'Use the mithril armour for this quest, don\'t really need anything better at this point and you\'ll need to buy it later anyway.', 
                   'You can trap the paladins behind each other same way as the captain from the tourist trap quest.', 
                   'For the spider, there are 2 skeletons on the east wall, stand between them and then mage the big one with earth blast. Sometimes
	the little ones attack you but just run a bit north and then back to the same spot, they\'ll get stuck.');
        echo '<br>';
        createNote(true, 'While this quest might seem like a dangerous one without overheads, it\'s honestly not. Check out the video.', '<iframe width="520" height="300" src="https://www.youtube.com/embed/WI2SYhpwIh8?controls=1" frameborder="0"></iframe>');
        createStep('Upgrade Iban\'s Staff.', $current_page, $count++);
        createStep('Get 50 attack doing more Turael slayer, remember to get every 10th task from Vannaka.', $current_page, $count++);
        createNote(false, 'If you get a task from Vannaka that you really can\'t do without melee protect then go kill sand crabs until 50 attack.');
            ?>
        </ul>
    </div>
</section>
