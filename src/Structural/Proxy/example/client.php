<?php

  $proxyItemList = new ProxyItemList();
  
  $item = new Item('Write Php in Netbeans','jositoyoyo');
  $proxyItemList->addItem($item);
 
  echo $proxyItemList->getItemCount();
   
  $outItem = $proxyItemList->getItem(1);
  echo $outItem->getUserAndTitle(); 
 
  $proxyItemList->removeItem($outItem);
  echo $proxyItemList->getItemCount();

