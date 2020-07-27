<?php

class MainController extends Controller {

    function render($f3) {
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('./app/controllers/file_example_XLSX_100.xlsx');
        // print_r($spreadsheet->getActiveSheet()->toArray());
        $arr = $spreadsheet->getActiveSheet()->toArray();
        $f3->set('arr', $arr);

        $messages = new Messages($this->db);
        $msg = $messages->all();

        $f3->set('msg', $msg);
        $template = new Template;
        echo $template->render('template.htm');
    }
}