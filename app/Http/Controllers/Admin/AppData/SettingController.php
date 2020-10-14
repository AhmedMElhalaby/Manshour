<?php

namespace App\Http\Controllers\Admin\AppData;

use App\Http\Controllers\Admin\Controller;
use App\Models\Setting;
use App\Traits\AhmedPanelTrait;

class SettingController extends Controller
{
    use AhmedPanelTrait;

    public function setup()
    {
        $this->setRedirect('admin/app_data/settings');
        $this->setEntity(new Setting());
        $this->setTable('settings');
        $this->setLang('Setting');
        $this->setCreate(false);
        $this->setExport(false);
        $this->setColumns([
            'name'=> [
                'name'=>'name',
                'type'=>'text',
                'is_searchable'=>true,
                'order'=>true
            ],
        ]);
        $this->setFields([
            'name'=> [
                'name'=>'name',
                'type'=>'text',
                'is_required'=>true
            ],
            'name_ar'=> [
                'name'=>'name_ar',
                'type'=>'text',
                'is_required'=>true
            ],
            'value'=> [
                'name'=>'value',
                'type'=>'textarea',
                'is_required'=>true
            ],
            'value_ar'=> [
                'name'=>'value_ar',
                'type'=>'textarea',
                'is_required'=>true
            ],
        ]);
        $this->SetLinks([
            'edit',
        ]);
    }

}
