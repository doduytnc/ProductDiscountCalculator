<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/productDiscount', function () {
    return view('productDiscount');
});

Route::post('/productDiscount', function (Illuminate\Http\Request $request) {
    $productDescription = $request->input('product_description');
    $listPrice = $request->input('list_price');
    $discountPercent = $request->input('discount_percent');
    $discount = $listPrice*$discountPercent*0.01; //tinh muc discount
    $discountPrice = $listPrice - $discount;     //tinh gia sau khi discount
    return view('show',compact('productDescription','listPrice','discountPercent','discount','discountPrice'));
});


Route::get('/dictionary' , function () {
    return view('dictionary.dictionary');
});

Route::post('/resultDict',function (Illuminate\Http\Request $request) {
    $dictionary = array(
        "hello"=>"xin chào",
        "how"=>"thế nào",
        "book"=>"quyển vở",
        "computer"=>"máy tính",
        "laptop"=>"Máy tính xách tay");
    $searchWord = $request->input('search');

    $flag = 0;
    foreach($dictionary as $word => $description) {
        if($word == $searchWord){
            $flag = 1;
            break;
        }
    }
  /*  if($flag == 0){
        $notice = "Không tìm thấy từ cần tra.";
        return $notice;
}*/
return view('showDict',compact('searchWord','description'));
});

