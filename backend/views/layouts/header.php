<?php
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">趣味新奇特</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <?php
    NavBar::begin(
        [
            'brandLabel' =>
                '<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">' .
                '<span class="sr-only">Toggle navigation</span>' .
                '</a>',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]

    );


    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
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

    <!--    <nav class="navbar-inverse navbar-static-top navbar" role="navigation">-->
    <!---->
    <!--        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">-->
    <!--            <span class="sr-only">Toggle navigation</span>-->
    <!--        </a>-->
    <!---->
    <!--        -->
    <!---->
    <!--    </nav>-->


</header>
