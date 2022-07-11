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
use Austral\WebsiteBundle\Entity\Config as BaseConfig;

use Austral\WebsiteBundle\Entity\Interfaces\ConfigTranslateInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Austral Config Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_website_config")
 * @ORM\Entity(repositoryClass="Austral\WebsiteBundle\Repository\ConfigRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Config extends BaseConfig
{
  public function __construct()
  {
      parent::__construct();
  }

  /**
   * @return ConfigTranslateInterface
   */
  public function createNewTranslateByLanguage(): ConfigTranslateInterface
  {
    $translate = new ConfigTranslate();
    $translate->setMaster($this);
    $translate->setIsReferent(count($this->getTranslatesByLanguage()) > 0);
    $translate->setLanguage($this->getLanguageCurrent());
    $this->addTranslateByLanguage($translate);
    return $translate;
  }
}
