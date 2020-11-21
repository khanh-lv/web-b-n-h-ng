<?php
	const host='localhost';
	const username='root';
	const pass='';
	const database='project';
	function countdata($sql){
		$connect=new mysqli(host,username,pass,database);
		$result= mysqli_query($connect,$sql);
		if(!empty($result)){
			$count=mysqli_num_rows($result);
			return $count;
		}else return 0;
		mysqli_close($connect);

	}
	function execute($sql){
		$connect=new mysqli(host,username,pass,database);
		mysqli_query($connect,$sql);
		mysqli_close($connect);
	}
	function resultdata($sql){
		$connect=new mysqli(host,username,pass,database);
		$result= mysqli_query($connect,$sql);
		$data=[];
		if(!empty($result)){
			while($row=mysqli_fetch_array($result,1)){
				$data[]=$row;
			}
		}
		mysqli_close($connect);
		return $data;
	}