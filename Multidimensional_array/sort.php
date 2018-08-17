<?php
	$courses = array(
		array("name" => "JAVA", "price" => "N150,000"),
		array("name" => "PYTHON", "price" => "N120,000"),
		array("name" => "C++", "price" => "N120,000"),
		array("name" => "C#", "price" => "N130,000"),
		array("name" => "PHP", "price" => "N140,000"),
		array("name" => "JAVA SCRIPT", "price" => "N110,000")
	);
	
	if(ISSET($_POST['toggle'])){
		$sortKey = array(); 
		$sort = $_POST['sort'];
		foreach($courses as $course){ 
			foreach($course as $key=>$value){ 
				if(!isset($sortKey[$key])){ 
					$sortKey[$key] = array(); 
				} 
				$sortKey[$key][] = $value; 
			} 
		} 
		
		$sortby = "price";  
		
		if($sort == "SORT_ASC"){
			array_multisort($sortKey[$sortby],SORT_ASC,$courses); 
		}else if($sort == "SORT_DESC"){
			array_multisort($sortKey[$sortby],SORT_DESC,$courses); 
		}
		
		foreach($courses as $key => $values){
?>
			<tr>
				<td><?php echo $values['name']?></td>
				<td><?php echo $values['price']?></td>
			</tr>
<?php	
		}
	}else{
		foreach($courses as $key => $values){
	
?>
			<tr>
				<td><?php echo $values['name']?></td>
				<td><?php echo $values['price']?></td>
			</tr>
<?php
		}
	}
?>	
	



