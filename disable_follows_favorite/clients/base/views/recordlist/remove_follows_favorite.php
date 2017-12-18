<?php

$module = '{MODULENAME}';

// remove field from listview
$viewdefs[$module]['base']['view']['recordlist']['favorite'] = false;
$viewdefs[$module]['base']['view']['recordlist']['following'] = false;

// remove ui option to follow
if(!empty($viewdefs[$module]['base']['view']['recordlist']['rowactions']['actions'])) {
    foreach($viewdefs[$module]['base']['view']['recordlist']['rowactions']['actions'] as $key => $val) {
        if(!empty($val) && !empty($val['type']) && $val['type'] == 'follow') {
            unset($viewdefs[$module]['base']['view']['recordlist']['rowactions']['actions'][$key]);
        }
    }
}
