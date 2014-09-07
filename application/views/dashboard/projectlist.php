<?php
foreach ($data as $key => $value) {
	if ($value->status == 1) {
		echo '<div class="btnmarg" title="Active Project">';
	}
	else{
		echo '<div class="btnmarg" title="Inactive Project">';
	}
	echo '<div class="btn-group">';
	if ($value->status == 1) {
		echo '<button type="button" class="btn"><a href="'.base_url().'dashboard/project/view/'.$value->pro_id.'">'.$value->pro_name.'</a></button>';
	}
	else{
		echo '<button type="button" class="btn">'.$value->pro_name.'</button>';
	}
	echo '<button type="button" class="btn dropdown-toggle" data-toggle="dropdown">';
	echo '<span class="caret"></span>';
	echo '<span class="sr-only">Toggle Dropdown</span>';
	echo '</button>';
	echo '<ul class="dropdown-menu" role="menu">';
	echo '<li><a href="'.base_url().'dashboard/project/status/'.$value->pro_id.'">Status</a></li>';
	if ($value->status == 1) {
		echo '<li><a href="'.base_url().'dashboard/project/edit/'.$value->pro_id.'">Edit</a></li>';
		echo '<li><a href="'.base_url().'dashboard/project/share/'.$value->pro_id.'">Share</a></li>';
	}
	echo '<li><a href="'.base_url().'dashboard/project/delete/'.$value->pro_id.'">Delete</a></li>';
	echo '</ul>';
	echo '</div>';
	echo '</div>';
}
?>
