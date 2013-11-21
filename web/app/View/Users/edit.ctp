<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Editar Usuario'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('nivele_id', array(
            'options' => array('1' => 'Admin', '2' => 'Editor'),'label'=>'Cargo'
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Enviar')); ?>
</div>