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
use Austral\ContentBlockBundle\Entity\EditorComponent as BaseEditorComponent;

use Doctrine\ORM\Mapping as ORM;

/**
 * Austral EditorComponent Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_content_block_editor_component")
 * @ORM\Entity(repositoryClass="Austral\ContentBlockBundle\Repository\EditorComponentRepository")
 * @ORM\HasLifecycleCallbacks
 * @final
 */
class EditorComponent extends BaseEditorComponent
{
  public function __construct()
  {
    parent::__construct();
  }
}
