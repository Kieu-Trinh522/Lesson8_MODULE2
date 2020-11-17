<?php


class Nodes
{
    public $data;
    public $next;


    function __construct($data)
    {
        $this->data = $data;
        $this->next=NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}