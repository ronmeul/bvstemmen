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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
Router::parseExtensions('json');

if (PROJECTSHORTNAME != "www") {
    $controller = "kaart"; // default naar kaart
    $action = "index";

    // selectie van homepage per project. Kan ook in database, maar dit is handiger

    if (PROJECTSHORTNAME == "souvenirs") {
        $controller = "media";
        $action = "lijst";
    }

    if (PROJECTSHORTNAME == "volhoning") {
        $controller = "bijen";
        $action = "index";
    }

    if (PROJECTSHORTNAME == "groen") {
        $controller = "over";
        $action = "index";
    }


    Router::connect('/', array('controller' => $controller, 'action' => $action)); // begin met de kaart
    // overige: meedoen, over
}

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect('/', array('controller' => 'pages', 'action' => 'index'));


/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
//	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
//	Router::connect('/*', array('controller' => 'pages', 'action' => 'display'));

Router::connect('/contact/', array('controller' => 'pages', 'action' => 'display', 'contact'));
//	Router::connect('/privacy/', array('controller' => 'pages', 'action' => 'display','privacy'));
Router::connect('/meedoen/', array('controller' => 'pages', 'action' => 'display', 'meedoen'));



/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

Router::connect('/oauth/:action/*', array('controller' => 'OAuth', 'plugin' => 'o_auth'));

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
