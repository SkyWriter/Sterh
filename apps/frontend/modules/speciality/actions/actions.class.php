<?php

/**
 * speciality actions.
 *
 * @package    sterh
 * @subpackage speciality
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class specialityActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->speciality_list = SpecialityPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->speciality = SpecialityPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->speciality);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SpecialityForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new SpecialityForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($speciality = SpecialityPeer::retrieveByPk($request->getParameter('id')), sprintf('Object speciality does not exist (%s).', $request->getParameter('id')));
    $this->form = new SpecialityForm($speciality);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($speciality = SpecialityPeer::retrieveByPk($request->getParameter('id')), sprintf('Object speciality does not exist (%s).', $request->getParameter('id')));
    $this->form = new SpecialityForm($speciality);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($speciality = SpecialityPeer::retrieveByPk($request->getParameter('id')), sprintf('Object speciality does not exist (%s).', $request->getParameter('id')));
    $speciality->delete();

    $this->redirect('speciality/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $speciality = $form->save();

      $this->redirect('speciality/edit?id='.$speciality->getId());
    }
  }
}
