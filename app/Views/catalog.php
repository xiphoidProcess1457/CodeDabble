<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>HOME</title>
 
    </head>

    <style>
        body{
            font-family: 'Montserrat', sans-serif;
             
        }
        .container-fluid{
            box-sizing: border-box;
            padding: 2%;
            padding-right: 15%;
            padding-left: 15%;
            padding-bottom: 18%;
            overflow: hidden;
        }

        .course-header{
            color: #231773;
            font-weight: 700;
        }


        .course-catalog{
            padding-bottom: 10%;
        }

        .course-img-header{
            width: 120px;
        }

        .card{
            height: 17em;
            background-color: #231773;
            color: #ebedf2;
            border-radius: 5px;
            box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
            transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
            cursor: pointer;
        }

        .icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-right: 2%;
        }


        .card-title{
            font-weight: 800;
        }

        .card-subtitle{
            color: #acb0f2;
            font-weight: 500;
        }

        .card-text{
            color: #fff;
            padding-top: 8%;
            font-weight: 600;
        }


        .card:hover{
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
        }


        .btn-primary{
            border-radius: 5px;
        }
        .btn-primary:hover{
            background-color: #acb0f2;
            border: none;
        }

        .card-container{
            padding-left: -10em;
        }
        .row > div[class*='column-'] {
            padding-left: -10em;
            display: flex;
            flex:1 0 auto;
        }

        .column-spacing{
            padding-bottom: 3%;
        }
        
        .collapse-button{
            background-color: #231773;
            border: none;
        }
    </style>
<body>
    <div class="container-fluid">

       

<div class="course-catalog">
    <div class="row">
        <img src="<?= base_url('assets/assets/html.svg');?>" class="course-img-header" alt="">
        <h2 class="align-self-end course-header">Learn HTML</h2>
    </div>
    
    <div class="row no-gutters">

        <div class="column-md-3 column-spacing">
            <div class="card" style="width: 18rem;">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <img src="<?= base_url('assets/assets/htmlIcon.svg');?>" alt=""></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0 card-title">Intro to Html</h6> <span class="card-subtitle">Lecture 1</span>
                        </div>
                    </div>
                  <p class="card-text">HTML is the standard markup language for creating Web pages</p>
                  <a href="<?= base_url('Home/editor');?>" type="button" class="align-self-end btn btn-lg btn-block btn-primary" style="margin-top: auto;">Learn Now</a>
                </div>
                </div>
            </div>
            
      
      </div>
      <div class="collapse" id="collapse-html">
        <div class="row no-gutters">

            <div class="column-md-3 column-spacing">
                <div class="card" style="width: 18rem;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <img src="<?= base_url('assets/assets/htmlIcon.svg');?>" alt=""></i> </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 card-title">Intro to Html</h6> <span class="card-subtitle">Lecture 1</span>
                            </div>
                        </div>
                      <p class="card-text">HTML is the standard markup language for creating Web pages</p>
                      <a href="#" type="button" class="align-self-end btn btn-lg btn-block btn-primary" style="margin-top: auto;">Learn Now</a>
                    </div>
                    </div>
                </div>
           
          </div>
      </div>
      <button class="btn btn-primary collapse-button" type="button" data-toggle="collapse" data-target="#collapse-html" aria-expanded="false" aria-controls="collapseExample">
        See more
      </button>

</div>

       

            



<div class="course-catalog">
    <div class="row">
        <img src="<?= base_url('assets/assets/css.svg');?>" class="course-img-header" alt="">
        <h2 class="align-self-end course-header">Learn CSS</h2>
    </div>
    
    <div class="row no-gutters">

        <div class="column-md-3 column-spacing">
            <div class="card" style="width: 18rem;">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <img src="<?= base_url('assets/assets/cssIcon.svg');?>" alt=""></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0 card-title">Intro to Html</h6> <span class="card-subtitle">Lecture 1</span>
                        </div>
                    </div>
                  <p class="card-text">HTML is the standard markup language for creating Web pages</p>
                  <a href="#" type="button" class="align-self-end btn btn-lg btn-block btn-primary" style="margin-top: auto;">Learn Now</a>
                </div>
                </div>
            </div>
      
      </div>
      <div class="collapse" id="collapse-css">
        <div class="row no-gutters">

            <div class="column-md-3 column-spacing">
                <div class="card" style="width: 18rem;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <img src="<?= base_url('assets/assets/cssIcon.svg');?>" alt=""></i> </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 card-title">Intro to Html</h6> <span class="card-subtitle">Lecture 1</span>
                            </div>
                        </div>
                      <p class="card-text">HTML is the standard markup language for creating Web pages</p>
                      <a href="#" type="button" class="align-self-end btn btn-lg btn-block btn-primary" style="margin-top: auto;">Learn Now</a>
                    </div>
                    </div>
                </div>
           
          </div>
      </div>
      <button class="btn btn-primary collapse-button" type="button" data-toggle="collapse" data-target="#collapse-css" aria-expanded="false" aria-controls="collapseExample">
        See more
      </button>

</div>





<div class="course-catalog">
    <div class="row">
        <img src="<?= base_url('assets/assets/java.svg');?>" class="course-img-header" alt="">
        <h2 class="align-self-end course-header">Learn JAVA</h2>
    </div>
    
    <div class="row no-gutters">

        <div class="column-md-3 column-spacing">
            <div class="card" style="width: 18rem;">
                <div class="card-body d-flex flex-column">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <img src="<?= base_url('assets/assets/javaIcon.svg');?>" alt=""></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0 card-title">Intro to Html</h6> <span class="card-subtitle">Lecture 1</span>
                        </div>
                    </div>
                  <p class="card-text">HTML is the standard markup language for creating Web pages</p>
                  <a href="#" type="button" class="align-self-end btn btn-lg btn-block btn-primary" style="margin-top: auto;">Learn Now</a>
                </div>
                </div>
            </div>
      
      </div>
      <div class="collapse" id="collapse-java">
        <div class="row no-gutters">

            <div class="column-md-3 column-spacing">
                <div class="card" style="width: 18rem;">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <img src="<?= base_url('assets/assets/javaIcon.svg');?>" alt=""></i> </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0 card-title">Intro to Html</h6> <span class="card-subtitle">Lecture 1</span>
                            </div>
                        </div>
                      <p class="card-text">HTML is the standard markup language for creating Web pages</p>
                      <a href="#" type="button" class="align-self-end btn btn-lg btn-block btn-primary" style="margin-top: auto;">Learn Now</a>
                    </div>
                    </div>
                </div>
           
          </div>
      </div>
      <button class="btn btn-primary collapse-button" type="button" data-toggle="collapse" data-target="#collapse-java" aria-expanded="false" aria-controls="collapseExample">
        See more
      </button>

</div>
          </div>

</body>
</html>

