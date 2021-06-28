<?php
$count = 1;
?>
<section class="content step">
    <h4>3.0 PVM preparation, Barrows, Zulrah</h4>
    <div id="guide-steps">
        <ul style="list-style: none;">
            <?php
        echo '<b>After trident:</b>';
        createStep('Get 83 or higher herblore, boost with botanical pie to anti venoms.', $current_page, $count++);
        createNote(false, 'Alternatively if you are trying to get anti venoms for Zulrah, you can use the Cure Me spell from the Lunar spellbook (71 magic required)');
        createStep('Get 82 construction with teaks, make the mounted myth cape for higher xp/plank.', $current_page, $count++);
        createNote(false, 'You could go get a dragon axe from dks before this but even with rune axe it\'s not that much slower');
        createStep('Boost +8 const for the highest tier pool.', $current_page, $count++);
        createStep('Get 93 crafting.', $current_page, $count++);
        createStep('Do barrows for 120k chaos runes and buy 4 onyxes for the zenytes.', $current_page, $count++);
        createNote(false, 'If you get lucky with all the good items first then just buy the rest of the runes.','fury is kinda useless so i\'d just wait until onyx drop from zulrah.');
        createStep('Kill Zulrah for the uniques.', $current_page, $count++);
            echo "<center><h3>Quest Complete!<h3></center>";
            ?>
        </ul>
    </div>
</section>
