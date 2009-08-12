<?php

/**
 * job_type actions.
 *
 * @package    sterh
 * @subpackage job_type
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class job_typeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->job_type_list = JobTypePeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->job_type = JobTypePeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->job_type);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JobTypeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new JobTypeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($job_type = JobTypePeer::retrieveByPk($request->getParameter('id')), sprintf('Object job_type does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobTypeForm($job_type);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($job_type = JobTypePeer::retrieveByPk($request->getParameter('id')), sprintf('Object job_type does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobTypeForm($job_type);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($job_type = JobTypePeer::retrieveByPk($request->getParameter('id')), sprintf('Object job_type does not exist (%s).', $request->getParameter('id')));
    $job_type->delete();

    $this->redirect('job_type/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $job_type = $form->save();

      $this->redirect('job_type/edit?id='.$job_type->getId());
    }
  }
}
