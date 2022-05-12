<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ng-tags-input.min.css');?>">
    <script type="text/javascript" src="<?= base_url('assets/js/ng-tags-input.min.js');?>"> </script>
    <title>Add User</title>
</head>
<style>
    .container{
        padding-top: 10em;
    }

    .select{
        height: 5vh;
        width: 28vw;
        border-radius: 5px;
        padding-left: 1%;
        padding-right: 2%;
        border: 1px solid #ced4da;
    }

    .button{
        height: 5vh;
        width: 15vw;
        border-radius: 5px;
        border: none;
    }
</style>
<body>
    <div class="container"> 





    <form action="/Admin/saveuser" method="POST">
    <div class="form-group">
  <div class="row">
    <div class="col">
      <input type="text"  name="username" class="form-control" placeholder="Username">
    </div>
    <div class="col">
      <input type="text"  name="name" class="form-control" placeholder="Name">
    </div>
  </div>
  </div>


  <div class="form-group">
    <input type="text"  name="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
  </div>





  <div class="form-group">
  <div class="row">
    <div class="col">
        

                <select class="form-select select" name="role" aria-label="Default select example">
            <option selected>SELECT USER ROLE</option>
            <option value="admin">ADMIN</option>
            <option value="moderator">MODERATOR</option>
                </select>



    </div>
  </div>
  </div>
  <button class="button btn btn-light" type="submit">SAVE USER</button>
</form>





</div>
</body>
<script type="text/javascript" src="<?= base_url('assets/js/text-editor-answer-forum.js');?>"> </script>
</html>