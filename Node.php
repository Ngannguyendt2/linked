<?php


class Node
{
public $data;
public $nextNode;
public function __construct($data)
{
    $this->data=$data;
    $this->nextNode=NULL;
}

    public function readData(){
    return $this->data;
}
}