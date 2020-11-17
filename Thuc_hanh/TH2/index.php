<?php
include_once 'LinkList.php';
$LinkedList=new LinkList();
$LinkedList->insetFirst(11);
$LinkedList->insetFirst(22);
$LinkedList->insetLast(33);
$LinkedList->insetLast(44);
$totalNodes=$LinkedList->totalNodes();
$listData=$LinkedList->readList();

echo $totalNodes;
echo implode('-',$listData);
