

  <?php
  // php 디버깅시 필요, php 에러가 발생하면 브라우져에 보여집니다. default 설정값은 안보임입니다
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  
  $fileContents=file_get_contents("https://news.google.com/rss/search?q=".urlencode($_GET["ygy"])."&hl=ko&gl=KR&ceid=KR:ko");
  //  $fileContents= file_get_contents("https://news.google.com/rss/search?q=".$_GET["search"]."&hl=ko&gl=KR&ceid=KR:ko");
  $simpleXml = simplexml_load_string($fileContents); 
  $json = json_encode($simpleXml);
  echo $json;
?>