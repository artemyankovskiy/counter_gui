<?php

/**
 * network actions.
 *
 * @package    gui
 * @subpackage network
 * @author     Artem Yankovskiy <admin@neverdark.ru>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class networkActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->network_types = Doctrine::getTable('NetworkType')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->network_type = Doctrine::getTable('NetworkType')->find(array($request->getParameter('network_type_id')));
    $this->forward404Unless($this->network_type);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new NetworkTypeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new NetworkTypeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($network_type = Doctrine::getTable('NetworkType')->find(array($request->getParameter('network_type_id'))), sprintf('Object network_type does not exist (%s).', $request->getParameter('network_type_id')));
    $this->form = new NetworkTypeForm($network_type);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($network_type = Doctrine::getTable('NetworkType')->find(array($request->getParameter('network_type_id'))), sprintf('Object network_type does not exist (%s).', $request->getParameter('network_type_id')));
    $this->form = new NetworkTypeForm($network_type);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($network_type = Doctrine::getTable('NetworkType')->find(array($request->getParameter('network_type_id'))), sprintf('Object network_type does not exist (%s).', $request->getParameter('network_type_id')));
    $network_type->delete();

    $this->redirect('network/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $network_type = $form->save();

      $this->redirect('network/edit?network_type_id='.$network_type->getNetworkTypeId());
    }
  }
}
