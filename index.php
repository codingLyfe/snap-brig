<?php


function brig (){
	$crimeArray = ["larsony", "embezzlement", "praising comcast", "tampering with replicators", "vehicular manslaughter"];
	$criminalArray = ["Brent", "Miguel", "Nat"];

	$crime = $crimeArray[array_rand($crimeArray, 1)];
	$criminal = $criminalArray[array_rand($criminalArray, 1)];

	$result = ($criminal . " was thrown in the brig for " . $crime);
	echo $result;

	$solitaryCell = new \stdClass();
	$solitaryCell->crime = $crime;
	$solitaryCell->criminal = $criminal;
	return ($solitaryCell);
}

$solitaryCell = brig();


var_dump($solitaryCell);