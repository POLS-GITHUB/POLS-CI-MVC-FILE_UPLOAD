<?php

$config = [

				'add_article_rules'   =>  
										[											
											[

												'name' => 'inv_no',
												'label' => 'Invoice No',
			                                    'id' => 'name',
			                                    'required' => 'required',
			                               		'class' => 'form-control',
			                                    'value'=>set_value('inv_no')
											],

											[
												'name' => 'name',
												'label' => 'Name',
			                                    'id' => 'subject',
			                                    'required' => 'required',
			                                    
			                                    'class' => 'form-control',
			                                    'value'=>set_value('name')
											],

											[

												'name' => 'address',
												'label' => 'Address',
			                                    'id' => 'address',
			                                    'required' => 'required',
			                                    
			                                    'class' => 'form-control',
			                                     'value'=>set_value('address'),
			                                ],

			                                [
			                                 	'name' => 'P_con',
			                                 	'label' => 'Contact No',
			                                    'id' => 'Contact',
			                                    'required' => 'required',                                 
			                                    'class' => 'form-control',
			                                    'value'=>set_value('P_con'),
			                                ],

			                                [
			                                 	'name' => 'amt',
			                                 	'label' => 'Amount',
			                                    'id' => 'Contact',
			                                    'required' => 'required',
			                                    
			                                    'class' => 'form-control',
			                                    'value'=>set_value('amt'),
			                                ],

			                                [
			                                 	'name' => 'deliverd',
			                                 	'label' => 'Deliverd By',
			                                    'id' => 'email',
			                                    'required' => 'required',
			                                    
			                                    'class' => 'form-control',
			                                    'value'=>set_value('deliverd'),
			                                ]
										]

];