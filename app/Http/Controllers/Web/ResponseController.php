<?php

namespace App\Http\Controllers\Web;


use App\Http\Requests\Web\Response\CategoryRequest;
use Illuminate\Http\JsonResponse;

class ResponseController extends Controller
{
    /**
     * @param CategoryRequest $request
     * @return JsonResponse
     */
    public function categories(CategoryRequest $request){
        return $request->preset();
    }
}
