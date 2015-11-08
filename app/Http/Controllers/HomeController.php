<?php namespace WeeklyLog\Http\Controllers;



use Illuminate\Support\Facades\View;

class HomeController extends Controller {

    public function overview() {


        return View::make('home.overview');
    }

}