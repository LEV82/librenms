<?php

$rrd_filename = rrd_name($device['hostname'], 'vsys-active-other-ip-cps');

$ds = 'vsys_active_other_ip_cps';

$colour_area = '9999cc';
$colour_line = '0000cc';

$colour_area_max = '9999cc';

$graph_max = 1;

$unit_text = 'Other Conn. p/s';

require 'includes/html/graphs/generic_simplex.inc.php';
