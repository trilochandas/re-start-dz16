<?php /* Smarty version 2.6.28, created on 2016-04-11 13:07:50
         compiled from form.tpl.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'form.tpl.html', 3, false),array('function', 'html_options', 'form.tpl.html', 31, false),)), $this); ?>
<form id="advertForm" class="form-horizontal" method="POST" role="form">
    <h2  class="sub-header">Add advert</h2>
    <input type="text" name="id" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['id'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" hidden>
  <div class="form-group">
    <label for="inputTitle" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" name="title" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['title'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" class="form-control" id="inputTitle" placeholder="Title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputDescription" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
     <textarea name="description" class="form-control" id="inputDescription" rows="3"><?php echo ((is_array($_tmp=@$this->_tpl_vars['description'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
     <input type="text" name="name" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['name'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" class="form-control" id="inputName" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
     <input type="email" name="email" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['email'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" class="form-control" id="inputEmail" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">City</label>
    <div class="col-sm-10">
     <?php echo smarty_function_html_options(array('class' => "form-control",'id' => 'city','name' => 'city','options' => $this->_tpl_vars['citys'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['city'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">Metro</label>
    <div class="col-sm-10">
     <?php echo smarty_function_html_options(array('class' => "form-control",'name' => 'metro','options' => $this->_tpl_vars['metro1'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['metro'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

    </div>
  </div>
  <div class="form-group">
    <label for="inputCity" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-10">
     <?php echo smarty_function_html_options(array('class' => "form-control",'name' => 'category_id','options' => $this->_tpl_vars['categorys'],'selected' => ((is_array($_tmp=@$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, ''))), $this);?>

    </div>
  </div>
  <div class="form-group">
    <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
     <input type="phone" name="phone" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['phone'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" class="form-control" id="inputPhone" placeholder="0001234567">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrice" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-10">
     <input type="text" name="price" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['price'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
" class="form-control" id="inputPrice" placeholder="0">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <label>
        <input value="1" name="allow_mails" <?php if (((is_array($_tmp=@$this->_tpl_vars['allow_mails'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) == 1): ?> <?php echo 'checked'; ?>
 <?php endif; ?> type="checkbox"> Mail me!
      </label>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="radio">
        <label>  <input type="radio" <?php if (((is_array($_tmp=@$this->_tpl_vars['type'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) == 'private'): ?> <?php echo 'checked'; ?>
 <?php endif; ?> name="type" id="optionsRadios1" value="private" checked> Private advert </label>
      </div>
      <div class="radio">
        <label>  <input type="radio" <?php if (((is_array($_tmp=@$this->_tpl_vars['type'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')) == 'company'): ?> <?php echo 'checked'; ?>
 <?php endif; ?> name="type" id="optionsRadios2" value="company">Company advert  </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input id="send" type="submit" value="Send" name="formSubmit" class="btn btn-default">
    </div>
  </div>
</form>