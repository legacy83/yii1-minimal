<?php
/* @var $this CController */
/* @var $error array */
/* @var $code int */

$this->pageTitle = Yii::app()->name . ' - Error';
?>

<h1>Error <?php echo $code; ?></h1>

<p><?php echo CHtml::encode( $message ); ?></p>