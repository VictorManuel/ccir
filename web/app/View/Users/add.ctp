<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Nuevo Usuario'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('nivele_id', array(
            'options' => array('1' => 'Admin', '2' => 'Periodista','3'=>'Editor'),'label'=>'Cargo'
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>