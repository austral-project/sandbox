<?php
/*
 * This file is autogenerate and part of the Austral Website Bundle package.
 *
 * (c) Austral <support@austral.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\Austral\WebsiteBundle;
use Austral\WebsiteBundle\Entity\ConfigTranslate as BaseConfigTranslate;

use Doctrine\ORM\Mapping as ORM;

/**
 * Austral Config Translate Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_website_config_translate")
 * @ORM\Entity(repositoryClass="Austral\WebsiteBundle\Repository\ConfigTranslateRepository")
 * @ORM\HasLifecycleCallbacks
 */
class ConfigTranslate extends BaseConfigTranslate
{
  public function __construct()
  {
    parent::__construct();
  }
}
