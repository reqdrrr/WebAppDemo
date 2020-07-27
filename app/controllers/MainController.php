<?php

class MainController extends Controller {


    function render() {
        $messages = new Messages($this->db);
        $msg = $messages->all();

        $this->f3->set('msg', $msg);
        $template = new Template;
        echo $template->render('template.htm');
    }

    function readfile() {
        $file = $this->f3->get('POST.file');
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($_FILES['file']['tmp_name']);
        $arr = $spreadsheet->getActiveSheet()->toArray();
        $this->f3->set('arr', $arr);
        $template = new Template;
        echo $template->render('file.htm');
    }

    function savefile() {
        print_r($this->f3->get('arr'));
        // foreach($this->f3->get('arr') as $row) {
        //     $record = new Record($this->db);
        //     $record->id = $row[7];
        //     $record->firstName = $row[1];
        //     $record->lastName = $row[2];
        //     $record->gender = $row[3];
        //     $record->country = $row[4];
        //     $record->age = $row[5];
        //     $record->date = $row[6];
        //     $record->save();
        // }
        // $this->f3->reroute('/');
    }
}