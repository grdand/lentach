<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\User as User;
use Illuminate\Support\Facades\Cookie;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if((int)(request()->get('viewer_type'))>1) {
        //     return (new Admin\NewsController())->index();
        // } else {
        // return (new User\NewsController())->create();
        // }
        return redirect()->route('user_news')
            ->cookie(
                'vk-api',
                serialize(request()->all())
                , 3600
            );


    }
}
