<?php



$data=[
["id"=> "1" , "src" => "./05.jpg" , "Chinese-title" => " 婚禮主視覺"   ,  "English-title" =>"Wedding Design" , "Chinese-text" => "2020年教會結婚禮拜主視覺與婚禮流程表(A5摺頁)。主色調根據新娘喜愛的橘黃色調與花卉進行發想設計。"  , "English-text" => "2020 church wedding service main vision and wedding process table (A5 fold). The main color is based on the bride's favorite orange tones and flowers." ],
["id"=> "2" , "src" => "./01.jpg" , "Chinese-title" => " 電子海報"  ,  "English-title" =>"Poster Design" , "Chinese-text" => "教會專為新世代族群所開設的arise崇拜所設計的系列電子海報。每一期根據不同的主題設計，更視覺化吸引學生參與"  , "English-text" => "A series of electronic posters designed by the church for the arise worship of the new generation. Each issue is designed according to different themes, more visually attracting students to participate." ],
["id"=> "3" , "src" => "./017.png" , "Chinese-title" => " LINE貼圖" ,  "English-title" =>"Steckers Design" , "Chinese-text" => "繼第一集《小臻臻之疫起戴口罩》後，推出的《小臻臻願你平安》貼圖，盼望在新冠疫情肆虐之際、人與人之間無法見面的時刻，透過Line貼圖彼此問候、互相鼓勵。" , "English-text" => "Following the first episode of `Jen's maskerⅠ`, the sticker `Jen's maskerⅡ` was released. Hope that when COVID-19 is raging and people can't meet each other, they can stick to each other through Line. Greet and encourage each other." ],
["id"=> "4" , "src" => "./611-2.png" , "Chinese-title" => " 官網首頁主視覺"  ,  "English-title" =>"Homepage Design" , "Chinese-text" => "這是為台北611靈糧堂繪製的官網首頁底圖，以教會的建築綴以白色鴿子剪影，藍綠色調的彩色底圖，象徵自由、聖潔與聖靈充滿。" , "English-text" => "This is the base map of the official website homepage drawn for Taipei 611 Church. The church building is decorated with silhouettes of white doves. The blue-green color base map symbolizes freedom, holiness, and the filling of the Holy Spirit." ],
["id"=> "5" , "src" => "./006-2.png" , "Chinese-title" => " 電子DM"  ,  "English-title" =>"DM Design" , "Chinese-text" => "為探討進化論與創造論的全球創造科學論壇所設計的活動A4DM，讓人一目了然論壇的主要方向。" , "English-text" => "The DM designed for the Global Creation Science Forum on Evolution and Creation, provides a clear overview of the main directions of the forum."  ],
];  

// print_r($data[0]['id']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <style>
            *{
                box-sizing:border-box;
                margin:0px;
            }
            body{
                background:url('./background-1.png') ;

  
            }

            .card-body>p{
                font-size:20px;
            }

            .container{
                margin-top:100px;
            }

            .logo{
                width:20%;
                margin:auto;
                
            }

            
        </style>
</head>

<body>

<?php
 
 if(isset($_GET['page'])){
    $page=$_GET['page'];
    $i=$page-1;
}else{
    $page=1;
    $i= 1;
}

$lastPage=$page-1;
$nextPage=$page+1;


    if($page==1){
        $lastPage=1; 
    }else if ($page==5) {    
        $nextPage=1; 
    }
  

if(isset($_GET['language'])){
    $language=$_GET['language'];

}  else{
    $language='Chinese';
}


?>

<div class="container  mx-5 ">

      <!-- <div class="justify-content-between "> -->
<!--    
    <div class="rowBox  d-flex  justify-content-between  align-items-end text-center " > -->
    <div class="rowBox  d-flex  justify-content-between  align-items-center text-center " >
<!-- 上一頁連結 -->
        <a href="index.php?page=<?=$lastPage;?>&language=<?=$language?>" class="fas fa-angle-left fa-5x" style='color:gray'  role="button"></a>
        <div class="col-sm-12 d-inline-block">
<!-- 圖片 -->
                <img class="img-fluid mx-auto background-size:no-repeat shadow mt-3" src="<?= $data[$i]['src']?>" alt="作品集1" width="1000px" >
        </div>
       
<!-- 文字說明 -->
        <div class="d-play">
            <div class="card-body" style="width:600px">
<!-- 標題             -->
              <h2 class="card-title text-center  font-weight-bold p-3"><?= $data[$i]['id'] . " -" . $data[$i][$language.'-title']?></h2>
<!-- 內文               -->
              <p class="" style="width: 500px; size:40px "><?= $data[$i][$language .'-text']?></p>
            </div>
        </div>

<!-- 下一頁連結 -->
        <a href="index.php?page=<?=$nextPage;?>&language=<?=$language?>" class="fas fa-angle-right fa-5x" style='color:gray' role="button"></a> 
   
      </div>
    <!-- logo -->
    <img class="logo  float-right text-center m-5" src="./logo.png" alt="logo">
 

    </div>
    



    <div class="row ">
<!-- 中英切換鍵 -->
<div class="box mb-5">
    <button type="button" class="btn btn-secondary d-inline px-3 mt-4 text-white" style="margin-left:180px" ><a href="index.php?page=<?=$page;?>&language=English" style="color:white">English</a></button>
</div>

<div class="box">
    <button type="button" class="btn btn-secondary d-inline px-3 mt-4  text-white" style="margin-left:30px"><a href="index.php?page=<?=$page;?>&language=Chinese" style="color:white">中文</a></button>
</div>
   
       
    </div>


</div>



     

    <srcipt src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></srcipt>
    <srcipt src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></srcipt>
    <srcipt src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></srcipt>
</body>

</html>