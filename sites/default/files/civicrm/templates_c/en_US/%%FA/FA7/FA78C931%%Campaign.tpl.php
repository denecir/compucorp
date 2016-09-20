<?php /* Smarty version 2.6.27, created on 2016-09-19 21:00:27
         compiled from CRM/PCP/Form/Campaign.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/PCP/Form/Campaign.tpl', 1, false),array('block', 'ts', 'CRM/PCP/Form/Campaign.tpl', 27, false),array('block', 'crmRegion', 'CRM/PCP/Form/Campaign.tpl', 31, false),array('modifier', 'crmAddClass', 'CRM/PCP/Form/Campaign.tpl', 35, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Personalize the contents and appearance of your personal campaign page here. You will be able to return to this page and make changes at any time.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<fieldset class="crm-pcp-campaign-group">
<div class="crm-block crm-contribution-campaign-form-block">
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "pcp-form-campaign")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <div class="crm-section crm-pcp-title-section crm-contribution-form-block-title">
    <div class="label"><?php echo $this->_tpl_vars['form']['pcp_title']['label']; ?>
</div>
    <div class="content">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['pcp_title']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

    </div>
    <div class="clear"></div>
  </div>
  <div class="crm-section crm-pcp-intro_text-section crm-contribution-form-block-intro_text">
    <div class="label"><?php echo $this->_tpl_vars['form']['pcp_intro_text']['label']; ?>
</div>
    <div class="content">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['pcp_intro_text']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

      <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Introduce the campaign and why you're supporting it. This text will appear at the top of your personal page AND at the top of the main contribution or event registration page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="crm-section crm-pcp-goal_amount-section crm-contribution-form-block-goal_amount">
    <div class="label"><?php echo $this->_tpl_vars['form']['goal_amount']['label']; ?>
</div>
    <div class="content">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['goal_amount']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'six') : smarty_modifier_crmAddClass($_tmp, 'six')); ?>

      <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total amount you would like to raise for this campaign.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="crm-section crm-pcp-is_thermometer-section crm-contribution-form-block-is_thermometer">
    <div class="label"><?php echo $this->_tpl_vars['form']['is_thermometer']['label']; ?>
</div>
    <div class="content">
      <?php echo $this->_tpl_vars['form']['is_thermometer']['html']; ?>

      <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If this option is checked, a "thermometer" showing progress toward your goal will be included on the page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="crm-section crm-pcp-donate_link_text-section crm-contribution-form-block-donate_link_text">
    <div class="label"><?php echo $this->_tpl_vars['form']['donate_link_text']['label']; ?>
</div>
    <div class="content">
      <?php echo $this->_tpl_vars['form']['donate_link_text']['html']; ?>

      <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The text for the contribute or register button.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="crm-section crm-pcp-page_text-section crm-contribution-form-block-page_text">
    <div class="label"><?php echo $this->_tpl_vars['form']['page_text']['label']; ?>
</div>
    <div class="content">
      <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['page_text']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>

      <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tell people why this campaign is important to you.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    </div>
    <div class="clear"></div>
  </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachment.tpl", 'smarty_include_vars' => array('context' => 'pcpCampaign')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="crm-section crm-pcp-is_honor_roll-section crm-contribution-form-block-is_honor_roll">
    <div class="label"><?php echo $this->_tpl_vars['form']['is_honor_roll']['label']; ?>
</div>
    <div class="content">
      <?php echo $this->_tpl_vars['form']['is_honor_roll']['html']; ?>

      <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If this option is checked, an "honor roll" will be displayed with the names (or nicknames) of the people who supported you. (Donors will have the option to remain anonymous. Their names will NOT be listed.)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>    </div>
    <div class="clear"></div>
  </div>
  <?php if ($this->_tpl_vars['owner_notification_option']): ?>
    <div class="crm-section crm-pcp-is_notify-section crm-contribution-form-block-is_notify">
      <div class="label"><?php echo $this->_tpl_vars['form']['is_notify']['label']; ?>
</div>
      <div class="content">
        <?php echo $this->_tpl_vars['form']['is_notify']['html']; ?>

        <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If this option is checked, you will receive an email notification when people contribute to your campaign.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      </div>
      <div class="clear"></div>
    </div>
  <?php endif; ?>
  <div class="crm-section crm-pcp-is_active crm-contribution-form-block-is_active">
    <div class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</div>
    <div class="content">
      <?php echo $this->_tpl_vars['form']['is_active']['html']; ?>

      <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Is your Personal Campaign Page active? You can activate/de-activate it any time during it's lifecycle.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    </div>
    <div class="clear"></div>
  </div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</fieldset>
<script type="text/javascript">
    // Always open attachment div by default for this form
    cj('#attachments').show();
</script>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>