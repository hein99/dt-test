<?php

class FileUpload extends AppModel {

    public function import($filename)
    {
        $file = fopen($filename, "r");
        $header = fgetcsv($file);

        // print_r($header); echo '<br>';

        while(($row = fgetcsv($file)) !== FALSE) {
            $data = array(
                'FileUpload' => array(
                    'name' => $row[0],
                    'email' => $row[1]
                )
            );
            // print_r($data); echo '<br>';
    
            $this->create();
            $this->save($data);
        }

        fclose($file);

        // debug("End"); exit;
    }
}