<?php

require("phpmailer.php");

require_once("db_load.php");


function ENK_save_submission($entry, $db_table) {

    $entry_keys = array('date');

    $entry_values = array(date("Y-m-d H:i:s"));

    $form_name = str_replace('_entries', '', $db_table);

    foreach ($entry as $key => $value) {

        if (is_array($value)) {

            $value = implode(', ', $value);

        }



        $entry_keys[] = $key;

        $entry_values[] = mysql_real_escape_string($value);

    }



    $entry_keys = '`' . implode('`, `', $entry_keys) . '`';

    $entry_values = '"' . implode('", "', $entry_values) . '"';



    db_query('

            INSERT INTO ' . $db_table . ' (' . $entry_keys . ', `form`) 

            VALUES (

                    ' . $entry_values . ', "' . $form_name . '"

                    )

    ');

}



function ENK_get_email_notification_body($entry) {

    if (isset($entry['verify'])) {
        unset($entry['verify']);
    }

    if (isset($entry['77ba1f5f4a6e5c058e720e1bf3262325']) && isset($entry['2a7c8db096f32cdb724d63842a30c7d7'])) {
        unset($entry['77ba1f5f4a6e5c058e720e1bf3262325']);
        unset($entry['2a7c8db096f32cdb724d63842a30c7d7']);
    }

    $body = "";

    $i = 1;

    $startTable = '<table width="550" border="0" cellspacing="2" cellpadding="2">';

    $middleTable = '';

    $endTable = '</table>';



    foreach($entry as $key=>$value) {

        if (is_array($value)) {

            $value = implode(', ', $value);

        }



        if ($i % 2 != 0) # An odd row

            $rowColor = "#ccc";

        else # An even row

            $rowColor = "#fff"; 

            

        $middleTable .= "<tr style='background-color: $rowColor;'><td>$key</td><td>$value</td></tr>";

        

        $i++;   

    }

    $body = $startTable.$middleTable.$endTable;

    ob_start();

    ?>

    <html>

        <head>

            <style type="text/css">



            </style>

        </head>

        <body>

            <?php echo $body; ?>

        </body>

    </html>



    <?php



    $body = ob_get_contents();



    return $body;

}



function get_apply_form_fields() {

    return array(

        'id' => array(

            'label'=>'ID',

            'show_on_view_all_screen'=>true,

        ),

        'date' => array(

            'label'=>'Date',

            'show_on_view_all_screen'=>true,

        ),

        'showName' => array(

            'label'=>'Show',

            'show_on_view_all_screen'=>true,

        ),

        'firstName' => array(

            'label'=>'First Name',

            'show_on_view_all_screen'=>true,

        ),

        'lastName' => array(

            'label'=>'Last Name',

            'show_on_view_all_screen'=>true,

        ),

        'contactEmail' => array(

            'label'=>'Email',

            'show_on_view_all_screen'=>true,

        ),

        'contactPhone' => array(

            'label'=>'Phone',

            'show_on_view_all_screen'=>true,

        ),

        'companyName' => array(

            'label'=>'Company',

            'show_on_view_all_screen'=>false,

        ),

        'showRoom' => array(

            'label'=>'Showroom',

            'show_on_view_all_screen'=>false,

        ),

        'website' => array(

            'label'=>'Website',

            'show_on_view_all_screen'=>false,

        ),

        'referralSource' => array(

            'label'=>'Referral',

            'show_on_view_all_screen'=>false,

        ),

        'fullAddress' => array(

            'label'=>'Address',

            'show_on_view_all_screen'=>false,

        ),

        'city' => array(

            'label'=>'City',

            'show_on_view_all_screen'=>false,

        ),

        'state' => array(

            'label'=>'State',

            'show_on_view_all_screen'=>false,

        ),

        'postal' => array(

            'label'=>'Postal',

            'show_on_view_all_screen'=>false,

        ),

        'gender' => array(

            'label'=>'Gender',

            'show_on_view_all_screen'=>false,

        ),

        'product' => array(

            'label'=>'Product',

            'show_on_view_all_screen'=>false,

        ),

    );

}



function get_visitor_form_fields() {

    return array(

        'id' => array(

            'label'=>'ID',

            'show_on_view_all_screen'=>true,

        ),

        'date' => array(

            'label'=>'Date',

            'show_on_view_all_screen'=>true,

        ),

        'showName' => array(

            'label'=>'Show',

            'show_on_view_all_screen'=>true,

        ),

        'visitorType' => array(

            'label'=>'Visitor Type',

            'show_on_view_all_screen'=>true,

        ),

        'firstName' => array(

            'label'=>'First Name',

            'show_on_view_all_screen'=>true,

        ),

        'lastName' => array(

            'label'=>'Last Name',

            'show_on_view_all_screen'=>true,

        ),

        'contactEmail' => array(

            'label'=>'Email',

            'show_on_view_all_screen'=>true,

        ),

        'contactPhone' => array(

            'label'=>'Phone',

            'show_on_view_all_screen'=>true,

        ),

        'companyName' => array(

            'label'=>'Company',

            'show_on_view_all_screen'=>false,

        ),

        'showRoom' => array(

            'label'=>'Showroom',

            'show_on_view_all_screen'=>false,

        ),

        'website' => array(

            'label'=>'Website',

            'show_on_view_all_screen'=>false,

        ),

        'referralSource' => array(

            'label'=>'Referral',

            'show_on_view_all_screen'=>false,

        ),

        'numberGuests' => array(

            'label'=>'Guests',

            'show_on_view_all_screen'=>false,

        ),

        'fullAddress' => array(

            'label'=>'Address',

            'show_on_view_all_screen'=>false,

        ),

        'city' => array(

            'label'=>'City',

            'show_on_view_all_screen'=>false,

        ),

        'state' => array(

            'label'=>'State',

            'show_on_view_all_screen'=>false,

        ),

        'postal' => array(

            'label'=>'Postal',

            'show_on_view_all_screen'=>false,

        ),

        'gender' => array(

            'label'=>'Gender',

            'show_on_view_all_screen'=>false,

        ),

        'product' => array(

            'label'=>'Product',

            'show_on_view_all_screen'=>false,

        ),

    );

}



function get_press_form_fields() {

    return array(

        'id' => array(

            'label'=>'ID',

            'show_on_view_all_screen'=>true,

        ),

        'date' => array(

            'label'=>'Date',

            'show_on_view_all_screen'=>true,

        ),

        'firstName' => array(

            'label'=>'First Name',

            'show_on_view_all_screen'=>true,

        ),

        'lastName' => array(

            'label'=>'Last Name',

            'show_on_view_all_screen'=>true,

        ),

        'contactEmail' => array(

            'label'=>'Email',

            'show_on_view_all_screen'=>true,

        ),

        'contactPhone' => array(

            'label'=>'Phone',

            'show_on_view_all_screen'=>true,

        ),

        'companyName' => array(

            'label'=>'Company',

            'show_on_view_all_screen'=>true,

        ),

        'comments' => array(

            'label'=>'Comments',

            'show_on_view_all_screen'=>false,

        ),

    );

}



function get_contact_form_fields() {

    return array(

        'id' => array(

            'label'=>'ID',

            'show_on_view_all_screen'=>true,

        ),

        'date' => array(

            'label'=>'Date',

            'show_on_view_all_screen'=>true,

        ),

        'fullName' => array(

            'label'=>'Full Name',

            'show_on_view_all_screen'=>true,

        ),

        'InquiryType' => array(

            'label'=>'Inquiry Type',

            'show_on_view_all_screen'=>true,

        ),

        'contactEmail' => array(

            'label'=>'Email',

            'show_on_view_all_screen'=>true,

        ),

        'contactPhone' => array(

            'label'=>'Phone',

            'show_on_view_all_screen'=>true,

        ),

        'companyName' => array(

            'label'=>'Company',

            'show_on_view_all_screen'=>true,

        ),

        'comments' => array(

            'label'=>'Comments',

            'show_on_view_all_screen'=>false,

        ),

    );

}



function send_dataset_as_csv($dataset) {

    // create a temporary file 

    $temp_file = dirname(__FILE__) . "/tmp/" . md5(microtime(true) . mt_rand()) . '.temp';

    if (!touch($temp_file)) {

        exit("Couldn't create temp file. ");

    }



    // Write the data from the database to the temp file

    $file_pointer = fopen($temp_file, 'w');



    $col_names = array();

    foreach ($dataset as $row) {

        foreach ($row as $col_name => $value) {

            $col_names[] = $col_name;

        }

        break;

    }



    if (!empty($col_names)) {

        fputcsv($file_pointer, $col_names);

    }



    foreach ($dataset as $row) {

        fputcsv($file_pointer, $row);

    }

    fclose($file_pointer);



    // Send the file to the browser. See http://bg2.php.net/readfile

    header('Content-Description: File Transfer');

    header('Content-Type: text/csv');

    header('Content-Disposition: attachment; filename=form-submissions.csv');

    header('Expires: 0');

    header('Cache-Control: must-revalidate');

    header('Pragma: public');

    header('Content-Length: ' . filesize($temp_file));



    readfile($temp_file);

    // cleanup 

    unlink($temp_file);

    exit;

}



?>