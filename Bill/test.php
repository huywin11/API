<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link href="bill.css" rel="stylesheet">
<style>
/* .container
{
  max-width: 840px;
  margin: auto;
}
.note p {
    font-style: italic;
    font-size: 14;
    font-weight: 300;
    margin-bottom: 5px;
}
.row {
    display: flex;
    flex-wrap: wrap;
}
input#__BVID__12 {
    width: 529px;
    height: 35px;
    border: 2px solid #acacac;
    margin-right: 15px;
    border-radius: unset;
}
button#submit {
  height: 40px;
  width: 264px;
  border-color: ;
  background: #00904a;
  border-color: green;
  color: white;
  border: green;
}
.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
    border-collapse: collapse;
    margin-top: 10px;
    display: none;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
    border: 2px solid;
} */
</style>
</head>
<body>
  <p id="id01"></p>

  <div class="row">
     <form method="get" action="test.php">
      <div class="search">

          <input type="text" name="mdh" class="form-control" id="__BVID__12" value="">
      </div>
      <div >
          <!-- <button type="submit" class="submit">Tìm đơn</button> -->
          <button type="submit" id="submit" name="sb">Tìm đơn</button>
          <!-- <input type="submit" name="submit" value="Login"/> -->
            <!-- <input type="submit" name="btn" value="Tìm Tuổi"/> -->
      </div>
    </form>
    <?php
    $mdh = isset($_GET['mdh']) ? (int)$_GET['mdh'] : 0;
       echo $mdh;
 ?>
  </div>

<script>
// var button = document.getElementById("submit");
//            button.onclick = function(){
//
//              var link = "https://jsonplaceholder.typicode.com/posts";
//              // var link = "https://graph.facebook.com/facebook/picture?redirect=false";
//              fetch(link)
//                    document.getElementById('table').style.display = "inline-table";
//            }

var myArray = [
  {
    "display": .$mdh,
    
    "url": "https://i.ghtk.vn/"
  },
  {
    "display": "HTML Tutorial",
    "url": "https://www.w3schools.com/html/default.asp"
  },
  {
    "display": "CSS Tutorial",
    "url": "https://www.w3schools.com/css/default.asp"
  }
];

myFunction(myArray);

function myFunction(arr) {
  var out = "";
  var i;
  for(i = 0; i < arr.length; i++) {
    out += '<a href="' + arr[i].url + '">' +
    arr[i].display + '</a><br>';
  }
  document.getElementById("id01").innerHTML = out;
}


</script>
</body>
</html>
