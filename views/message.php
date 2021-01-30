<?php

/*
 * This file is part of the fighcell project.
 *
 * (c) fighcell project <http://github.com/fighcell>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var yii\web\View $this
 * @var fighcell\user\Module $module
 */

$this->title = $title;
?>

<?= $this->render('/_alert', ['module' => $module]);
