  <ul class="breadcrumb top-mspace ver-space">
    <li><?php echo $this->Html->link(__l('Security Questions'), array('action' => 'index'), array('title' => __l('Security Questions')));?><span class="divider">/</span></li>
    <li class="active"><?php echo __l('Edit Security Question');?></li>
  </ul>
<div class="securityQuestions form sep-top">
  <?php echo $this->Form->create('SecurityQuestion', array('class' => 'form-horizontal space')); ?>
  <?php echo $this->Form->input('id'); ?>
  <?php echo $this->Form->input('name', array('label' => __l('Question'))); ?>
  <?php echo $this->Form->input('name_es', array('label' => __l('Question (Spanish)'))); ?>
  <?php echo $this->Form->input('is_active', array('label' => __l('Enable?'))); ?>
  <div class="form-actions">
    <?php echo $this->Form->submit(__l('Update'), array('class' => 'btn btn-large btn-primary textb text-16'));?>
  </div>
  <?php echo $this->Form->end();?>
</div>