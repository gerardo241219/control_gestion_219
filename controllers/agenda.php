<?php
    class Agenda extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }

        function render()
        {
            $this->view->render('templates/header');
            $this->view->render('agenda/index');
            $this->view->render('agenda/registroModal');
            $this->view->render('templates/footer');
        }
    }