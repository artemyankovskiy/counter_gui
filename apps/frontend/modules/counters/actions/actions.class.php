<?php

/**
 * counters actions.
 *
 * @package    gui
 * @subpackage counters
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class countersActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->counterss = Doctrine::getTable('Counters')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->counters = Doctrine::getTable('Counters')->find(array($request->getParameter('counter_id')));
    $this->forward404Unless($this->counters);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CountersForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CountersForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($counters = Doctrine::getTable('Counters')->find(array($request->getParameter('counter_id'))), sprintf('Object counters does not exist (%s).', $request->getParameter('counter_id')));
    $this->form = new CountersForm($counters);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($counters = Doctrine::getTable('Counters')->find(array($request->getParameter('counter_id'))), sprintf('Object counters does not exist (%s).', $request->getParameter('counter_id')));
    $this->form = new CountersForm($counters);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($counters = Doctrine::getTable('Counters')->find(array($request->getParameter('counter_id'))), sprintf('Object counters does not exist (%s).', $request->getParameter('counter_id')));
    $counters->delete();

    $this->redirect('counters/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $counters = $form->save();

      $this->redirect('counters/edit?counter_id='.$counters->getCounterId());
    }
  }
}
