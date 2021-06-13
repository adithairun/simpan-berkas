<?php

Class Tabel Extends Database {
	
	public function ambilData($tabel,$nis,$tgl){
		$sql=$this->mysqli->query("SELECT * FROM $tabel WHERE no_induk='$nis' AND tglLahir='$tgl'");
		$dataLulusan=$sql->fetch_object();	
		if(isset($dataLulusan)){
			return $dataLulusan;
		}
			
		$this->close();
	}
	
	
}
?>
