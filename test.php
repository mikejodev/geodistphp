<?php

require_once 'geodist.php';

$geo = new geoDist(true);
echo 'Между Стокгольмом и Москвой примерно ' . $geo->distance('59.33248380365871', '18.070004301442538', '55.74442727218229', '37.599515379324174') . $geo->getUnit();
echo '<br><br>';
echo $geo->__debug();

?>