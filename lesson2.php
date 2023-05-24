
<?php
    
    // Đếm số kí tự trong chuỗi dùng hàm strlen
    function countCharacter($text){
      echo "Câu 1: " .(strlen($text));
    }
        //commant
        countCharacter("Xin chao cac ban");
        echo("</br>");
    
    // Đếm số kí tự trong chuỗi dùng hàm strlen
    function countLetter($text){
      echo "Câu 2:" .(str_word_count($text));
    }
        //commant
        countLetter("Xin chao cac ban");
        echo("</br>");

    //Đảo ngược chuỗi
    function reverseString($text){
      echo "Câu 3:" .(strrev($text));
    }
        //commant
        reverseString("Xin chao cac ban");
        echo("</br>");

    //Tìm kiếm chuỗi con strpos( $str, $char, $position);
    function searchString($str, $char, $position){
      echo "Câu 4:" .(strpos($str, $char, $position));
    }
        //commant
        searchString("Xin chao cac ban", "ban", 0 );
        echo("</br>");

    //
    function replaceString($strre, $strnew, $obj){
      echo "Câu 5:" .(str_replace($strre, $strnew, $obj));
    }
        //commant
        replaceString("Xin chào", "Hello", "Xin chào các bạn");
        echo("</br>");

    // strncmp(string $string1, string $string2, int $length)
    function checktstr($str1, $strn2, $length){
      echo "Câu 6:" .(strncmp($str1, $strn2, $length));
    }
        //commant
        checktstr("Xin chào các bạn", "Xin chào", 30);
        echo("</br>");
    
    // strtoupper
    function upper($text){
      echo "Câu 7:" .(strtoupper($text));
    }
        //commant
        upper("hello");
        echo("</br>");

    // strtoupper
    function lower($text){
      echo "Câu 8:" .(strtolower($text));
    }
        //commant
        lower("HELLO");
        echo("</br>");

    // ucwords
    function str_ucwords($text){
      echo "Câu 9:" .(ucwords($text));
    }
        //commant
        str_ucwords("hello friends");
        echo("</br>");

    // trim()
    function str_trim($text){
      echo "Câu 10:" .(trim($text));
    }
        //commant
        str_trim(" -hello- ");
        echo("</br>");

    // ltrim()
    function str_ltrim($text){
      print_r ("Câu 11:" .(ltrim($text, "$text[0]")));
    }
        //commant
        str_ltrim("mhi helloo");
        echo("</br>");

    // rtrim()
    // function str_rtrim($text){
    //   $leng = strlen($text);
    //   print_r (rtrim($text, "$text[$leng]"));
    // }
    //     //commant
    //     str_rtrim("hhi helloo");
    //     echo("</br>");

    // explode()
    // function str_explode($text, $char){
    //   print_r(explode($text, $char););
    // }
    //     //commant
    //     str_explode( " ","hi hello fre");
    //     echo("</br>");

    // implode()
    function str_implode($char, $array){
      print_r("Câu 14: " .implode($char, $array));
    }
        //commant
        $array = array('array1', 'array2');
        str_implode( " ",$array);
        echo("</br>");

    // str_pad()
    function str_padd($str, $len, $str_ad, $pad_ty){
      print_r("Câu 15: " .str_pad($str, $len, $str_ad, $pad_ty));
    }
        //commant
        str_padd( "Xin chào ","95","-chữ được chèn vào đầu cuối-",STR_PAD_BOTH);
        echo("</br>");

    // strrchr()
    function str_strrchr($str, $char){
      $str_strrchr = strrchr($str, $char);
      if($str_strrchr = false){
        echo ("Câu 16: False");
      }else{
        echo ("Câu 16: True");
      }
    }
        //commant
        str_strrchr( "Xin chào các bạn","các bạn");
        echo("</br>");

    // //hàm strstr()
    function str_strstr($str, $search){
      $check = strstr($str, $search);
      if ( $check= NULL){
        echo("Câu 17 : Không tìm thấy");
      }else{
        echo("Câu 17 : Chuỗi nằm trong chuỗi được chỉ định");
      }
    }
          //commant
          str_strstr("Xin chào các bạn", "bạn");
          echo("</br>");

    //Hàm preg_replace()
    function str_preg_replace($pattern, $replace, $str){
      echo("Câu 18: " . preg_replace($pattern, $replace, $str));
    }

          //commant
          str_preg_replace("/Xinchao/", "Hello", "Xinchao cac ban");
          echo("<br/>");

    //Hàm is_int
    function checknumber($number){
      if(is_int($number)){
        echo ("Câu 19 : Đúng");
      }else{
        echo ("Câu 19: Sai");
      }
    }

          //commant
          checknumber(18);
          echo("<br/>");

    //filter_var check email hop le
    function checkemail($email){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo ("Câu 20: Email hợp lệ");
      }else{
        echo ("Email không hợp lệ");
      }
    }

          //commant
          checkemail("nguyenhungduyy@gmail.com");


?>

