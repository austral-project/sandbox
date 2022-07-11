<?php
/*
 * This file is autogenerate and part of the Austral Email Bundle package.
 *
 * (c) Austral <support@austral.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\Austral\EmailBundle;
use Austral\EmailBundle\Entity\EmailTemplate as BaseEmailTemplate;

use Austral\EmailBundle\Entity\Interfaces\EmailTemplateTranslateInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Austral EmailTemplate Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_email_template")
 * @ORM\Entity(repositoryClass="Austral\EmailBundle\Repository\EmailTemplateRepository")
 * @ORM\HasLifecycleCallbacks
 */
class EmailTemplate extends BaseEmailTemplate
{
  public function __construct()
  {
      parent::__construct();
  }

  /**
   * @return EmailTemplateTranslateInterface
   */
  public function createNewTranslateByLanguage(): EmailTemplateTranslateInterface
  {
    $translate = new EmailTemplateTranslate();
    $translate->setMaster($this);
    $translate->setIsReferent(count($this->getTranslatesByLanguage()) > 0);
    $translate->setLanguage($this->getLanguageCurrent());
    $this->addTranslateByLanguage($translate);
    return $translate;
  }
}
