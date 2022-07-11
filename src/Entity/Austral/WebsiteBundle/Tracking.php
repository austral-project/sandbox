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
use Austral\WebsiteBundle\Entity\Tracking as BaseTracking;

use Austral\WebsiteBundle\Entity\Interfaces\TrackingTranslateInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Austral Tracking Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_website_tracking")
 * @ORM\Entity(repositoryClass="Austral\WebsiteBundle\Repository\TrackingRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Tracking extends BaseTracking
{
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * @return TrackingTranslateInterface
   */
  public function createNewTranslateByLanguage(): TrackingTranslateInterface
  {
    $translate = new TrackingTranslate();
    $translate->setMaster($this);
    $translate->setIsActive(false);
    $translate->setIsReferent(count($this->getTranslatesByLanguage()) > 0);
    $translate->setLanguage($this->getLanguageCurrent());
    $this->addTranslateByLanguage($translate);
    return $translate;
  }

}
