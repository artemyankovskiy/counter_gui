<?php

/**
 * objects actions.
 *
 * @package    gui
 * @subpackage objects
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class objectsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->objectss = Doctrine::getTable('Objects')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->objects = Doctrine::getTable('Objects')->find(array($request->getParameter('object_id')));
    $this->forward404Unless($this->objects);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ObjectsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ObjectsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($objects = Doctrine::getTable('Objects')->find(array($request->getParameter('object_id'))), sprintf('Object objects does not exist (%s).', $request->getParameter('object_id')));
    $this->form = new ObjectsForm($objects);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($objects = Doctrine::getTable('Objects')->find(array($request->getParameter('object_id'))), sprintf('Object objects does not exist (%s).', $request->getParameter('object_id')));
    $this->form = new ObjectsForm($objects);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($objects = Doctrine::getTable('Objects')->find(array($request->getParameter('object_id'))), sprintf('Object objects does not exist (%s).', $request->getParameter('object_id')));
    $objects->delete();

    $this->redirect('objects/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $objects = $form->save();

      $this->redirect('objects/edit?object_id='.$objects->getObjectId());
    }
  }
}
