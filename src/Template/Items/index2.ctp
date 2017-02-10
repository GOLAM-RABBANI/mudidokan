<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addData">Insert Data</button>

        <!-- Modal -->
        <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="addLabel">Insert Data</h4>
                    </div>
                    <?= $this->Form->create($items,['id'=>'form']) ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="code">Product Code</label>
                                <input type="text" class="form-control" id="product_code"  placeholder="product code">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name"  placeholder="product name">
                            </div>
                            <div class="form-group">
                                <label for="name">Price</label>
                                <input type="number" class="form-control" id="price"  placeholder="product price">
                            </div>
                            <!--                    <select class="form-control">-->
                            <!--                        <option>1</option>-->
                            <!--                        <option>2</option>-->
                            <!--                        <option>3</option>-->
                            <!--                        <option>4</option>-->
                            <!--                        <option>5</option>-->
                            <!--                    </select>-->
                            <div class="form-group">
                                <label for="name">Unit</label>
                                <input type="number" class="form-control" id="unit"  placeholder="product unit">
                            </div>
                        </div>

<!--                        <div class="modal-footer">-->
<!--                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                            <button type="submit" onclick="saveData()" class="btn btn-primary">Save</button>-->
<!--                        </div>-->
                    <?= $this->Form->button(__('Submit',['id'=>'submit'])) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
//    function saveData() {
//        var product_code=$('#product_code').val();
//        var name=$('#name').val();
//        var price=$('#price').val();
//        var unit=$('#unit').val();
//        $.ajax({
//            type:"POST",
//            url:"http://localhost/mudidokan/<?php //echo $ItemsController; ?>///add",
//            data:"product_code="+product_code+"name="+name+"price="+price+"unit="+unit,
//            success:function (msg) {
//                alert("success insert data");
//            }
//        })
//    }

    $(document).ready(function () {
     $('#submit').click(function (event) {
         event.preventDefault();
       var x=$('#form').serializeArray();
       $.post(
           $(#form).attr('action'),
             x,
             function (data) {
               $('.success').html(data);
               $('.success').fadeOut(3000);

             }
       )
     })
    })
</script>
