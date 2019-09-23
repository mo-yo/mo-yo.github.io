<?php
if (isset($address) && is_array($address)) {
    $headers = array();
    $contents = array();
    foreach ($address as $key => $value) {
        if (trim($value['value']) != "") {
            $headers[] = $value['label'];
            $contents[] = $value['value'];
        }
    }
    echo @implode(";", $headers) . "\n" . @implode(";", $contents);
}
