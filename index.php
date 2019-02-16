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



