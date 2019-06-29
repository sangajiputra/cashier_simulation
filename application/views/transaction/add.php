<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <form action="<?php echo site_url('transactioncontroller/action_add');?>" method="POST">
        <div class="form-group">
            <label>Transaction No:</label>
            <input type="number" name="transaction_no" class="form-control">
        </div>
        <div class="form-group">
            <label>Transaction Date:</label>
            <input type="date" name="transaction_date" class="form-control">
        </div>
        <div class="form-group">
            <label><b>Detail Items</b>:</label>
            <input type="button" class="btn btn-success" value="Add Item" id="additem">
        </div>
        <div id="list_item">
          <div id="item1">
            <div class="form-group">
                <label>Item Name:</label>
                <input type="text" name="item_name[]" class="form-control">
            </div>
            <div class="form-group">
                <label>Quantity:</label>
                <input type="number" name="quantity[]" class="form-control">
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-default">save</button>
    </form>
</div>

</body>
<script type="text/javascript">
var i = 1;
$('#additem').click(function() {
  i = i + 1;
    $('#list_item').append('<div id="item'+i+'"><div class="row"><div class="col-md-8"><div class="form-group"><label>Item Name:</label><input type="text" name="item_name[]" class="form-control"></div><div class="form-group"><label>Quantity:</label><input type="number" name="quantity[]" class="form-control"></div></div><div class="col-md-4" style="margin-top: 50px;"><input type="button" class="btn btn-danger" data-id="'+i+'" value="X"></div></div></div>');
});
$(document).on('click','.btn.btn-danger',function(){
  let item = $(this).data('id');
    $('#item'+item).remove();
});
</script>
</html>
