<?php 

return array(
		'controllers' => array(
				'invokables' => array(
						'Usuario\Controller\Index' => 'Usuario\Controller\IndexController'
				),
		),

		'router' => array(
			'routes' => array(
				'usuario' => array(
					'type'    => 'segment',
					'options' => array(
						'route'    => '/usuario[/:action][/:id]',
						'constraints' => array(
								'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
								'id'     => '[0-9]+',
						),
						'defaults' => array(
								'controller' => 'Usuario\Controller\Index',
								'action'     => 'index',
						),
					),
				),
			),
		),
		
		//cargamos el view manager
		'view_manager' => array(
				'display_not_found_reason' => true,
				'display_exceptions'       => true,
				'doctype'                  => 'HTML5',
				'not_found_template'       => 'error/404',
				'exception_template'       => 'error/index',
				'template_map' => array(
						'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
						'usuario/index/index' 	  => __DIR__ . '/../view/usuario/index/index.phtml',
						'error/404'               => __DIR__ . '/../view/error/404.phtml',
						'error/index'             => __DIR__ . '/../view/error/index.phtml',
				),
				/*
				'template_path_stack' => array(
						__DIR__ . '/../view',
				), */
				'template_path_stack' => array(
						__DIR__ . '/../view',
				),
		),
);
		