<?php /* @var $this CController */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="en">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/resources/style.css">
    <title><?php echo CHtml::encode( $this->pageTitle ); ?></title>
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <?php $this->widget( 'zii.widgets.CMenu', array(
                'htmlOptions' => array( 'class' => 'nav nav-pills pull-right' ),
                'items' => array(
                    array( 'label' => 'Home', 'url' => array( '/site/index' ) ),
                    array( 'label' => 'About', 'url' => array( '/site/about' ) ),
                ),
            ) ); ?>
        </nav>
        <h3 class="text-muted">
            <?php echo CHtml::link( 'Yii1 Minimal', Yii::app()->getHomeUrl() ); ?>
        </h3>
    </div>

    <?php echo $content; ?>

    <footer class="footer">
        <p>&copy; <?php echo date( 'Y' ); ?> Untitled, Inc.</p>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/resources/script.js"></script>

</body>
</html>