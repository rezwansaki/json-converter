<?php
// php function to convert csv to json format
function csvToJson($fname) {
    // open csv file
    if (!($fp = fopen($fname, 'r'))) {
        die("Can't open file...");
    }

    //read csv headers
    $key = fgetcsv($fp,"1024",",");

    // parse csv rows into array
    $json = array();
    while ($row = fgetcsv($fp,"1024",",")) {
        $json[] = array_combine($key, $row);
    }

    // release file handle
    fclose($fp);

    // encode array to json
    return json_encode($json);
}

print_r(csvToJson("data.csv"));

// output

// [{"Id":"1","Name":"Suki Burks","Position":"Developer","Salary":"$114500"},{"Id":"2","Name":"Fred Zupers","Position":"Technical Author","Salary":"$145000"},{"Id":"3","Name":"Gavin Cortez","Position":"Team Leader","Salary":"$235500"}]
?>