<?php

class ItemList {

    private $items = array();
    private $itemCount = 0;

    public function __construct() {
        
    }

    public function getItemCount() {
        return $this->itemCount;
    }

    private function setItemCount($newCount) {
        $this->itemCount = $newCount;
    }

    public function getItem($itemNumberToGet) {
        if ((is_numeric($itemNumberToGet)) && ($itemNumberToGet <= $this->getItemCount())) {
            return $this->items[$itemNumberToGet];
        } else {
            return NULL;
        }
    }

    public function addItem(Item $item) {
        $this->setItemCount($this->getItemCount() + 1);
        $this->items[$this->getItemCount()] = $item;
        return $this->getItemCount();
    }

    public function removeItem(Item $item) {
        $counter = 0;
        while (++$counter <= $this->getItemCount()) {
            if ($item->getAuthorAndTitle() == $this->items[$counter]->getAuthorAndTitle()) {
                for ($x = $counter; $x < $this->getItemCount(); $x++) {
                    $this->items[$x] = $this->items[$x + 1];
                }
                $this->setItemCount($this->getItemCount() - 1);
            }
        }
        return $this->getItemCount();
    }

}
