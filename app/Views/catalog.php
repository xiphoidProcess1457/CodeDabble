<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <link rel="stylesheet" href="<?= base_url('assets/css/catalog.css');?>">
    <title>CATALOG</title>
    </head>
    <style>
         .container-fluid{
    padding-top: 15%;
}
    </style>
<body>
    <div class="container-fluid">




<div class="course-catalog">

    <div class="row">
        <h2 class="align-self-end course-header"> LEARN JAVA</h2>
    </div>
    
    
    <div class="row no-gutters">
    <?php foreach($lessons as  $item) : ?>
        <div class="column-md-3 column-spacing">

            <div class="card" style="width: 18rem;">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <img src="<?= base_url('assets/assets/java.svg');?>" alt=""></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0 card-title"><?= $item['title']?></h6> <span class="card-subtitle"><?= $item['course']?></span>
                        </div>
                    </div>
                  <p class="card-text">
                  <?= $item['description']?>
                </p>
                  <a href="<?php echo base_url('Admin/editor/'. $item['id']);?>" type="button" class="align-self-end btn btn-lg btn-block btn-primary" style="margin-top: auto;">Learn Now</a>
                </div>
                </div>

            </div>
            <?php endforeach; ?>
      
      </div>
   

</div>

       

            


          </div>

</body>
</html>

