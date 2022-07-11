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
use Austral\EmailBundle\Entity\EmailHistory as BaseEmailHistory;

use Austral\EmailBundle\Entity\Interfaces\EmailTranslateInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Austral History Entity.
 *
 * @author Matthieu Beurel <matthieu@austral.dev>
 *
 * @ORM\Table(name="austral_email_history")
 * @ORM\Entity(repositoryClass="Austral\EmailBundle\Repository\EmailHistoryRepository")
 * @ORM\HasLifecycleCallbacks
 */
class EmailHistory extends BaseEmailHistory
{
  public function __construct()
  {
      parent::__construct();
  }
}
