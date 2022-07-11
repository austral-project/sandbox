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
use Austral\ContentBlockBundle\Entity\ComponentValues as BaseComponentValues;

use Doctrine\ORM\Mapping as ORM;

/**
 * Austral ComponentValues Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_content_block_component_values")
 * @ORM\Entity(repositoryClass="Austral\ContentBlockBundle\Repository\ComponentValuesRepository")
 * @ORM\HasLifecycleCallbacks
 * @final
 */
class ComponentValues extends BaseComponentValues
{
  public function __construct()
  {
    parent::__construct();
  }
}
