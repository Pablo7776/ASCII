<html> 

  <head> 

    <title>
      Ascii
    </title> 


    <style> 

      body
      {
    
      line-height:10px; 
    
      font-size:10px; 
    
    }
    
    </style>
  
  </head>



  <body> 

    <?php   

      function getext($filename) 
      {
        
        $pos = strrpos($filename,'.');   
    
        $str = substr($filename, $pos);   
  
        return $str;   

      }
      
      
      $image = 'tux.jpg';  

      $ext = getext($image);   

      if($ext == ".jpg")
      {   
    
        $img = ImageCreateFromJpeg($image);   

      }   
      else
      {   
    
        echo'Wrong File Type';   
      
      }
      
      
      $width = imagesx($img);   

      $height = imagesy($img);   

      $escala = 16; // puede ser 1, o 2 o 4, 8 , 16 ... etc



      for($h=0;$h<$height;$h+= $escala)
      {
        
        for($w=0;$w<=$width;$w+= $escala)
        {
          
          $rgb = ImageColorAt($img, $w, $h);   
        
          $r = ($rgb >> 16) & 0xFF;   
        
          $g = ($rgb >> 8) & 0xFF;   
        
          $b = $rgb & 0xFF;   
        
          if($w == $width)
          {
            
            echo '<br>';   
          
          }
          else
          { 
            
           echo '<span style="color:rgb('.$r.','.$g.','.$b.');">#</span>';  
          
          }
          
    }
    
      }


    ?>
  
  
  </body>
  
</html>