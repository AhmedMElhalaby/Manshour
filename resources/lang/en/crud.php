<?php

use App\Helpers\Constant;

return [

    'Admin'=>[
        'crud_names' => 'Admins',
        'crud_name' => 'Admin',
        'crud_the_name' => 'The Admin',
        'name' => 'Name',
        'email' => 'E-Mail',
        'is_active' => 'Status',
        'avatar' => 'Avatar',
    ],
    'User'=>[
        'crud_names' => 'Users',
        'crud_name' => 'User',
        'crud_the_name' => 'The User',
        'name' => 'Name',
        'email' => 'E-Mail',
        'mobile' => 'Mobile',
        'avatar' => 'Avatar',
        'type' => 'Type',
        'bio' => 'Bio',
        'balance' => 'Balance',
        'favorite_car' => 'Favorite Car',
        'app_locale' => 'App Locale',
        'is_active' => 'Status',
        'created_at' => 'Created At',
    ],
    'Setting'=>[
        'crud_names' => 'Settings',
        'crud_name' => 'Setting',
        'crud_the_name' => 'The Setting',
        'key' => 'Key',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
        'value' => 'Value',
        'value_ar' => 'Value Ar',
        'Pages'=>[
            'About'=>'About Us',
            'Commission'=>'Website Commission',
            'Faq'=>'FAQ',
            'Contact'=>'Contact Us',
        ]
    ],
    'Faq'=>[
        'crud_names' => 'FAQ',
        'crud_name' => 'Faq',
        'crud_the_name' => 'The Faq',
        'question' => 'Question',
        'question_ar' => 'Question Ar',
        'answer' => 'Answer',
        'answer_ar' => 'Answer Ar',
        'is_active' => 'Status',
    ],
    'City'=>[
        'crud_names' => 'Cities',
        'crud_name' => 'City',
        'crud_the_name' => 'The City',
        'name' => 'Name',
        'name_ar' => 'Name Ar',
        'is_active' => 'Status',
    ],
    'Category'=>[
        'crud_names' => 'Categories',
        'crud_name' => 'Category',
        'crud_the_name' => 'The Category',
        'name' => ' Name',
        'name_ar' => 'Name Ar',
        'parent_id' => 'Main Category',
        'is_active' => 'Status',
    ],
    'Ticket'=>[
        'crud_names' => 'Tickets',
        'crud_name' => 'Ticket',
        'crud_the_name' => 'The Ticket',
        'id' => '#',
        'name' => 'Name',
        'email' => 'Email',
        'mobile' => 'Mobile',
        'type' => 'Purpose',
        'message' => 'Message',
        'status' => 'Status',
        'Links' => [
            'close'=>'Close'
        ],
        'Types'=>[
            ''.\App\Helpers\Constant::TICKETS_TYPE['Complain']=>'Complain',
            ''.\App\Helpers\Constant::TICKETS_TYPE['Suggestion']=>'Suggestion',
            ''.\App\Helpers\Constant::TICKETS_TYPE['Enquiry']=>'Enquiry',
            ''.\App\Helpers\Constant::TICKETS_TYPE['Others']=>'Others',
        ],
        'Statuses'=>[
            ''.\App\Helpers\Constant::TICKETS_STATUS['Open']=>'Opened',
            ''.\App\Helpers\Constant::TICKETS_STATUS['Closed']=>'Closed',
        ],
    ],
    'Permission'=>[
        'crud_names' => 'Permissions',
        'crud_name' => 'Permission',
        'crud_the_name' => 'The Permission',
        'id' => '#',
        'name' => 'Name',
    ],
    'Role'=>[
        'crud_names' => 'Roles',
        'crud_name' => 'Role',
        'crud_the_name' => 'The Role',
        'id' => '#',
        'name' => 'Name',
        'permissions' => 'Permissions',
    ],
    'Banner'=>[
        'crud_names' => 'Banners',
        'crud_name' => 'Banner',
        'crud_the_name' => 'The Banner',
        'name' => 'Name',
        'image' => 'Image',
        'url' => 'Url',
        'is_active' => 'Status',
    ],
    'BankAccount'=>[
        'crud_names' => 'Bank Accounts',
        'crud_name' => 'Bank Account',
        'crud_the_name' => 'The Bank Account',
        'bank_name' => 'Bank Name',
        'account_name' => 'Account Name',
        'account_number' => 'Account Number',
        'account_iban' => 'Account Iban',
    ],
    'Advertisement'=>[
        'crud_names' => 'Advertisements',
        'crud_name' => 'Advertisement',
        'crud_the_name' => 'The Advertisement',
        'user_id' => 'User',
        'category_id' => 'Category',
        'city_id' => 'City',
        'title' => 'Title',
        'content' => 'Content',
        'contact' => 'Contact',
        'hide_contact' => 'Hide Contact',
        'price' => 'Price',
        'sell_price' => 'Sell Price',
        'sell_type' => 'Sell Type',
        'delete_reason' => 'Delete Reason',
        'is_active' => 'Status',
        'SellType' => [
            Constant::ADVERTISEMENT_SELL_TYPE['InsideWebsite']=>'Inside Website',
            Constant::ADVERTISEMENT_SELL_TYPE['OutsideWebsite']=>'Outside Website',
            Constant::ADVERTISEMENT_SELL_TYPE['NeverSell']=>'Never Sell',
        ],
    ],
];
