<?php

/**
 * counterType actions.
 *
 * @package    gui
 * @subpackage counterType
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class counterTypeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->counter_types = Doctrine::getTable('CounterType')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->counter_type = Doctrine::getTable('CounterType')->find(array($request->getParameter('counter_type_id')));
    $this->forward404Unless($this->counter_type);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CounterTypeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CounterTypeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($counter_type = Doctrine::getTable('CounterType')->find(array($request->getParameter('counter_type_id'))), sprintf('Object counter_type does not exist (%s).', $request->getParameter('counter_type_id')));
    $this->form = new CounterTypeForm($counter_type);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($counter_type = Doctrine::getTable('CounterType')->find(array($request->getParameter('counter_type_id'))), sprintf('Object counter_type does not exist (%s).', $request->getParameter('counter_type_id')));
    $this->form = new CounterTypeForm($counter_type);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($counter_type = Doctrine::getTable('CounterType')->find(array($request->getParameter('counter_type_id'))), sprintf('Object counter_type does not exist (%s).', $request->getParameter('counter_type_id')));
    $counter_type->delete();

    $this->redirect('counterType/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $counter_type = $form->save();

      $this->redirect('counterType/edit?counter_type_id='.$counter_type->getCounterTypeId());
    }
  }
}
