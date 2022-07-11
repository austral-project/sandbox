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
use Austral\ContentBlockBundle\Entity\EditorComponentType as BaseEditorComponentType;

use Doctrine\ORM\Mapping as ORM;

/**
 * Austral EditorComponentType Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_content_block_editor_component_type")
 * @ORM\Entity(repositoryClass="Austral\ContentBlockBundle\Repository\EditorComponentTypeRepository")
 * @ORM\HasLifecycleCallbacks
 * @final
 */
class EditorComponentType extends BaseEditorComponentType
{
  public function __construct()
  {
    parent::__construct();
  }
}
