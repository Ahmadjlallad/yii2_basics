<?php
/** @var yii\web\View $this */
/** @var string $content */
use app\assets\AssetsDemoAsset;

AssetsDemoAsset::register($this);

?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">

<head>
    <?php $this->head() ?>

    <meta charset="<?= Yii::$app->charset?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Landing Page - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Bootstrap icons-->

    <!-- Google fonts-->

    <!-- Core theme CSS (includes Bootstrap)-->
</head>
<body>
<?php $this->beginBody(); ?>
<!-- Navigation-->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <a class="btn btn-primary" href="#signup">Sign Up</a>
    </div>
</nav>
<?= $content ?>
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><a href="#!">About</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Contact</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Terms of Use</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Privacy Policy</a></li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2021. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-4">
                        <a href="#!"><i class="bi-facebook fs-3"></i></a>
                    </li>
                    <li class="list-inline-item me-4">
                        <a href="#!"><i class="bi-twitter fs-3"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#!"><i class="bi-instagram fs-3"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<!-- Core theme JS-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<?php $this->endBody(); ?>

</body>
</html>
<?php $this->endPage(); ?>
