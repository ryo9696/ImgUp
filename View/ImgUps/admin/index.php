<?php
echo $this->BCForm->create('ImgUp', ['type' => 'file', 'action' => 'admin_add']);
?>

<section class="bca-section">
    <table id="FormTable" class="form-table bca-form-table">
        <tr>
            <th class="col-head bca-form-table__label">
				<?php echo $this->BcForm->label('', __d('baser', '画像')) ?>
				<span class="bca-label" data-bca-label-type="required">必須</span>
			</th>
            <td class="col-input bca-form-table__input">
                <?php echo $this->BcForm->input('ImgUp', [
                    'type' => 'file',
                    // 'size' => 80,
                    // 'maxlength' => 100,
                    'autofocus' => true,
                    'data-input-text-size' => 'full-counter',
                    // 'counter' => true
                ]) ?>
				<?php echo $this->BcForm->error('ImgUp') ?>
            </td>
        </tr>
    </table>
</section>
<section class="bca-actions">
    <div class="bca-actions__main">
        <?php echo $this->BcForm->button(
            __d('baser', '登録'),
            [
                'type' => 'submit',
                'id' => 'BtnSave',
                'div' => false,
                'class' => 'button bca-btn bca-actions__item',
                'data-bca-btn-type' => 'save',
                'data-bca-btn-size' => 'lg',
                'data-bca-btn-width' => 'lg',
            ]
        ) ?>
    </div>
</section>
<?php $this->BcForm->end() ?>