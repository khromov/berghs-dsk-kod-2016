<?php
$pris_exklusive_moms = 100;
$momssats = 6;

$pris_inklusive_moms = $pris_exklusive_moms + (($momssats/100) * $pris_exklusive_moms);
echo $pris_inklusive_moms;
?>
