<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use backend\assets\LoginAsset;

$asset= AppAsset::register($this);
$baseUrl= $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="skin-blue sidebar-mini">
<?php $this->beginBody() ?>

    <?= $this->render('header.php',['baseUrl'=>$baseUrl]) ?>
    <?= $this->render('leftmenu.php',['baseUrl'=>$baseUrl]) ?>
    <div class="wrap">
        <?= $this->render('content.php',['content'=>$content]) ?>
    </div>
    <?= $this->render('footer.php',['baseUrl'=>$baseUrl]) ?>
    <?= $this->render('rightside.php',['baseUrl'=>$baseUrl]) ?>
    <div class="control-sidebar-bg"></div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
