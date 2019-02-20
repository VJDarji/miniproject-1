<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=11; IE=10; IE=9; IE=8; IE=7; IE=EDGE" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<link rel="stylesheet" href="dist/css/bootstrap.min.css"> 
	
	<script src="dist/js/bootstrap.min.js"></script>
</head>
<body>
<?php

class CsvReader {

    private $file; 

    public function __construct($filename) {
        $this->file = $filename;
    }

    // Returns and bi-dimensional array iterable with foreach
    public function getCsv() {

        $csv = [];

        if (($handle = fopen($this->file, "r")) !== FALSE) {
            while (($data = fgetcsv($handle)) !== FALSE) {
                $csv[] = $data;
            }
            fclose($handle);
        }
		
		$this->generateTable($csv);

        //return $csv;
    }

	//Function for formating the csv data to html table
	
	protected function generateTable($csv){
		//print count($csv);
		print '<table class="table table-striped">';
		for($i=0;$i<count($csv);$i++ ){
			
			if($i==0) {
				print '<thead class="thead-dark">';
				print '<tr>';
				for($j=0;$j<count($csv[$i]);$j++ ){
					print '<th>'.$csv[$i][$j].'</th>';
				}
				print '</tr>';
				print '</thead>';
			}
			else {
				print '<tr>';
				for($j=0;$j<count($csv[$i]);$j++ ){
					print '<td>'.$csv[$i][$j].'</td>';
				}
				print '</tr>';
			}
		}
		print '</table>';
		
	}

}


$reader = new CsvReader('project1.csv');
$reader->getCsv();
?>

</body>

</html>
