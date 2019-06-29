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
    <div class="btn-group"><a href="<?php echo site_url('transactioncontroller/add');?>"><button type="button" class="btn btn-info">ADD</button></a></div>
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Transaksi</th>
        <th>Total Item</th>
        <th>Total Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $i=1;
            foreach($view as $a){

        ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $a['no_transaction'];?></td>
                <td><?php echo $a['item'];?></td>
                <td><?php echo $a['quantity'];?></td>
                <td>
                    <div class="btn-group"><button onclick="location.href='<?php echo site_url('transactioncontroller/edit/'.$a['id']);?>'" type="button" class="btn btn-info">Edit</button></div>
                    <div class="btn-group"><a data-href="<?php echo site_url('transactioncontroller/delete/');?>" data-toggle="modal" data-target="#confirm-delete<?php echo $i;?>" href="#"><button type="button" class="btn btn-danger">Delete</button></a></div>

                    <div class="modal fade" id="confirm-delete<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                                </div>

                                <div class="modal-body">
                                    <p>You are about to delete this data.</p>
                                    <p>Do you want to proceed?</p>
                                    <p class="debug-url"></p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <a href="<?php echo site_url('transactioncontroller/delete/'.$a['id']);?>" class="btn btn-danger danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php $i++;}?>
    </tbody>
  </table>
</div>

</body>
</html>
