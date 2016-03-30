<?php
$news= new SimpleXMLElement('<news></news>');
$item=$news->addChild('item');
$item->addChild('id', '1');
$item->addChild('title', 'Some');
$item->addChild('text', 'lorem of first');
$item2=$news->addChild('item2');
$item2->addChild('id', '2');
$item2->addChild('title', 'Some');
$item2->addChild('text', 'lorem of second');
//var_dump($news);
echo $news->asXML();
