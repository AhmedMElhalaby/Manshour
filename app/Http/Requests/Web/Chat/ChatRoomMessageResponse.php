<?php

namespace App\Http\Requests\Web\Chat;

use App\Http\Resources\Web\AdvertisementResource;
use App\Http\Resources\Web\ChatMessageResource;
use App\Models\Advertisement;
use \App\Helpers\ResponseRequest as Response;
use App\Models\ChatMessage;
use App\Models\ChatRoom;
use App\Models\User;

class ChatRoomMessageResponse extends Response
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'chat_room_id'=>'required|exists:chat_rooms,id',
        ];
    }
    public function preset(){
        $logged = auth()->user()->id;
        $ChatRoom = (new ChatRoom())->find($this->chat_room_id);
        $Objects = new ChatMessage();
        $Objects = $Objects->where('chat_room_id',$ChatRoom->getId());
        $Objects = $Objects->orderBy('created_at','asc');
        $Objects = $Objects->get();
        return $this->successJsonResponse([],ChatMessageResource::collection($Objects),'ChatMessages');
    }
}
