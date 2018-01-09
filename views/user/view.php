<?php
namespace developeruz\db_rbac\views\user;

use Yii;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

$this->title = Yii::t('db_rbac', 'Управление ролями пользователя');
$this->params['breadcrumbs'][] = ['label' => 'Управление пользователями', 'url' => ['/user']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h3><?=Yii::t('db_rbac', 'Управление ролями пользователя');?> <?= $user->getUserName(); ?></h3>
<?php $form = ActiveForm::begin(['action' => ["update", 'id' => $user->getId()]]); ?>

<?=Select2::widget([
    'name' => 'roles',
    'data' => $roles,
    'value' => $user_permit,
    'options' => [
        'multiple' => true,
        'placeholder' => 'Выберите роль(и)',
    ]
]);?>


<div class="form-group">
    <?= Html::submitButton(Yii::t('db_rbac', 'Сохранить'), ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

