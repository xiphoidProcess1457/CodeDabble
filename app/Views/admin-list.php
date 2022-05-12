<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        padding-top: 10em;
    }
</style>
<body>
    <div class="container">
        
    <table class="table table-hover table-borderless">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">USERNAME</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ROLE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php $x = 1;?>
  <?php foreach($admins as  $item) : ?>
    <tr>
      <th scope="row"><?php echo $x++;?></th>
      <td><?= $item['username']?></td>
      <td><?= $item['name']?></td>
      <td><?= $item['email']?></td>
      <td><?= $item['role']?></td>
      <td>
      <a class="btn btn-danger" href="<?php echo base_url('Admin/deleteadmin/'. $item['id']);?>">DELETE</a>  
      
      <?php if ($item['status'] == 'deactivated'):?>
    <a class="btn btn-danger text-uppercase" href="<?php echo base_url('Admin/adminstatus/'. $item['id']);?>"><?= $item['status']?></a> 
        <?php else:?>
          <a class="btn btn-success text-uppercase" href="<?php echo base_url('Admin/adminstatus/'. $item['id']);?>"><?= $item['status']?></a> 
		  	<?php endif; ?>

      </td>
    </tr>
    <?php endforeach; ?>
 
   

   
  </tbody>
</table>
    </div>
</body>
</html>


