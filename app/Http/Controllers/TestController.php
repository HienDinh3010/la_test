<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TestController extends Controller
{
    public function carbon(){
        echo Carbon::now() , "<br>"; // 2019-08-18 00:03:48
        echo Carbon::now('Asia/Ho_Chi_Minh'), "<br>"; // 2019-08-18 21:15:43
        echo Carbon::yesterday() ,"<br>"; //thời gian hôm qua 2019-08-17 00:00:00
        echo Carbon::tomorrow() ,"<br>" ; // thời gian ngày mai 2019-08-19 00:00:00     

        //Để biết thêm về các nước khác bạn có thể tại trang chủ của PHP: Timezone  Có thể chuyển đổi kiểu datetime khác:
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        echo $dt->toDayDateTimeString(),"<br>";  //Sun, Aug 18, 2019 7:10 AM
        echo $dt->toFormattedDateString(),"<br>"; // Aug 18, 2019
        echo $dt->format('d/m/Y'),"<br>";///18/08/2019
        echo $dt->toDateString(),"<br>";// 2019-08-18
        echo $dt->toTimeString(),"<br>"; // 07:10:07
        echo $dt->toDateTimeString(),"<br>"; // 2019-08-18 07:10:07
  }

    public function xem(){
        return \View::make('xem');
    }
    
    public function tuongthuat(){
        return \View::make('tuongthuat');
    }  
}
