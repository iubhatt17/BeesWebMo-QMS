<?php

class Department{
	function __construct()
	{

	}

	public function deptdata($id)
	{
		global $wpdb;
		return $wpdb->get_row($wpdb->prepare("SELECT * FROM `department` WHERE id=%d",$id));
	}

	public function all_deptdata()
	{
		global $wpdb;
		return $wpdb->get_results("SELECT * FROM `department`");
	}
	
	public function increment_token($id)
	{
		global $wpdb;
		$wpdb->query($wpdb->prepare("UPDATE `department` SET `next_entry`=`next_entry`+1 WHERE id=%d",$id));
	}

	public function update_deptdata($id, $department_name, $department_latter)
	{
		global $wpdb;
		$wpdb->query($wpdb->prepare("UPDATE `department` SET `department_name`='%s', `department_label`='%s'  WHERE id=%d", $department_name, $department_latter, $id));
	}

	public function delete_deptdata($id){
		global $wpdb;
		$wpdb->query($wpdb->prepare("DELETE FROM `department` WHERE id=%d",$id));

	}

	public function add_deptdata($department_name, $department_latter)
	{
		global $wpdb;
		$wpdb->query($wpdb->prepare("INSERT INTO `department` (`department_name`, `department_label`) VALUES ('%s','%s')",$department_name, $department_latter));
	}
}
?>