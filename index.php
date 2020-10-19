<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    
    <h1>HOME</h1>
    <ul>
        <li><a href="./">Index</a></li>
        <li><a href="./shop.php">shop</a></li>
        <li><a href="./contact.php">contact</a></li>
        <li><a href="./disclaimer.php">disclaimer</a></li>
    </ul>

    <?php
        
        require __DIR__ . '/vendor/autoload.php';

        use GuzzleHttp\Client;

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://flamecitygrillz.ca',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        // Send a request to https://foo.com/api/test
        // $response = $client->request('GET', 'users');
        // print_r($response);

        // $res = $client->request('GET', '/users');  
        // echo $res->getStatusCode();
        // // 200
        // $body = $res->getBody();
        // echo $body;

        $res  = $client->get('api/wp-json/wp/v2/pages/36');
        echo $res->getBody();

        echo '<hr>';

        $response = $client->get('api/wp-json/wc/v3/products', [
            'auth' => [
                'ck_8f508793e00f6d3aeea1fa7150a9d29d42773997', 
                'cs_816cc626553a2ade27ee2263f28309eb428db9e2'
            ]
        ]);
        
        $bod = $response->getBody();
        echo $bod;
        echo '<hr>';

            
    
    ?>

</body>
</html>