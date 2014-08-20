<?php


class Model
{
    public $db;

    public function __construct($app = null)
    {
        if ($app && $app->db) {
            $this->db = $app->db;
        }
    }
}
