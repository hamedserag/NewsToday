<?php
$countriesNames = ['argentina','australia','austria','belgium','brazil','canada','chile','colombia','denmark','egypt','finland','france','germany','greece','hong_kong','hungary','india','indonesia','ireland','israel','italy','japan','kenya','malaysia','mexico','netherlands','nigeria','norway','philippines','poland','portugal','romania','russia','saudi_arabia','singapore','south_africa','south_korea','sweden','switzerland','taiwan','thailand','turkey','ukraine','united_kingdom','united_states','vietnam'];
$len = count($countriesNames);
for($i=0;$i<$len;$i++){
    ?>
<span class="countrySpan">
    <a class="py-1 px-3 countryLink"
        href="/lordsnews/country_news.php/?country=<?php echo($countriesNames[$i]) ?>"> <?php echo($countriesNames[$i]) ?></a>
</span>
<?php
}

?>