<?php
Class Sorter {

	public function getArraySort(){
		// open file
		$handle = fopen('unsorted-names-list.txt', 'r') or die('error occured');
		// set array variables
		$surnames = $rows = [];
		// check every row
		while (false != ( $row = fgetcsv($handle, 0, ';') )) {
			// extract surname
			preg_match('~([^\s]+)(?:,.*)?$~', $row[0], $m);
			// set values
			$surnames[] = $m[1];
			$rows[] = $row;
		}
		// close file
		fclose($handle);
		// sort by surnames
		array_multisort($surnames, $rows);
		// extract values
		return implode("\n", array_column($rows, 0));
	}

	public function viewContent($data){
		// print data
		echo '<pre>';print_r($data);echo '</pre>';
	}

	public function putContent($data){
		// put content
		file_put_contents("sorted-names-list.txt", $data);
	}

	public function nameSorter(){
		// run function
		$data = $this->getArraySort();
		$this->viewContent($data);
		$this->putContent($data);
	}
}

$sorter = new Sorter();
$sorter->nameSorter();

// command line
//php -r name-sorter.php
?>