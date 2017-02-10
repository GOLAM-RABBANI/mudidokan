<div class="row">
    <div class="columns large-12">
        <table class="table" id="item_table">
            <tr>
                <th>code</th>
                <th>name</th>
                <th>price</th>
                <th>quantity</th>
                <th>amount</th>
                <th>action</th>
            </tr>
            <?php foreach ($items as $item):?>
            <tr id="item_row">
                <td>
                    <?= $this->Form->create('Post');?>
                    <?= $this->Form->input('searching',['label'=>'','placeholder'=>'enter product code','id'=>'code']);?>
                    <?= $this->Form->end();?>

                </td>

                <td><input type="image" id="name" value="<?php echo $item->name?>"></td>
                <td><input type="image" id="price" value="<?php echo $item->price?>"></td>
                <td><input type="text" id="quantity" onchange="computeTotal()"></td>
                <?php endforeach;?>
                <td><h3 id="payment"></h3></td>

            </tr>
        </table>
        <button type="button" class="btn btn-success btn-sm" id="addform">+</button>
        <button type="button" class="btn btn-success btn-sm" id="removeform">-</button>
    </div>
</div>
<?php echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array('inline' => false));?>
<script>

    $(document).ready(function () {
        $('#code').keyup(function () {

            var search = $(this).val();
            alert(search);

            var url = '<?php echo $this->Url->build(["controller" => "Pages", "action" => "ajaxHello"]); ?>' + '/' + search;
            $.ajax({
                url: url,
                method: 'post',
                data: {search: search},
                success: function (feedback) {
                    alert(feedback);
                }
            })
        })
    });
    01711555111


//        $('#addform').click(function () {
//            var arr=[];
//            var html="";
//            html='<div class="cell"><table class="table"><thead></thead><tbody><tr><td><input type="text" id="code" name="code"></td>' +
////                '<td><input type="image" id="name" value="sop"></td>' +
////                '<td><input type="image" id="price" value="30"></td>'+
//                '<td><input type="text" id="quantity" onchange="computeTotal()"></td>'+
//                '<td><h3 id="payment"></h3></td>'+
//                '</tr></tbody></table></div>';
//            $('#item_row').append(html)
//        })
//        $('#removeform').click(function () {
//            $('.cell:last').remove()
//        })
//    })
//    function computeTotal() {
//        var price=document.getElementById('price').value;
//        var quantity=document.getElementById('quantity').value;
//        var amount=price*quantity;
//        var total=document.getElementById('payment').innerHTML=amount;
//    }
</script>
