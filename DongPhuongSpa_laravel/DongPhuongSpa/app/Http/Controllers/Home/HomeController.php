<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function Index(){
        return view('home.index',[
            'activity'=>1
        ]);
    }
    public function AboutUs(){
        return view('home.about_us',[
            'activity'=>2
        ]);
    }
    public function Product(){
        return view('home.product',[
            'activity'=>3
        ]);
    }
    public function News(){
        return view('home.news',[
            'activity'=>4
        ]);
    }
    public function Contact(){
        return view('home.contact',[
            'activity'=>5
        ]);
    }
    public function QA(){
        return view('home.qa',[
            'activity'=>6
        ]);
    }
    public function Promotion(){
        return view('home.promotion',[
            'activity'=>7
        ]);
    }
    public function ListPrice(){
        return view('home.list_price',[
            'activity'=>8
        ]);
    }
    public function ProductDetail(){
        return view('home.product_detail',[
            'activity'=>3
        ]);
    }
    public function NewsDetail(){
        return view('home.news_detail',[
            'activity'=>4
        ]);
    }
    public function PromotionDetail(){
        return view('home.promotion_detail',[
            'activity'=>7
        ]);
    }
    public function ServiceDetail(){
        return view('home.service_detail',[
            'activity'=>9
        ]);
    }
}
