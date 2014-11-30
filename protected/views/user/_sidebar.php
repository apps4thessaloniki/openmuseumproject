<div class="well well-sm">
    <ul class="nav nav-pills nav-stacked" id="yw1">
        <li <?php if ($this->id == 'user' && $this->action->id == 'index') echo 'class="active"';?>>
            <a href="<?=Yii::app()->createUrl('user/index');?>"><span class="glyphicon glyphicon-dashboard"></span> Διαχείριση</a>
        </li>
        <li <?php if (($this->id == 'institution') && ($this->action->id == 'admin')) echo 'class="active"';?>>
            <a href="<?= Yii::app()->createUrl('institution/index') ?>"><span class="glyphicon glyphicon-book"></span> Ινστιτούτων</a>
        </li>
        <li <?php if (($this->id == 'user') && ($this->action->id == 'admin')) echo 'class="active"';?>>
            <a href="<?= Yii::app()->createUrl('user/admin') ?>"><span class="glyphicon glyphicon-lock"></span> Πρόσβασης</a>
        </li>
        <li>
            <a href="dbpedia.php"><span class="glyphicon glyphicon-file"></span> Στατιστικά</a>
        </li>
        <li>
            <a class="text-danger" href="<?=$this->createUrl('user/logout')?>"><span class="glyphicon glyphicon-off"></span> Αποσύνδεση</a>
        </li>
    </ul>
</div>