<?php
function debug($arr)
{
    echo '<pre>' . print_r($arr, true) . '</pre>';
}

function viewError($model)
{
    if ($model->load(Yii::$app->request->post()) && !$model->validate()) {
        foreach ($model->getErrors() as $key => $value) {
          echo $key.': '.$value[0];
        }
       return;
      }
}

function returnFlash($success, $error){
    
}
?>