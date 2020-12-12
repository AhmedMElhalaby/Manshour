<?php

namespace App\Http\Controllers\Web;


use App\Http\Requests\Web\Home\ContactRequest;
use App\Http\Requests\Web\Home\IndexRequest;
use App\Http\Requests\Web\Profile\UpdateRequest;
use App\Models\Advertisement;
use App\Models\Favourite;
use App\Models\Setting;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;

class ChatController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(){
        return view('Web.Chat.chat');
    }
}
