<?php

/**
 * worker actions.
 *
 * @package    sterh
 * @subpackage worker
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class workerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->worker_list = WorkerPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->worker = WorkerPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->worker);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new WorkerForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new WorkerForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('show');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($worker = WorkerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object worker does not exist (%s).', $request->getParameter('id')));
    $this->form = new WorkerForm($worker);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($worker = WorkerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object worker does not exist (%s).', $request->getParameter('id')));
    $this->form = new WorkerForm($worker);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($worker = WorkerPeer::retrieveByPk($request->getParameter('id')), sprintf('Object worker does not exist (%s).', $request->getParameter('id')));
    $worker->delete();

    $this->redirect('worker/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $worker = $form->save();

      $this->redirect('worker/edit?id='.$worker->getId());
    }
  }
}
