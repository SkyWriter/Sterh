<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('employer/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('employer/index') ?>">Отменить</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Удалить', 'employer/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Вы уверены?')) ?>
          <?php endif; ?>
          <input type="submit" value="Сохранить" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form; ?>
    </tbody>
  </table>
</form>
