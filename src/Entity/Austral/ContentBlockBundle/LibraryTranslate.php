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
use Austral\ContentBlockBundle\Entity\LibraryTranslate as BaseLibraryTranslate;

use Doctrine\ORM\Mapping as ORM;

/**
 * Austral LibraryTranslate Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_content_block_library_translate")
 * @ORM\Entity(repositoryClass="Austral\ContentBlockBundle\Repository\LibraryTranslateRepository")
 * @ORM\HasLifecycleCallbacks
 * @final
 */
class LibraryTranslate extends BaseLibraryTranslate
{
  public function __construct()
  {
    parent::__construct();
  }
}
