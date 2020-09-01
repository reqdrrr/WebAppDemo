<?php

class MainController extends Controller {


    function render() {
        $this->f3->set('view', 'home.htm');
        $template = new Template;
        echo $template->render('layout.htm');
    }

    function readfile() {
        $this->f3->set('view', 'readfile.htm');
        $template = new Template;
        echo $template->render('layout.htm');
    }

    function displayfile() {
        $file = $this->f3->get('POST.file');
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($_FILES['file']['tmp_name']);
        $arr = $spreadsheet->getActiveSheet()->toArray();
        $arr = array_merge(array_diff($arr, array('', null)));
        for($i=0;$i<count($arr);$i++) {
            $arr[$i] = array_merge(array_diff($arr[$i], array('', null)));
        }
        $arr = array_filter($arr);

        // for($i=1;$i<count($arr);$i++) {
        //     $record = new Record($this->db);
        //     $record->id = $arr[$i][7];
        //     $record->firstName = $arr[$i][1];
        //     $record->lastName = $arr[$i][2];
        //     $record->gender = $arr[$i][3];
        //     $record->country = $arr[$i][4];
        //     $record->age = $arr[$i][5];
        //     $record->date = $arr[$i][6];
        //     $record->save();
        // }

        $this->f3->set('arr', $arr);
        $this->f3->set('view', 'displayfile.htm');
        $template = new Template;
        echo $template->render('layout.htm');
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