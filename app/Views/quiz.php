<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz</title>      
    </head>
    <style>
        *{
            font-family: 'Montserrat', sans-serif;
            background-color: #1d1f21;
        }


        body{
            background-color: #1d1f21;
            overflow:hidden;
            width: 100%;
        }

        .container{
            height: 85.5vh;
            padding-top: 14%;
            width: 100%;
            padding-left: 5em;
            padding-right: 5em;
        }
        .quiz-question{
            color: #fff;
            font-size: 1vw;
        }

        .header{
            color: #fff;
        }


        .col{
            height: 8em;
            padding: -1em;
        }

        .buttons{
            height: 100%;
            width: 100%;
            font-size: 1vw;
            padding: 2vw;
            font-weight: 300;
            border-radius: 1px;
        }
    </style>
<body ng-app>
    
      <div class="container">
        <div class="row justify-content-center">
            <p class="quiz-question">
                Choose the correct HTML element for the largest heading?
            </p>
        </div>

        <div class="row mx-md-n5">
            <div class="col px-md-5 text-center"><div class="p-3">
                <button class="btn btn-outline-light nontranslate buttons" type="submit" ng:click="">< h1 ></button>
            </div></div>
            <div class="col px-md-5 text-center"><div class="p-3">
                <button class="btn btn-outline-light nontranslate buttons" type="submit" ng:click="">< heading ></button>
            </div></div>
          </div>
          <div class="row mx-md-n5">
            <div class="col px-md-5 text-center"><div class="p-3">
                <button class="btn btn-outline-light nontranslate buttons" type="submit" ng:click="">< h6 ></button>
            </div></div>
            <div class="col px-md-5 text-center"><div class="p-3">
                <button class="btn btn-outline-light nontranslate buttons" type="submit" ng:click="">< head ></button>
            </div></div>
          </div>


      </div>
      
</body>
</html>



