<?php

class MainController extends Controller {

    function render($f3) {
        $messages = new Messages($this->db);
        $msg = $messages->all();

        $f3->set('msg', $msg);
        $template = new Template;
        echo $template->render('template.htm');
    }
}