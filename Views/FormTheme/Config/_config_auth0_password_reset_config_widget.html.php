<?php

?>

<div class="panel panel-warning">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $view['translator']->trans('plugin.auth0_password_reset.config.tab.auth0_config'); ?></h3>
    </div>
    <div class="panel-body">
        <?php foreach ($form->children as $f): ?>
            <div class="row">
                <div class="col-md-6">
                    <?php echo $view['form']->row($f); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>