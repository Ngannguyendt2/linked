<?php
include_once ('LinkList.php');

$linkedList = new LinkList();

$linkedList->addFirst(11);
$linkedList->addFirst(22);
$linkedList->addLast(33);
$linkedList->addLast(44);
$totalNodes = $linkedList->getCount();
$linkData = $linkedList->read();

echo $totalNodes;
echo implode ('-' , $linkData);