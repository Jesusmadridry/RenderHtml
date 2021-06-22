<?php 
    // function getContent() {
    //     // $url = 'localhost:8000/testingdashboard/';
    //     $url = 'www.desarrollolibre.net/blog/php/accediendo-al-dom-html-con-php';
    //     if (stripos($url, 'http') !== 0) {
    //         $url = 'http://' . $url;
    //     }
    //     $content = new DOMDocument('1.0', 'utf-8');
    //     $content->preserveWhiteSpace = FALSE;
    
    //     echo "echo";
    //     @$content->loadHTMLFile($url);
    //     return $content->getElementsByTagName('h1');
    // }
    function getAttribute($url ,$attr) {
        $result = array();
       
        $content = new DOMDocument('1.0', 'utf-8');
        $content->preserveWhiteSpace = FALSE;
        
        @$content->loadHTMLFile($url);
        $elements = $content
                ->getElementsByTagName('*');
        
        foreach ($elements as $node) {
            if ($node->hasAttribute($attr)) {
                $value = $node->getAttribute($attr);
                $result[] = trim($value);
            }
        }
        print_r($result);
    }
    
?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <h1 class="title-dashboard">Dashboard panel</h1>
  <div class="container-dashboard">
    <!-- <div class="subcontainer-dashboard-1 item">
      <div>
          <p>
            Insert the rows and columns:
          </p>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Columns</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Rows</label>
      </div>
    </div>
    <div class="item">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Options
      </button>
    </div> -->
    <div id="smallContainer" class="container-small">
      <!-- <div class="items">
        2
      </div>
      <div class="items">
        3
      </div>
      <div class="items">
        4
      </div>
      <div class="items">
        5
      </div> -->
      <!-- <div class="items">
        6
      </div>
      <div class="items">
        7
      </div>
      <div class="items">
        8
      </div>
      <div class="items">
        9 
      </div> -->
    </div> 
    <div id="bigContainer" class="container-big">
      <!-- <div class="items-big">
        0
      </div>
      <div class="items-big">
        1
      </div>
      <div class="items-big">
        2
      </div>
      <div class="items-big">
        3
      </div> -->
    </div>
  </div>
  <? getAttribute("http://localhost:8000/testingdashboard/index.php","class"); ?>
</body>

</html>

<style>
  .item {
    margin-top: 10px !important;
    margin-right: 10px !important;
  }
  .items {
    background-color: #fff;
    border-radius: 2px;
    border: 2px solid #eee;
    flex: 0 0 20%;
    height: 150px;
    margin-right: 20px;
    min-width: 270px;
  }
  .items-big{
    background-color: #fff;
    border-radius: 2px;
    border: 2px solid #eee;
    flex: 0 0 25%;
    min-height: 450px;
    margin-right: 20px;
    min-width: 560px; /*540px -> widht 2 cuadros + 60px  para complementar el espacio de margenes*/
  }
  .title-dashboard {
    text-align: center;
  }
  .container-dashboard { 
    align-items: flex-start;
    background-color: #eee;
    border-radius: 5px;
    border: 1px solid black;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    min-height: 500px;
    margin: 10px;
    max-width: 1100x;
    padding:  5px;
  }
  .container-small {
    align-items: flex-start;
    background-color: #eee;
    border: 1px solid black;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    min-height: 170px;
    margin: 10px;
    max-width: 1460px;
    padding: 5px;
  }
  .container-big {
    align-items: center;
    background-color: #eee;
    border: 1px solid black;
    border-radius: 5px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    min-height: 500px;
    margin: 10px;
    min-width: 770px;
    padding:  5px;
  }

 /* subcontainer-dashboard-1 {
    background-color: #fff;
    border-radius: 1px;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: flex-start;
    max-width: 1000px;
    padding: 10px;
  } */

</style>