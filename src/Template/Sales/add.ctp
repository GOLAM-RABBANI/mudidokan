<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sales'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sales form large-9 medium-8 columns content">
    <?= $this->Form->create($sale) ?>
    <fieldset>
        <legend><?= __('Add Sale') ?></legend>
        <select id='code' name="code" class="form-control">
            <option value="">Select Item Code</option>
            <?php foreach ($items as $item) : ?>
                <option value="<?php echo $item->code ?>"><?php echo $item->code ?></option>
            <?php endforeach; ?>
        </select>
        <?php

            echo $this->Form->input('name');
            echo $this->Form->input('price');
            echo $this->Form->input('quantity');
            echo $this->Form->input('total_price');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Add to cart')) ?>
    <?= $this->Form->end() ?>
</div>
<?php echo $this->Html->script('https://code.jquery.com/jquery-3.1.1.min.js', array('inline' => false));?>
<?php echo $this->Html->script('https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('inline' => false));?>

<script>
    $('#code').change(function(){
        var code=$(this).val();
        $('#quantity').val('');
        $('#total-price').val('');

        var url ='<?php echo $this->Url->build(["controller" => "Sales", "action" => "data"]); ?>'+'/'+code;
        $.ajax({
            url:url,
            method:'post',
            data:{code:code},
            success:function(feedback){
                var item_name= feedback.name;
                var price= feedback.price;

                $('#name').val(item_name);
                $('#price').val(price);
            }
        });
    });

    $('#quantity').keyup(function(){
        var price=$('#price').val();
        var quantity=$('#quantity').val();
        var result=0;
            result = price*quantity;
            $('#total-price').val(result);
        });


</script>
