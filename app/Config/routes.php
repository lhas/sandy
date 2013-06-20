<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/series-de-aerobica', array('controller' => 'aerobics', 'action' => 'index'));
	Router::connect('/series-de-aerobica/adicionar', array('controller' => 'aerobics', 'action' => 'add'));
	Router::connect('/series-de-aerobica/editar/*', array('controller' => 'aerobics', 'action' => 'edit'));
	Router::connect('/series-de-aerobica/ver/*', array('controller' => 'aerobics', 'action' => 'view'));
	Router::connect('/area-restrita', array('controller' => 'users', 'action' => 'dashboard'));
	Router::connect('/usuarios', array('controller' => 'users', 'action' => 'index'));
	Router::connect('/usuarios/adicionar', array('controller' => 'users', 'action' => 'add'));
	Router::connect('/usuarios/editar/*', array('controller' => 'users', 'action' => 'edit'));
	Router::connect('/usuarios/ver/*', array('controller' => 'users', 'action' => 'view'));
	Router::connect('/series-de-musculacao', array('controller' => 'musculations', 'action' => 'index'));
	Router::connect('/series-de-musculacao/adicionar', array('controller' => 'musculations', 'action' => 'add'));
	Router::connect('/series-de-musculacao/editar/*', array('controller' => 'musculations', 'action' => 'edit'));
	Router::connect('/series-de-musculacao/ver/*', array('controller' => 'musculations', 'action' => 'view'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
