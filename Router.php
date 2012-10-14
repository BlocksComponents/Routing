<?php

	namespace Real\Routing;

	class Router
	{
		private $routeCollection;

		public function __construct($routeCollection = null)
		{
			if ($routeCollection !== null) {
				$this->routeCollection = $routeCollection;
			}
		}

		public function setRouteCollection($routeCollection)
		{
			$this->routeCollection = $routeCollection;
		}
	}