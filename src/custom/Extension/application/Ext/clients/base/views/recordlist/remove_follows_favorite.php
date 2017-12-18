<?php

$viewdefs['base']['view']['recordlist']['favorite'] = false;
$viewdefs['base']['view']['recordlist']['following'] = false;

if(!empty($viewdefs['base']['view']['recordlist']['rowactions']['actions'])) {
    foreach($viewdefs['base']['view']['recordlist']['rowactions']['actions'] as $key => $val) {
        if(!empty($val) && !empty($val['type']) && $val['type'] == 'follow') {
            unset($viewdefs['base']['view']['recordlist']['rowactions']['actions'][$key]);
        }
    }
}
