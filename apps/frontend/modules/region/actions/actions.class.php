<?php

/**
 * region actions.
 *
 * @package    sterh
 * @subpackage region
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class regionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->region_list = RegionPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->region = RegionPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->region);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RegionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new RegionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($region = RegionPeer::retrieveByPk($request->getParameter('id')), sprintf('Object region does not exist (%s).', $request->getParameter('id')));
    $this->form = new RegionForm($region);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($region = RegionPeer::retrieveByPk($request->getParameter('id')), sprintf('Object region does not exist (%s).', $request->getParameter('id')));
    $this->form = new RegionForm($region);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($region = RegionPeer::retrieveByPk($request->getParameter('id')), sprintf('Object region does not exist (%s).', $request->getParameter('id')));
    $region->delete();

    $this->redirect('region/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $region = $form->save();

      $this->redirect('region/edit?id='.$region->getId());
    }
  }
}
