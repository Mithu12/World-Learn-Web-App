<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordsController extends Controller
{
    function getPage()
    {
        return view('test');
       $client = new \GuzzleHttp\Client();
       $response = $client->request('GET',
           'https://mashape-community-urban-dictionary.p.rapidapi.com/define?term=kill',
           ['header'=>[
                   "x-rapidapi-host"=>" mashape-community-urban-dictionary.p.rapidapi.com",
                   "x-rapidapi-key"=>" b2dc737d95mshdf87108019deeeep17ddd6jsn5983833987bd"
               ]
           ]
           );

         $response->getStatusCode(); // 200
         $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
        $page = $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
        // echo strrpos($page,'</body>');
        echo $len = strlen($page);
        echo $page;
      // $cls=".nobold";
      // echo "<script>
      // $(document).ready(function(){
      //     alert($($cls).text());
      //     });
      // </script>";

      // echo '<br>asdasd';
      // echo '<br>';
      // echo '<br>';
      // echo '<br>asdasd';
      // print_r(json_decode($response->getBody()));

      // Send an asynchronous request.
      // $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
      // $promise = $client->sendAsync($request)->then(function ($response) {
      //   echo 'I completed! ' . $response->getBody();
      // });
      //
      // $promise->wait();

      // $t=45;
      // echo $t<"10"?'jhhjh':'oiuio';
      // $a=['j','o','o'];
      // echo count($a);


      // $json = file_get_contents("json/BengaliDictionary.json");
//       echo $json = file_get_contents("json/New.json");
      // echo $data[0];
      // echo $data[1];
      // echo $data[2];
      // echo $data[3];
      // echo $data = "[{'name':'mithu','roll':78},{'name':'moti','roll':23}]";
      // $bom = pack('H*','EFBBBF');
      // $data= utf8_encode($data);
      // $data= preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $data);
      // echo $data = json_decode($data,true);
      // echo json_last_error();
      // print_r($data);
      // $data = array_filter($data);
      // foreach ($data as $d) {
      //   echo $d->bn.'<br>';
      // }
//       $jsona = '[{"a":1,"b":2,"c":3,"d":4,"e":5},{"a":1,"b":2,"c":3,"d":4,"e":5}]';
//
//var_dump(json_decode($json));
// var_dump(json_decode($json, true));
    }

    function getMeaning($word)
    {
        echo 'yoyo';
    }
}
