<?php
//  $url= "http://lishi.zhuixue.net/images/ditu/001.jpg";
//  file_put_contents("001.jpg",$url);
for($a=1;$a<10;$a++){
for($i=0;$i<10;$i++){
    for($j=0;$j<10;$j++){
        for($k=0;$k<10;$k++){
            $v = $a.$i.$j.$k;
            // echo $v;
            $url = "http://lishi.zhuixue.net/images/ditu/".$v.".jpg";
            $state = @file_get_contents($url,0,null,0,1);//获取网络资源的字符内容
            if($state){
                $filename =$v.'.jpg';//文件名称生成
                ob_start();//打开输出
                readfile($url);//输出图片文件
                $img = ob_get_contents();//得到浏览器输出
                ob_end_clean();//清除输出并关闭
                $size = strlen($img);//得到图片大小
                $fp2 = @fopen($filename, "a");
                fwrite($fp2, $img);//向当前目录写入图片文件，并重新命名
                fclose($fp2);
            }
            else{
            }
        }
    }
}
}



 