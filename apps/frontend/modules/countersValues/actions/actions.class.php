<?php

/**
 * countersValues actions.
 *
 * @package    gui
 * @subpackage countersValues
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class countersValuesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->counters_valuess = Doctrine::getTable('CountersValues')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->counters_values = Doctrine::getTable('CountersValues')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->counters_values);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CountersValuesForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CountersValuesForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($counters_values = Doctrine::getTable('CountersValues')->find(array($request->getParameter('id'))), sprintf('Object counters_values does not exist (%s).', $request->getParameter('id')));
    $this->form = new CountersValuesForm($counters_values);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($counters_values = Doctrine::getTable('CountersValues')->find(array($request->getParameter('id'))), sprintf('Object counters_values does not exist (%s).', $request->getParameter('id')));
    $this->form = new CountersValuesForm($counters_values);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($counters_values = Doctrine::getTable('CountersValues')->find(array($request->getParameter('id'))), sprintf('Object counters_values does not exist (%s).', $request->getParameter('id')));
    $counters_values->delete();

    $this->redirect('countersValues/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $counters_values = $form->save();

      $this->redirect('countersValues/edit?id='.$counters_values->getId());
    }
  }
}
