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
use Austral\ContentBlockBundle\Entity\Component as BaseComponent;

use Doctrine\ORM\Mapping as ORM;

/**
 * Austral Component Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_content_block_component")
 * @ORM\Entity(repositoryClass="Austral\ContentBlockBundle\Repository\ComponentRepository")
 * @ORM\HasLifecycleCallbacks
 * @final
 */
class Component extends BaseComponent
{
  public function __construct()
  {
    parent::__construct();
  }
}
