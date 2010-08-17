<?php

/**
 * usersPermissions actions.
 *
 * @package    gui
 * @subpackage usersPermissions
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usersPermissionsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->users_permissionss = Doctrine::getTable('UsersPermissions')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->users_permissions = Doctrine::getTable('UsersPermissions')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->users_permissions);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UsersPermissionsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UsersPermissionsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($users_permissions = Doctrine::getTable('UsersPermissions')->find(array($request->getParameter('id'))), sprintf('Object users_permissions does not exist (%s).', $request->getParameter('id')));
    $this->form = new UsersPermissionsForm($users_permissions);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($users_permissions = Doctrine::getTable('UsersPermissions')->find(array($request->getParameter('id'))), sprintf('Object users_permissions does not exist (%s).', $request->getParameter('id')));
    $this->form = new UsersPermissionsForm($users_permissions);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($users_permissions = Doctrine::getTable('UsersPermissions')->find(array($request->getParameter('id'))), sprintf('Object users_permissions does not exist (%s).', $request->getParameter('id')));
    $users_permissions->delete();

    $this->redirect('usersPermissions/index');
  }
  
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $users_permissions = $form->save();

      $this->redirect('usersPermissions/edit?id='.$users_permissions->getId());
    }
  }
}
