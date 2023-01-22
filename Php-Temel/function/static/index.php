<h1>Parametre olarak aldığı değer kadar satırı olan bir üçgen çizen bir fonksiyon.</h1>
<form action="" method="post">
	<input type="number" name="ucgen" min="1" placeholder="Üçgen değerini girin."/>
	<button type="submit" name="form">Göster</button>
</form>
<?php

if(isset($_POST['form'])){
	
$ucgenDegeri = $_POST['ucgen'];

function ucgen($baslangicDegeri){
	$sutun = 0;
	while($sutun<=$baslangicDegeri){
		
		for($i = 0;$i<=$sutun;$i++ ){
			echo "o";
			
		}
		echo "</br>";
		$sutun++;
	}	
}

echo ucgen($ucgenDegeri);

};
?>


