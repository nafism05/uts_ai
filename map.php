<?php
	$peta1=array(
			'SEMARANG' => array('DEMAK','AMBARAWA','KENDAL'), 
			'DEMAK' => array('SEMARANG','KUDUS','JEPARA'),
			'KUDUS' => array('DEMAK','JEPARA','PATI','PURWODADI'),
			'JEPARA' => array('DEMAK','KUDUS','PATI'),
			'PATI' => array('JEPARA','KUDUS','REMBANG'),
			'REMBANG' => array('PATI','BLORA'),
			'PURWODADI' => array('KUDUS','BLORA','SRAGEN'),
			'BLORA' => array('REMBANG','PURWODADI','SRAGEN'),
			'SRAGEN' => array('PURWODADI','SURAKARTA','BLORA'),
			'SURAKARTA' => array('SRAGEN','BOYOLALI','KLATEN'),
			'BOYOLALI' => array('SURAKARTA','SALATIGA'),
			'SALATIGA' => array('BOYOLALI','MAGELANG','AMBARAWA'),
			'AMBARAWA' => array('SEMARANG','SALATIGA','WONOSOBO'),
			'WONOSOBO' => array('AMBARAWA','MAGELANG','PURWOKERTO'),
			'MAGELANG' => array('WONOSOBO','SALATIGA','KLATEN'),
			'KLATEN' => array('MAGELANG','YOGYAKARTA'),
			'YOGYAKARTA' => array('KLATEN','KEBUMEN'),
			'KEBUMEN' => array('YOGYAKARTA','PURWOKERTO'),
			'PURWOKERTO' => array('KEBUMEN','WONOSOBO','TEGAL'),
			'KENDAL' => array('SEMARANG','PEKALONGAN'),
			'PEKALONGAN' => array('KENDAL','PEMALANG'),
			'PEMALANG' => array('PEKALONGAN','TEGAL'),
			'TEGAL' => array('PEMALANG','PURWOKERTO'),
			'BREBES' => array('TEGAL'),

		);
?>