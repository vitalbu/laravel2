<?php 
return array(
	'title'=>'Users',
	'single'=>'user',
	'model'=>'App\User',
	'columns'=>array(
		'id',
		'email'=>array(
			'title'=>'email',
		),
			'name'=>array('title'=>'login')
	),
	'filters'=>array(
		'id','name','email'
	),
	'edit_fields'=>array(
		'name'=>array('title'=>'login'),
		'email'=>array('title'=>'login')
			

	)
			
);