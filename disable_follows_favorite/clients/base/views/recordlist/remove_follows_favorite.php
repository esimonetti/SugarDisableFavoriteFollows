<?php

$module = '{MODULENAME}';

// remove field from listview
$viewdefs[$module]['base']['view']['recordlist']['favorite'] = false;
$viewdefs[$module]['base']['view']['recordlist']['following'] = false;

// if there is no rowactions section on this combined custom view, forcefully set it from the base view definition
if (empty($viewdefs[$module]['base']['view']['recordlist']['rowactions'])) {
    require('clients/base/views/recordlist/recordlist.php');
    if (!empty($viewdefs['base']['view']['recordlist']['rowactions'])) {
        $viewdefs[$module]['base']['view']['recordlist']['rowactions'] = $viewdefs['base']['view']['recordlist']['rowactions'];
    }
}

// remove ui option to follow
if (!empty($viewdefs[$module]['base']['view']['recordlist']['rowactions']['actions'])) {
    foreach ($viewdefs[$module]['base']['view']['recordlist']['rowactions']['actions'] as $key => $val) {
        if (!empty($val) && !empty($val['type']) && $val['type'] == 'follow') {
            unset($viewdefs[$module]['base']['view']['recordlist']['rowactions']['actions'][$key]);
        }
    }
}
