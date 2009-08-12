<?php

/**
 * branch actions.
 *
 * @package    sterh
 * @subpackage branch
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class branchActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->branch_list = BranchPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->branch = BranchPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->branch);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BranchForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new BranchForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($branch = BranchPeer::retrieveByPk($request->getParameter('id')), sprintf('Object branch does not exist (%s).', $request->getParameter('id')));
    $this->form = new BranchForm($branch);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($branch = BranchPeer::retrieveByPk($request->getParameter('id')), sprintf('Object branch does not exist (%s).', $request->getParameter('id')));
    $this->form = new BranchForm($branch);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($branch = BranchPeer::retrieveByPk($request->getParameter('id')), sprintf('Object branch does not exist (%s).', $request->getParameter('id')));
    $branch->delete();

    $this->redirect('branch/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $branch = $form->save();

      $this->redirect('branch/edit?id='.$branch->getId());
    }
  }
}
