<?php

include_once 'Form.php';
include_once 'TextElement.php';

$form = new Composite\Form();
$form->addElement(new Composite\TextElement('Email:'));
$form->addElement(new Composite\InputElement());

$embed = new Composite\Form();
$embed->addElement(new Composite\TextElement('Password:'));
$embed->addElement(new Composite\InputElement());
$form->addElement($embed);

print $form->render();

