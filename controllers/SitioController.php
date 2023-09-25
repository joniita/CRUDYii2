<?php

    // Definimos el espacio de nombres para el controlador
    namespace app\controllers;

    use Yii;
    use yii\filters\AccessControl;
    use yii\web\Controller;
    use app\models\FormularioForm;
use yii\base\Model;

    class SitioController extends Controller {

        // Esta acción se ejecuta cuando se accede a la URL correspondiente
        public function actionStart () {

            // Creamos una nueva instancia del modelo FormularioForm
            $model = new FormularioForm;

             // Comprobamos si se ha enviado un formulario mediante POST
            if ( $model->load( Yii::$app->request->post() ) && $model->validate() ) {

                // Calculamos la suma de los valores a y b del formulario
                $valorRespuesta = ('El resultado es: '.$model->valora+$model->valorb);

                 // Renderizamos la vista 'start' con el mensaje y el modelo
                return $this->render('start', ['message' => $valorRespuesta, 'model' => $model]);
            }

            // Si no se ha enviado un formulario o hay errores de validación, renderizamos la vista 'start' con valores vacíos
            return $this->render('start', ['message' => '', 'model'=>$model]);
        }

    }

?>