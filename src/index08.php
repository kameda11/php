<?php

$people = [
    ['Taro' . 25 . 'men'],
    ['Jiro' . 20 . 'men'],
    ['hanako' . 16 . 'women']
];

foreach ($people as $person) {
    echo $person[0] . '(' . $person[2] . '歳' . $person[3] . ')' . '<br />';
}