<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link href="bill.css" rel="stylesheet">
<script src="bill.js"></script>
<script language="javascript" src="bill.js"></script>
</head>
<body>
  <div class="container" style="height: 637px;">
       <div class="note">
           <p>
             Mời quý khách nhập mã vận đơn để tra cứu (VD: 123456789)
           </p>
       </div>
       <div class="row">
           <div class="search">
               <input type="text" class="form-control" id="__BVID__12">
           </div>
           <div >
               <button type="submit" id="submit">Tìm đơn</button>
           </div>
      </div>

  <table id="table" class="table table-bordered">
    <thead>
          <tr>
              <th colspan="2">
                  Thông tin vận đơn S11612.2C.485841
              </th>
          </tr>
    </thead>
    <h1>
  <p id="huy2"><p>
  </h1>
<tbody>
    <tr>
        <td class="huy">
            Người nhận
        </td>
         <td>
            <span id="ha">Họ tên: T*********M</span>
            <br>
            <span>Số điện thoại: 90******8 </span> <br>
            <span>Địa chỉ: *****, Quận 1, TP Hồ Chí Minh</span>
         </td>
    </tr>
       <tr>
           <td>Người gửi</td>
           <td>
               <span id="id">Họ tên: TOP*********HCM</span><br>
               <span>Số điện thoại: 84******1035</span><br>
               <span>Địa chỉ: *****, Quận 10, TP Hồ Chí Minh</span>
           </td>
       </tr>
          <tr>
                <td>Thông tin đơn hàng</td>
                 <td>
                  <span>Tiền thu hộ: 19****** VNĐ</span><br>
                  <span>
                  Trả ship:
                  Người gửi
                  </span>
                  <br>
                   <span> Ghi chú: </span><br>
                   <span> ,  </span><br>
                  </td>
          </tr>
          <tr>
             <td>Trạng thái đơn hàng</td>
             <td>Đã đối soát <br></td>
          </tr>
  </tbody>
</table>
</div>
<script>
var button = document.getElementById("submit");
           button.onclick = function(){
             var link = "https://jsonplaceholder.typicode.com/posts";
             // var link = "https://graph.facebook.com/facebook/picture?redirect=false";
             fetch(link)
                   .then(function(response)
                   { return response.json();
                   })
                   .then(function(posts)
                   {
                     var htmls = posts.map(function(post)
                   {
                      return `<li>
                        <h1>${post.userId}</h1>
                      </li>`;
                   });
                   var html = htmls.join('');
                   document.getElementById('ha').innerHTML = html;
                     var ids = posts.map(function(post)
                   {
                      return `<li>
                      <h2>${post.id}</h2>
                      </li>`;
                   });
                   var id = ids.join('');
                   document.getElementById('id').innerHTML = id;
                     // console.log(html);
                   })
                   document.getElementById('table').style.display = "inline-table";
           }
</script>
</body>
</html>
