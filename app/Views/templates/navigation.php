<?php 
$previous_page = $current_page - 1;
$next_page = $current_page + 1;
if (!is_file(APPPATH.'/Views/steps/'.$next_page.'.php')) {
    $next_page = "#";
}
        
if (!is_file(APPPATH.'/Views/steps/'.$previous_page.'.php')) {
    $previous_page = "#";
}
$previousLink = base_url("guide/page/" . $previous_page);
$nextLink = base_url("guide/page/" . $next_page);
?>
</br></br>
<center>
    <!-- NAV -->
    <div class="ironman-nav">
        <?php 
                if ($previous_page != '#' and $previous_page < $current_page) {
                ?>
        <a class="ironman-nav-option" href="<?php echo $previousLink; ?>"><?php echo '<b><</b>' ?></a>
        <?php
                }
                ?>
        <span class="ironman-nav-option ironman-nav-option-current"><?php echo $current_page . ' / ' . $page_count; ?></span>
        <?php
                if ($next_page != '#' and $next_page > $current_page) { 
                ?>
        <a class="ironman-nav-option" href="<?php echo $nextLink; ?>"><?php echo '<b>></b>' ?></a>
        <?php
                }
                ?>
    </div>
    <!-- END OF NAV -->
</center><br>
