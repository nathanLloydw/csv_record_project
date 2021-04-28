<?php

class Records_controller
{
    public $record_name = 'tom';

    function get_records()
    {
        $csvFile = file('records.csv');
        $data = [];
        foreach ($csvFile as $line) 
        {
            $data[] = str_getcsv($line);
        }

        return $data;
    }

    function add_record($firstname,$lastname,$email,$mobile)
    {
        $fp = fopen("records.csv", 'a');  
        $row_id = count(file('records.csv'));

        fputcsv($fp, array($row_id,$firstname,$lastname,$email,$mobile)); 
        fclose($fp);
    }
}


?>