<?php

/**
 * groups actions.
 *
 * @package    gui
 * @subpackage groups
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class groupsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->users_groups = Doctrine::getTable('UsersGroup')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->users_group = Doctrine::getTable('UsersGroup')->find(array($request->getParameter('gid')));
    $this->forward404Unless($this->users_group);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UsersGroupForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UsersGroupForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($users_group = Doctrine::getTable('UsersGroup')->find(array($request->getParameter('gid'))), sprintf('Object users_group does not exist (%s).', $request->getParameter('gid')));
    $this->form = new UsersGroupForm($users_group);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($users_group = Doctrine::getTable('UsersGroup')->find(array($request->getParameter('gid'))), sprintf('Object users_group does not exist (%s).', $request->getParameter('gid')));
    $this->form = new UsersGroupForm($users_group);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($users_group = Doctrine::getTable('UsersGroup')->find(array($request->getParameter('gid'))), sprintf('Object users_group does not exist (%s).', $request->getParameter('gid')));
    $users_group->delete();

    $this->redirect('groups/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $users_group = $form->save();

      $this->redirect('groups/edit?gid='.$users_group->getGid());
    }
  }
}
