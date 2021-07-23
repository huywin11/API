
  <?php
  $curl = curl_init('https://services.giaohangtietkiem.vn/services/shops/token');

  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_HTTPHEADER => array(
          "Token: 0dd8B943239C30664e2de0199645c6dfE98c0967",
      ),
      //token có được khi đăng kí tài khoản của ghtk
  ));

  $response = curl_exec($curl);
  curl_close($curl);

  echo 'Response: ' . $response;
  ?>
