<?php

	namespace Real\Routing;

	class RouteCollection
	{
		private $routes;

		public function __construct($autoload = false, $routes = null)
		{
			if ($autoload === true) {
				$this->loadRoutes(include_once(BASEPATH . 'Application/Config/Routes.php'));
			} else if ($routes !== null) {
				$this->loadRoutes($routes);
			}
		}

		public function loadRoutes($routes)
		{
			foreach ($routes as $path => $info) {
				$this->routes[$path] = new Route(
					$path, $info['controller'], $info['action'], $info['params']
				);
			}
		}
	}