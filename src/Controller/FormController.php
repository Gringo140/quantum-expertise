<?php


class FormController
{
    private $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function manage() {

        if (null!== filter_input(INPUT_POST, "valider")) {
            $this->model->setUser(
                filter_input(INPUT_POST, "genre"),
                filter_input(INPUT_POST, "names"),
                filter_input(INPUT_POST, "mail"),
                filter_input(INPUT_POST, "comments")
            );

        }

        include (__DIR__ . "./../../formulaireQE.html");
    }
}