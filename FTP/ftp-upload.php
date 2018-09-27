<?php
      $file_path = "./"; 

      if(isset($_GET['name'])){
        $file_name = $_GET['name'];
      }else{
        exit("papameter error");
      }
            
      ftp_upload($file_path,$file_name);

      function ftp_upload($file_path,$file_name){

        $ftp_host = "";
        $ftp_id = "";    
        $ftp_pw = "";  
        $ftp_port = "";           

        $server_path = "./Videos/"; 

        if(!($fc = ftp_connect($ftp_host, $ftp_port))) die("$ftp_host : $ftp_port - 연결에 실패");   

        if(!ftp_login($fc, $ftp_id, $ftp_pw)) die("$ftp_id - 로그인에 실패하였습니다.");   

        ftp_chdir($fc, $server_path);   

        $source_file = $file_path ."/" . $file_name;
        $destination_file = $file_name;


        if(!ftp_put($fc, $destination_file, $source_file, FTP_BINARY)) exit("디렉토리 이동 ");       
        echo "성공";
        ftp_quit($fc); 
      }

  ?>
