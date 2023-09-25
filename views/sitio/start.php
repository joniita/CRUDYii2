<?php

    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

?>

<?php

    if($message) {
        echo Html::tag('div', Html::encode($message), ['class' => 'alert alert-danger']);
    }

?>

Hola Usuario

<?php   $formulario = ActiveForm::begin();  ?>

<?= $formulario->field($model, 'valora')    ?>
<?= $formulario->field($model, 'valorb')    ?>


<div class="form-group">

    <?= Html::submitButton('enviar', ['class' => 'btn btn-primary'])?>

</div>

<?php   ActiveForm::end();    ?>