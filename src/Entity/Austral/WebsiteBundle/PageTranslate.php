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
use Austral\WebsiteBundle\Entity\PageTranslate as BasePageTranslate;

use Doctrine\ORM\Mapping as ORM;

/**
 * Austral Page Translate Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_website_page_translate")
 * @ORM\Entity(repositoryClass="Austral\WebsiteBundle\Repository\PageTranslateRepository")
 * @ORM\HasLifecycleCallbacks
 */
class PageTranslate extends BasePageTranslate
{
  public function __construct()
  {
    parent::__construct();
  }
}
