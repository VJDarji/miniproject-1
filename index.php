<?php
// Open the file for reading
if (($h = fopen("project1.csv", "r")) !== FALSE) {
    // Convert each line into the local $data variable
    while (($data = fgetcsv($h, 800, ",")) !== FALSE) {
        // Read the data from a single line
    }

    // Close the file
    fclose($h);

    $filename = 'project1.csv';

// The nested array to hold all the arrays
    $the_big_array = [];

    // Open the file for reading
    if (($h = fopen("{$filename}", "r")) !== FALSE) {
        // Each line in the file is converted into an individual array that we call $data
        // The items of the array are comma separated
        while (($data = fgetcsv($h, 1000, ",")) !== FALSE) {
            // Each individual array is being pushed into the nested array
            $the_big_array[] = $data;
        }

        // Close the file
        fclose($h);
    }


