<?php /* Smarty version 2.6.27, created on 2016-09-19 20:46:55
         compiled from CRM/Contribute/Form/ContributionPage/Delete.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/ContributionPage/Delete.tpl', 1, false),array('block', 'ts', 'CRM/Contribute/Form/ContributionPage/Delete.tpl', 30, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>    <div class="messages status no-popup">
      <div class="icon inform-icon"></div>
          <?php if ($this->_tpl_vars['relatedContributions']): ?>
           <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['title'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You cannot delete this Contribution Page because it has already been used to submit a contribution or membership payment. It is recommended that your disable the page instead of deleting it, to preserve the integrity of your contribution records. If you do want to completely delete this contribution page, you first need to search for and delete all of the contribution transactions associated with this page in CiviContribute.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php else: ?>
           WARNING: Are you sure you want to Delete the selected Contribution Page? A Delete operation cannot be undone. Do you want to continue?
        <?php endif; ?>
      </div>
<div class="form-item">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>