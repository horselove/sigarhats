<?php
echo $this->Form->create('Image',
    ['url' => ['controller' => 'images',
    'action' => 'admin_add', 'ext' => 'json'],
    'type' => 'file', 'id' => 'imageform']);

  echo $this->Form->file('file', ['id' => 'image', 'class' => 'hidden']);
  echo $this->Form->hidden('product_id', ['value' => Hash::get($_GET, 'foreign_id')]);
  echo $this->Form->label('', 'Change photo', ['for' => 'image', 'class' => 'button button--medium raised tertiary']);

echo $this->Form->end();
?>

<div id="loading" class="hide">Loading...</div>
<div id="error" class="hide">An error occured, please try again.</div>

<script type="text/javascript">
  var callback = '<?= $_GET['callback']; ?>';
  $(document).ready(function() {
      $("#imageform").ajaxForm({
          dataType: 'json',
          success: function (response) {
              $('#loading, #error').hide();
              if (!response.success) {
                  return $('#error').show();
              }
              parent[callback].call(this, response.data);
          }
      });
      $('#image').on('change', function () {
          $("#loading").show();
          $("#imageform").submit();
      });
  });
</script>

