<?php
         $day="";
         $mon=" ";
         $name ="";
         $img="12.png";
         $result="";
    if (isset($_POST["day"]) && isset($_POST["month"])){ 
       $day = $_POST["day"]; 
      $mon = $_POST["month"];  
       
 
       if (is_numeric($day) && is_numeric($mon))
       {
           switch ($mon){
            case 1:
                    if($day<20){
                      $name ="Ma Kết"; 
                    $img="mk.png";
                    }
                    else {
                        $name="Bảo Bình";
                        $img ="bb.png";
                    }
                    break;
            case 2: 
                  if($day<19){
                      $name ="Bảo Bình";
                      $img = "bb.png";
                  } 
                   else 
                   {
                       $name="Song Ngư";
                       $img ="sn.png";
                   }
                   break;
            case 3: 
                if ($day<21) {
                    $name="Song Ngư";
                    $img ="sn.png";
                }else {
                    $name="Bạch Dương";
                    $img ="bd.png";
                }
                break;
            case 4: 
                if($day<21){
                    $name="Bạch Dương";
                    $img ="bd.png";
                }else{
                    $name="Kim Ngưu";
                    $img ="kn.png";
                } 
                break;
            case 5: 
                if($day<21){
                    $name="Kim Ngưu";
                    $img ="kn.png";
                }else{  $name="Song Tử";
                    $img ="stpng";}
                break;
            case 6: 
                if($day<22){
                    $name="Song Tử";
                    $img ="st.png";
                }else{
                    $name="Cự Giải";
                    $img ="cg.png";
                }
                break;
            case 7: 
                if($day<23){
                    $name="Cự Giải";
                    $img ="cg.png";
                }
                else {
                    $name="Sư Tử";
                    $img ="stu.png";
                }
                break;
            case 8: 
                if($day<23){
                    $name="Sư Tử";
                    $img ="stu.png";
                }else{
                    $name="Xữ Nữ";
                    $img ="xn.png";
                }
                break;
            case 9: 
                if($day<23){
                    $name="Xữ Nữ";
                    $img ="xn.png";
                }else{
                    $name="Thiên Bình";
                    $img ="tb.png";
                }break;
            case 10: 
                if ($day<24)
                {
                    $name="Thiên Bình";
                    $img ="tb.png";
                }else {
                    $name="Bò Cạp";
                    $img ="hc.png";
                }
                break;
            case 11: 
                if($day<23){
                    $name="Bò Cạp";
                    $img ="hc.png";
                }else{
                    $name="Nhân Mã";
                    $img ="nm.png";
                }
                break;
            case 12: 
                if($day<22){
                    $name="Nhân Mã";
                    $img ="nm.png";
                } else{
             
            $name ="Ma Kết"; 
            $img="mk.png";;
            
                } break;
                 
                }      
        }
    }

    
 ?>
    <!DOCTYPE html>
    <html lang="vn">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Chòm sao</title>
    </head>

    <body>

        <div class="app">
            <h1 class="title">Cung Hoàng Đạo</h1>
            <p class="sub-title">Hãy chọn ngày tháng sinh của bạn trong 2 ô dưới đây. Bạn sẽ biết mình có cung hoàng đạo là gì.</p>
            <form class="content-input" action="key.php" method="POST">
                <div class="content-option">
                    <select name="day" id="" class="input-select">
                <option value="1">Ngày 1</option>
                <option value="2">Ngày 2</option>
                <option value="3">Ngày 3</option>
                <option value="4">Ngày 4</option>
                <option value="5">Ngày 5</option>
                <option value="6">Ngày 6</option>
                <option value="7">Ngày 7</option>
                <option value="8">Ngày 8</option>
                <option value="9">Ngày 9</option>
                <option value="10">Ngày 10</option>
                <option value="11">Ngày 11</option>
                <option value="12">Ngày 12</option>
                <option value="13">Ngày 13</option>
                <option value="14">Ngày 14</option>
                <option value="15">Ngày 15</option>
                <option value="16">Ngày 16</option>
                <option value="17">Ngày 17</option>
                <option value="18">Ngày 18</option>
                <option value="19">Ngày 19</option>
                <option value="20">Ngày 20</option>
                <option value="21">Ngày 21</option>
                <option value="22">Ngày 22</option>
                <option value="23">Ngày 23</option>
                <option value="24">Ngày 24</option>
                <option value="25">Ngày 25</option>
                <option value="26">Ngày 26</option>
                <option value="27">Ngày 27</option>
                <option value="28">Ngày 28</option>
                <option value="29">Ngày 29</option>
                <option value="30">Ngày 30</option>
                <option value="31">Ngày 31</option>

                </select>

                <select name="month" id="" class="input-select">
                <option value="1">Tháng 1</option> 
                <option value="2">Tháng 2</option>
                <option value="3">Tháng 3</option>
                <option value="4">Tháng 4</option>
                <option value="5">Tháng 5</option>
                <option value="6">Tháng 6</option>
                <option value="7">Tháng 7</option>
                <option value="8">Tháng 8</option>
                <option value="9">Tháng 9</option>
                <option value="10">Tháng 10</option>
                <option value="11">Tháng 11</option>
                <option value="12">Tháng 12</option>
                </select>
                </div>
                <div class="input-btn">
                    <input type="submit" value="Gửi Đi" class="input-submit">
                </div>
               
               <?php
                            $result = '<div class="solve">
                             <img src="img/'. $img .'" />
                              <p> ' . $name . ' </p>
                             </div> ';
                          echo $result;
                ?>

            </form>

        </div>
    </body>

    </html>