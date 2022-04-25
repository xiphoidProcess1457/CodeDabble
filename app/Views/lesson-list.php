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
    <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">TITLE</th>
      <th scope="col">CONTENT</th>
      <th scope="col">COURSE</th>
      <th scope="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Intro to Java</td>
      <td>Welcome to the world of Java programming!</td>
      <td>Java</td>
      <td> 
        <a href="<?php echo base_url('Admin/edit/');?>" class="btn btn-success" role="button"><i class="fas fa-edit"></i></a>
        <a href="<?php echo base_url('Admin/delete/');?>" class="btn btn-danger" role="button"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Variables</td>
      <td>Let’s say we need a program that connects a user with new jobs. </td>
      <td>Java</td>
      <td>
      <a href="<?php echo base_url('Admin/edit/');?>" class="btn btn-success" role="button"><i class="fas fa-edit"></i></a>
        <a href="<?php echo base_url('Admin/delete/');?>" class="btn btn-danger" role="button"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
   
  </tbody>
</table>
    </div>
</body>
</html>