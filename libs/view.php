<?php

    class view
    {
        function __construct()
        {
            
        }

        function render($nombre, $data = [])
        {
            $this->data = $data;
            require_once 'views/' . $nombre . '.php';
        }
    }