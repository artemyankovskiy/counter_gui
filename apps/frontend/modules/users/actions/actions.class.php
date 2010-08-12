<?php

/**
 * users actions.
 *
 * @package    gui
 * @subpackage users
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usersActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->users_passwds = Doctrine::getTable('UsersPasswd')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->users_passwd = Doctrine::getTable('UsersPasswd')->find(array($request->getParameter('uid')));
    $this->forward404Unless($this->users_passwd);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new UsersPasswdForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new UsersPasswdForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($users_passwd = Doctrine::getTable('UsersPasswd')->find(array($request->getParameter('uid'))), sprintf('Object users_passwd does not exist (%s).', $request->getParameter('uid')));
    $this->form = new UsersPasswdForm($users_passwd);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($users_passwd = Doctrine::getTable('UsersPasswd')->find(array($request->getParameter('uid'))), sprintf('Object users_passwd does not exist (%s).', $request->getParameter('uid')));
    $this->form = new UsersPasswdForm($users_passwd);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($users_passwd = Doctrine::getTable('UsersPasswd')->find(array($request->getParameter('uid'))), sprintf('Object users_passwd does not exist (%s).', $request->getParameter('uid')));
    $users_passwd->delete();

    $this->redirect('users/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $users_passwd = $form->save();

      $this->redirect('users/edit?uid='.$users_passwd->getUid());
    }
  }
}
