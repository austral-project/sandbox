<?php
/*
 * This file is part of the Austral EntitySeo Bundle package.
 *
 * (c) Austral <support@austral.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\Austral\EntitySeoBundle;
use Austral\EntitySeoBundle\Entity\Redirection as BaseRedirection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Austral Redirection Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_seo_redirection")
 * @ORM\Entity(repositoryClass="Austral\EntitySeoBundle\Repository\RedirectionRepository")
 * @ORM\HasLifecycleCallbacks
 * @final
 */
class Redirection extends BaseRedirection
{
  public function __construct()
  {
    parent::__construct();
  }
}
