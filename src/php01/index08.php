<?php

$people = [
  ['men', 25, 'Taro'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[2] . '(' . $person[0] . '歳' . $person[1] . ')'. '<br />';
}
