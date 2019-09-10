<?php


include "Node.php";
class LinkList
{
 protected $firstNode;
 protected $lastNode;
 protected $countNode;
 public function addFirst($data){
$link=new Node($data);
$link->nextNode=$this->firstNode;
$this->firstNode=$link;
if($this->lastNode==null){
    $this->lastNode=$link;
}
$this->countNode++;
 }
 public function addLast($data){
     if($this->firstNode != NULL) {
         $link = new Node($data);
         $this->lastNode->next = $link;
         $link->nextNode = NULL;
         $this->lastNode = $link;
         $this->countNode++;
     }else {
         $this->addFirst($data);
     }
 }
 public function getCount(){
return $this->countNode;
 }
 public function read(){
     $listData = array();
     $current = $this->firstNode;

     while($current != NULL)
     {
         array_push($listData, $current->readData());
         $current = $current->next;
     }
     return $listData;
 }
}