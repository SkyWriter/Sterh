<?php

/**
 * employer actions.
 *
 * @package    sterh
 * @subpackage employer
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class employerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->employer_list = EmployerPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->employer = EmployerPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->employer);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EmployerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new EmployerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($employer = EmployerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object employer does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmployerForm($employer);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($employer = EmployerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object employer does not exist (%s).', $request->getParameter('id')));
    $this->form = new EmployerForm($employer);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($employer = EmployerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object employer does not exist (%s).', $request->getParameter('id')));
    $employer->delete();

    $this->redirect('employer/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $employer = $form->save();

      $this->redirect('employer/edit?id='.$employer->getId());
    }
  }
}
