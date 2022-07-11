<?php
/*
 * This file is part of the App package.
 *
 * (c) Austral <support@austral.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Command;

use App\Entity\Austral\WebsiteBundle\Page;
use App\Entity\Austral\WebsiteBundle\PageTranslate;
use Austral\ContentBlockBundle\Entity\Interfaces\EditorComponentInterface;
use Austral\ContentBlockBundle\Entity\Interfaces\EditorComponentTypeInterface;
use Austral\ToolsBundle\Command\Base\Command;

use Austral\WebsiteBundle\EntityManager\PageEntityManager;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Translation\DataCollectorTranslator;

/**
 * Austral Generate Command.
 * @author Matthieu Beurel <matthieu@austral.dev>
 * @final
 */
class AustralSandboxInitialiseCommand extends Command
{

  /**
   * @var string
   */
  protected static $defaultName = 'austral:sandbox:initialise';

  /**
   * @var string
   */
  protected string $titleCommande = "Initialise sandbox Austral";

  /**
   * @var DataCollectorTranslator|null
   */
  protected $translator;

  /**
   * @var string
   */
  protected string $languageDefault;

  /**
   * @var bool
   */
  protected bool $clean;

  /**
   * {@inheritdoc}
   */
  protected function configure()
  {
    $this
      ->setDefinition([
      ])
      ->setDescription($this->titleCommande)
      ->setHelp(<<<'EOF'
The <info>%command.name%</info> command to init austral project

  <info>php %command.full_name%</info>
EOF
      )
    ;
  }

  /**
   * @param InputInterface $input
   * @param OutputInterface $output
   *
   * @throws \Exception
   */
  protected function executeCommand(InputInterface $input, OutputInterface $output)
  {
    $this->languageDefault = $this->container->getParameter("locale");
    $this->translator = $this->container->get('translator');
    $this->translator->setLocale($this->languageDefault);

    /** @var PageEntityManager $objectManager */
    $objectManager = $this->container->get('austral.entity_manager.page')->setCurrentLanguage($this->languageDefault);
    $pageExists = $objectManager->selectAll("id", "ASC", function(QueryBuilder $queryBuidler) {
      $queryBuidler->where("root.isHomepage = :isHomepage")
        ->setParameter("isHomepage", true)
        ->indexBy("root", "root.keyname");
    });

    if(count($pageExists) <= 0)
    {
      /** @var Page $page */
      $page = $objectManager->create();
      $page->setKeyname("homepage")
        ->setAustralPictoClass("austral-picto-home")
        ->setIsHomepage(true);


      /** @var PageTranslate $currentTranslate */
      $currentTranslate = $page->getTranslateCurrent();
      if($currentTranslate->getIsCreate())
      {
        $currentTranslate = $page->getTranslateCurrent();
        $currentTranslate->setName("Homepage")
          ->setStatus(Page::STATUS_PUBLISHED);

        $objectManager->update($page);
      }
    }


    $editorComponentManager = $this->container->get('austral.entity_manager.editor_component');
    $editorComponentExists = $editorComponentManager->selectAll("id", "ASC", function(QueryBuilder $queryBuidler) {
      $queryBuidler->indexBy("root", "root.keyname")
        ->select("root.keyname, root.id, root.name");
    });
    $editorComponentTypeManager = $this->container->get('austral.entity_manager.editor_component_type');

    if(count($editorComponentExists) <= 0)
    {
      /** @var EditorComponentInterface $editorComponent */
      $editorComponent = $editorComponentManager->create();
      $editorComponent->setKeyname("title")
        ->setName("Title")
        ->setCategory("default")
        ->setIsEnabled(true)
        ->setIsContainer(false)
        ->setIsGuidelineView(true);

      /** @var EditorComponentTypeInterface $editorComponentType */
      $editorComponentType = $editorComponentTypeManager->create();
      $editorComponentType->setKeyname("title")
        ->setType("title")
        ->setEntitled("Title")
        ->setCanHasLink(false)
        ->setPosition(1);

      $editorComponentType->setParameterByKey("required", true);
      $editorComponentType->setParameterByKey("tags", array("h2", "h3", "h4"));
      $editorComponentTypeManager->update($editorComponentType, false);
      $editorComponent->addEditorComponentType($editorComponentType);
      $editorComponentManager->update($editorComponent, false);


      /** @var EditorComponentInterface $editorComponent */
      $editorComponent = $editorComponentManager->create();
      $editorComponent->setKeyname("paragraph")
        ->setName("Paragraph")
        ->setCategory("default")
        ->setIsEnabled(true)
        ->setIsContainer(false)
        ->setIsGuidelineView(true);

      /** @var EditorComponentTypeInterface $editorComponentType */
      $editorComponentType = $editorComponentTypeManager->create();
      $editorComponentType->setKeyname("text")
        ->setType("textarea")
        ->setEntitled("Paragraph")
        ->setCanHasLink(false)
        ->setPosition(1)
        ->setParameterByKey("isWysiwyg", true)
        ->setParameterByKey("required", true);

      $editorComponentTypeManager->update($editorComponentType, false);
      $editorComponent->addEditorComponentType($editorComponentType);
      $editorComponentManager->update($editorComponent, false);



      /** @var EditorComponentInterface $editorComponent */
      $editorComponent = $editorComponentManager->create();
      $editorComponent->setKeyname("picture")
        ->setName("Picture")
        ->setCategory("default")
        ->setIsEnabled(true)
        ->setIsContainer(false)
        ->setIsGuidelineView(true);

      /** @var EditorComponentTypeInterface $editorComponentType */
      $editorComponentType = $editorComponentTypeManager->create();
      $editorComponentType->setKeyname("image")
        ->setType("image")
        ->setEntitled("Picture")
        ->setCanHasLink(false)
        ->setPosition(1)
        ->setParameterByKey("required", true);


      $editorComponentTypeManager->update($editorComponentType, false);
      $editorComponent->addEditorComponentType($editorComponentType);
      $editorComponentManager->update($editorComponent, false);


      $editorComponentManager->flush();
    }



  }


}