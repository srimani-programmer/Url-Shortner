<?php

    $url = $_POST['input'];
    $data = '';
    function get_tiny_url($url)  {  // To shorten the link
       $ch = curl_init();  
       $timeout = 5;  
       curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url); 
       curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
       curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
       $data = curl_exec($ch);  
       curl_close($ch);
       return $data;  
   }
   
   echo(get_tiny_url($url));
?>

<script>
    var str = document.getElementById('output').innerHTML;
          
    if (str.length<300) {

        document.getElementById('output').style.display='block';
    }
       
</script>
<?php

?>