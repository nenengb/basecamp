<?php
foreach ($data2 as $key => $value) {
	if ($value->status == 1) {
		echo '<div class="btnmarg" title="Active Project">';
	}
	else{
		echo '<div class="btnmarg" title="Inactive Project">';
	}
	echo '<div class="btn-group">';
	if ($value->status == 1) {
		echo '<button type="button" class="btn"><a href="'.base_url().'project/view/'.$value->pro_id.'">'.$value->pro_name.'</a></button>';
	}
	else{
		echo '<button type="button" class="btn">'.$value->pro_name.'</button>';
	}
	echo '</div>';
	echo '</div>';
}
?>
