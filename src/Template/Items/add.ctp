<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="large-9 medium-8 columns" id="actions-sidebar">
    <h3><?= __('Add Items') ?></h3>
<div class="form">
    <?php echo $this->Form->create(null,['id'=>'item_form']);?>
    <?php
        echo $this->Form->input('code',['id'=>'code']);
        echo $this->Form->input('name',['id'=>'name']);
        echo $this->Form->input('price',['id'=>'price']);
//        echo $this->Form->input('category', ['id'=>'category']);

        echo $this->Form->input('units',['id'=>'units']);

    ?>
<!--    <select name="category_id" id="category_id">-->
<!--        <option value="">select category</option>-->
<!--        --><?php
//
//        foreach ($categories as $category){?>
<!--            <option value="--><?php //echo $category->name?><!--">--><?php //echo $category->name?><!--</option>-->
<!--        --><?php //}?>
<!--    </select>-->
    <?=$this->Form->submit('Submit',['id'=>'Submit1','class'=>'button']); ?>
<!--    --><?//= $this->Form->button(__('Submit'),['id'=>'submit2']) ?>
    <?= $this->Form->end() ?>
</div>
<div class="success"></div>
</div>
<!--<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>-->
<!--<script>-->
<!--$(document).ready(function () {-->
<!--$('#submit').click(function (event) {-->
<!--event.preventDefault();-->
<!--var x=$('#form').serializeArray();-->
<!--$.post(-->
<!--$(#form).attr('action'),-->
<!--x,-->
<!--function (data) {-->
<!--$('.success').html(data);-->
<!--$('.success').fadeOut(3000);-->
<!--$('input').val("");-->
<!---->
<!--}-->
<!--)-->
<!--})-->
<!--})-->
<!--</script>-->



<?php //echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array('inline' => false));?>
<!---->
<!--<script>-->
<!--    $("#item-form").bind('change',function(){-->
<!--        var code=$('#code').val();-->
<!--        var name=$('#name').val();-->
<!--        var price=$('#price').val();-->
<!--        var units=$('#units').val();-->
<!--        var category=$('#category').val();-->
<!--        var close = $(this).closest(".row").find('.upz_in_dist')[1];-->
<!---->
<!--        var dist_url ='--><?php //echo $this->request->webroot?><!--//formdoptors/getupazilasbyzila'+'/'+dist_name;-->
<!--//        $.ajax({-->
<!--//            url:dist_url,-->
<!--//            method:'post',-->
<!--//            data:{district_name:dist_name},-->
<!--//            success:function(feedback){-->
<!--//                var default_val='<option value="" class="select2-chosen">বাছাই করুন</option>';-->
<!--//                var val='<option value="">বাছাই করুন</option>';-->
<!--//                $.each(feedback,function(key,value){-->
<!--//                    val += '<option value="'+value.upazila_name_bng+'">'+value.upazila_name_bng+'</option>';-->
<!--//                });-->
<!--//                $(close).empty().html(val);-->
<!--//            }-->
<!--//        });-->
<!--//    });-->
</script>