<?php
/*
 * This file is part of the Austral ContentBlock Bundle package.
 *
 * (c) Austral <support@austral.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\Austral\ContentBlockBundle;
use Austral\ContentBlockBundle\Entity\Interfaces\LibraryTranslateInterface;
use Austral\ContentBlockBundle\Entity\Library as BaseLibrary;

use Doctrine\ORM\Mapping as ORM;

/**
 * Austral Library Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_content_block_library")
 * @ORM\Entity(repositoryClass="Austral\ContentBlockBundle\Repository\LibraryRepository")
 * @ORM\HasLifecycleCallbacks
 * @final
 */
class Library extends BaseLibrary
{
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * @return LibraryTranslateInterface
   */
  public function createNewTranslateByLanguage(): LibraryTranslateInterface
  {
    $translate = new LibraryTranslate();
    $translate->setMaster($this);
    $translate->setIsReferent(count($this->getTranslatesByLanguage()) > 0);
    $translate->setLanguage($this->getLanguageCurrent());
    $this->addTranslateByLanguage($translate);
    return $translate;
  }

}
