<?php
/*
 * This file is part of the App package.
 *
 * (c) Austral <support@austral.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace App\Handler;

use Austral\WebsiteBundle\Handler\WebsiteHandler as BaseWebsiteHandler;

/**
 * Handler Website Master abstract.
 * @author Matthieu Beurel <matthieu@austral.dev>
 * @final
 */
class WebsiteHandler extends BaseWebsiteHandler
{

  protected function init()
  {
    $this->templateParameters->addParameters("user", array(
      "object"            =>  $this->getUser(),
      "isAuthenticated"   =>  $this->container->get('security.authorization_checker')->isGranted("IS_AUTHENTICATED_FULLY")
    ));

    $this->templateParameters->addParameters("data_reload_js", array(
        "all"         =>  array("body"),
        "container"   =>  array('.main-content')
      )
    );
  }

}