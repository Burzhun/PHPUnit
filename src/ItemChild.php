<?php

/**
 * Item
 *
 * An example item class
 */
class ItemChild extends Item{

    public function getId()
    {
        return parent::getID();
    }

    public function getToken()
    {
        return parent::getToken();
    }
}