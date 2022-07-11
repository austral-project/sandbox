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
use Austral\WebsiteBundle\Entity\Page as BasePage;

use Austral\WebsiteBundle\Entity\Interfaces\PageTranslateInterface;
use Doctrine\ORM\Mapping as ORM;
use Exception;

/**
 * Austral Page Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_website_page")
 * @ORM\Entity(repositoryClass="Austral\WebsiteBundle\Repository\PageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Page extends BasePage
{
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * @return PageTranslateInterface
   * @throws Exception
   */
  public function createNewTranslateByLanguage(): PageTranslateInterface
  {
    $translate = new PageTranslate();
    $translate->setMaster($this);
    $translate->setInSitemap(true);
    $translate->setIsIndex(true);
    $translate->setIsFollow(true);
    $translate->setStatus("unpublished");
    $translate->setIsReferent(count($this->getTranslatesByLanguage()) > 0);
    $translate->setLanguage($this->getLanguageCurrent());
    $this->addTranslateByLanguage($translate);
    return $translate;
  }
}
