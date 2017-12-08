<?php

namespace Controller;

class Build {
	function clientMap(\Base $f3, $params) {
		$clientCfg = 'clients/'.$f3->get('PARAMS.client').'/client.cfg';
		$clientPoint = 'clients/'.$f3->get('PARAMS.client').'/point.zip';
		$clientLine = 'clients/'.$f3->get('PARAMS.client').'/line.zip';
		$clientPolygon = 'clients/'.$f3->get('PARAMS.client').'/polygon.zip';


		if (is_dir('clients/'.$f3->get('PARAMS.client'))){
			
			if (file_exists($clientCfg)){
				$f3->config($clientCfg);
			} else {
				$f3->error('error: no config file found');
			}
			if (file_exists($clientPoint))
				$f3->set('point_exists',true);
			if (file_exists($clientLine))
				$f3->set('line_exists',true);
			if (file_exists($clientPolygon))
				$f3->set('polygon_exists',true);
							
			
			echo \Template::instance()->render('app/view/map.html');
		} else {
			$f3->error(404);
		}
		
	}
}