<?php 

$categories = [
	[
		'id' =>1,
		'parent' => 0,
		'name' => 'Front-End'
	],
	[
		'id' =>2,
		'parent' => 0,
		'name' => 'Back-End'
	],
	[
		'id' =>3,
		'parent' => 2,
		'name' => 'Php'
	],
	[
		'id' =>4,
		'parent' => 1,
		'name' => 'Vue.js'
	],
	[
		'id' =>5,
		'parent' => 2,
		'name' => 'Node.js'
	],
	[
		'id' =>6,
		'parent' => 5,
		'name' => 'Express.js'
	],
	[
		'id' =>7,
		'parent' => 3,
		'name' => 'Laravel'
	]
		
];


function getCategories($arr, $par=0){
	$html = "";
	
	$html .="<ul>";
	foreach($arr as $value) : 
		if($value['parent']==$par) :
			$html .= "<li>";
			$html .= $value['name'];
			$html .= getCategories($arr,$value['id']);
			$html .= '</li>';	
		endif;
	endforeach;
	$html .= "</ul>";
	return $html;
}

echo getCategories($categories);


?>