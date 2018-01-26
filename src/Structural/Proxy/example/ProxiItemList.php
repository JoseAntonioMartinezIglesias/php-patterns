<?php

class ProxyItemList {

    private $itemList = NULL;

    function getItemCount() {
        if (NULL == $this->itemList) {
            $this->makeItemList();
        }
        return $this->itemList->getItemCount();
    }

    function addItem($item) {
        if (NULL == $this->itemList) {
            $this->makeItemList();
        }
        return $this->itemList->addItem($item);
    }

    function getItem($itemNum) {
        if (NULL == $this->itemList) {
            $this->makeItemList();
        }
        return $this->itemList->getItem($itemNum);
    }

    function removeItem($item) {
        if (NULL == $this->itemList) {
            $this->makeItemList();
        }
        return $this->itemList->removeItem($item);
    }

    function makeItemList() {
        $this->itemList = new itemList();
    }

}
