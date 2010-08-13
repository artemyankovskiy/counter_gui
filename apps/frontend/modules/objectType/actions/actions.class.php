<?php

/**
 * objectType actions.
 *
 * @package    gui
 * @subpackage objectType
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class objectTypeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->object_types = Doctrine::getTable('ObjectType')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->object_type = Doctrine::getTable('ObjectType')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->object_type);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ObjectTypeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ObjectTypeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($object_type = Doctrine::getTable('ObjectType')->find(array($request->getParameter('id'))), sprintf('Object object_type does not exist (%s).', $request->getParameter('id')));
    $this->form = new ObjectTypeForm($object_type);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($object_type = Doctrine::getTable('ObjectType')->find(array($request->getParameter('id'))), sprintf('Object object_type does not exist (%s).', $request->getParameter('id')));
    $this->form = new ObjectTypeForm($object_type);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($object_type = Doctrine::getTable('ObjectType')->find(array($request->getParameter('id'))), sprintf('Object object_type does not exist (%s).', $request->getParameter('id')));
    $object_type->delete();

    $this->redirect('objectType/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $object_type = $form->save();

      $this->redirect('objectType/edit?id='.$object_type->getId());
    }
  }
}
