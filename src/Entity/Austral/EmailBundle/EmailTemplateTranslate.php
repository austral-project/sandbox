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
use Austral\EmailBundle\Entity\EmailTemplateTranslate as BaseEmailTemplateTranslate;

use Doctrine\ORM\Mapping as ORM;

/**
 * Austral EmailTemplate Translate Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_email_template_translate")
 * @ORM\Entity(repositoryClass="Austral\EmailBundle\Repository\EmailTemplateTranslateRepository")
 * @ORM\HasLifecycleCallbacks
 */
class EmailTemplateTranslate extends BaseEmailTemplateTranslate
{
  public function __construct()
  {
    parent::__construct();
  }
}
