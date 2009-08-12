<?php

/**
 * citizenship actions.
 *
 * @package    sterh
 * @subpackage citizenship
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class citizenshipActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->citizenship_list = CitizenshipPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->citizenship = CitizenshipPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->citizenship);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CitizenshipForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new CitizenshipForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($citizenship = CitizenshipPeer::retrieveByPk($request->getParameter('id')), sprintf('Object citizenship does not exist (%s).', $request->getParameter('id')));
    $this->form = new CitizenshipForm($citizenship);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($citizenship = CitizenshipPeer::retrieveByPk($request->getParameter('id')), sprintf('Object citizenship does not exist (%s).', $request->getParameter('id')));
    $this->form = new CitizenshipForm($citizenship);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($citizenship = CitizenshipPeer::retrieveByPk($request->getParameter('id')), sprintf('Object citizenship does not exist (%s).', $request->getParameter('id')));
    $citizenship->delete();

    $this->redirect('citizenship/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $citizenship = $form->save();

      $this->redirect('citizenship/edit?id='.$citizenship->getId());
    }
  }
}
