<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('objects/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?object_id='.$form->getObject()->getObjectId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('objects/index') ?>">Список</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Удалить', 'objects/delete?object_id='.$form->getObject()->getObjectId(), array('method' => 'delete', 'confirm' => 'Вы уверены?')) ?>
          <?php endif; ?>
          <input type="submit" value="Сохранить" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
