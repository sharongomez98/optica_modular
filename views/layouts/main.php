<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Óptica Diaz</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Óptica Diaz',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
/*      echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
           // ['label' => 'Home', 'url' => ['/site/index']],
           // ['label' => 'About', 'url' => ['/site/about']],
           // ['label' => 'Contact', 'url' => ['/site/contact']],
              ['label' => 'Inventario', 'url' => ['/inventario/index']],
              ['label' => 'Ventas', 'url' => ['/cventas/index']],
              ['label' => 'Recursos Humanos', 'url' => ['/rhumanos/index']],
              ['label' => 'Financiero', 'url' => ['/financiero/index']],

         Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);*/
    if (Yii::$app->user->isGuest) {
    
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
    $menuItems[] = ['label' => 'Registro', 'url' => ['/site/signup']];
    $menuItems = [
                ['label' => 'Inventario', 'url' => ['/inventario/index']],
              ['label' => 'Ventas', 'url' => ['/cventas/index']],
              ['label' => 'Recursos Humanos', 'url' => ['/rhumanos/index']],
              ['label' => 'Financiero', 'url' => ['/financiero/index']],

    ];
    $menuItems[] = '<li>'
        . Html::beginForm(['/site/logout'], 'post')
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            ['class' => 'btn btn-link logout']
        )
        . Html::endForm()
        . '</li>';
}
 
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Óptica Diaz <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
