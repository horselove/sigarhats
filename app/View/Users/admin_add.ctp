<div class="users form">

<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', [
            'value' => 'admin', 'type' => 'hidden'
        ]);
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
