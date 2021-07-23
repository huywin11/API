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
