<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Category;
use App\SysStatic;
use App\Brand;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $role = Role::create([
            'name'=>'Admin'
        ]);
        $role = Role::create([
            'name'=>'Editor'
        ]);

        $user = \App\User::create([
            'name'=>'Admin',
            'role_id'=>'1',
            'isActive'=>'1',
            'email'=>'admin@weone.com',
            'password'=>bcrypt('123123')
        ]);
        $user = \App\User::create([
            'name'=>'Admin',
            'role_id'=>'1',
            'isActive'=>'1',
            'email'=>'soklimkheng@weone.com',
            'password'=>bcrypt('123123')
        ]);

        $category = Category::create([
           'category_name'=>'Cream',
        ]);
        $category = Category::create([
            'category_name'=>'Toner'
        ]);
        $category = Category::create([
            'category_name'=>'Serum'
        ]);
        $category = Category::create([
            'category_name'=>'Cleanser'
        ]);
        $category = Category::create([
            'category_name'=>'Sun care'
        ]);
        $category = Category::create([
            'category_name'=>'Mask'
        ]);
        $category = Category::create([
            'category_name'=>'Lotion'
        ]);
        $category = Category::create([
            'category_name'=>'Accessories'
        ]);
        $category = Category::create([
            'category_name'=>'Other'
        ]);



        $brands = Brand::create([
            'brand_name'=>'INNISFREE',
        ]);
        $brands = Brand::create([
            'brand_name'=>'LANEIGE'
        ]);
        $brands = Brand::create([
            'brand_name'=>'IOPE'
        ]);
        $brands = Brand::create([
            'brand_name'=>'ETUDE HOUSE'
        ]);
        $brands = Brand::create([
            'brand_name'=>'OTHER'
        ]);


        $sys_static =SysStatic::create([
            'static_name'=>'ទំនាក់ទំនង',
            'static_value_first'=>'Roushun Cambodia',
            'static_value_second'=>'អាសយដ្ឋាន៖ សង្កាត់ គីឡូម៉ែត្រលេខ៦ ខណ្ឌ ឬស្សីកែវ រាជធានីភ្នំពេញ',
            'static_value_third'=>'លេខទូរស័ព្ទ: 010 463 463​ / 016 475 799',

        ]);
        $sys_static =SysStatic::create([
            'static_name'=>'Footer Right',
            'static_value_first'=>'CONTACT US',
            'static_value_second'=>'#74, St.93, Sangkat Tonle Bassac, Khan Chamkar morn, Phnom Penh',
            'static_value_third'=>'Phone: 010 463 463​ / 016 475 799',
        ]);

        $pro=\App\Product::create([
            'pro_name'=>'Jeju volcanic pore clay mask 2X 100ml',
            'user_id'=>1,
            'desc'=>'រូបមន្តចិញ្ចឹមស្បែកក្បាលនិងធ្វើឲ្យសក់របស់អ្នកស្រស់ស្អាតដែលធ្វើឲ្យវា ស្រស់ស្អាតពីគល់សក់រហូតដល់ចុងសក់ជាមួយនិងសារជាតិចម្រាញ់Keratin និងប្រេងអូលីវរូបមន្ដដែលមានគុណភាពអាចជួសជុលស្បែកក្បាលនៅផ្ទៃសក់ និងផ្ដល់ឲ្យអ្នកនូវសក់ដែលអាចគ្រប់គ្រងបាន និងមានសំណើមដល់ស្បែក និងសក់ក្បាល។',
            'category_id'=>1,
            'pro_code'=>'001',
            'prices'=>18,
            'isPop'=>1,
            'photo_id'=>'1',
            'brand_id'=>1,
            'video'=>''
        ]);
        $photos = \App\Photo::create([
            'file' => 'products/1.jpg'
        ]);
        $pro=\App\Product::create([
            'pro_name'=>'New green tea seed serum 80ml',
            'user_id'=>1,
            'desc'=>'បច្ចេកវិទ្យាធ្វើឲ្យសក់រស់រវើកឡើងវិញ។ បច្ចេកទេសរក្សាពណ៌សក់ស្រស់ស្អាត រហូតដល់៨សប្ដាហ៏។ មានរូបមន្ដរួមបញ្ចូលជាមួយ តែបៃតង ផ្កាឈូករ័ត្ន។ ការម៉ាស្សាសក់ក្បាលថ្នមៗដើម្បីជួយបំពេញសំណើមសំខាន់ដល់សក់ និងរក្សាសក់ឲ្យមានសុខភាពល្អ។ ពណ៌សក់របស់លោកអ្នកនឹងមានភាពរស់រវើក និងយូរអង្វែង ខណៈដែលគ្រប់សក់ទាំងអស់ទន់ និងអាចគ្រប់គ្រងបាន។',
            'category_id'=>1,
            'pro_code'=>'002',
            'prices'=>25,
            'isPop'=>1,
            'photo_id'=>'2',
            'brand_id'=>1,
            'video'=>''
        ]);
        $photos = \App\Photo::create([
            'file' => 'products/2.jpg'
        ]);
        $pro=\App\Product::create([
            'pro_name'=>'Whitening pore set',
            'desc'=>'តើអ្នកចង់បានសក់ដែលភ្លឺរលោងត្រង់ និងងាយស្រួលក្នុងការធ្វើម៉ូតសក់ដែរទេ? ប្រើប្រាស់សាប៊ូកក់សក់ដែលបានបង្កើតជាពិសេសដើម្បីឲ្យសក់របស់អ្នកភ្លឺរលោង ស្រស់ស្អាត និងអាចគ្រប់គ្រងបាន។ ផលិតផលសាប៊ូកក់សក់ ROUSHUN KERATINធ្វើឲ្យភ្លឺរលោងជាមួយនិងបច្ចេកវិទ្យាផ្លាស់ប្ដូរសក់របស់អ្នកធ្វើឲ្យវាកាន់ តែរលោងស្រស់ស្អាតជាមួយភាពត្រជាក់ និងងាយស្រួលក្នុងការធ្វើម៉ូតសក់។',
            'user_id'=>1,
            'category_id'=>1,
            'pro_code'=>'003',
            'prices'=>8,
            'isPop'=>1,
            'photo_id'=>'3',
            'brand_id'=>1,
            'video'=>''
        ]);
        $photos = \App\Photo::create([
            'file' => 'products/3.jpg'
        ]);
        $pro=\App\Product::create([
            'pro_name'=>'Eyes & Lip make up remover 100ml',
            'user_id'=>1,
            'desc'=>'ផ្សំចេញពីសារធាតុទឹកឃ្មុំធម្មជាតិ។នៅពេលដែលយើងធ្វើការលាងសម្អាត វានឹងធ្វើឲសក់មានសំណើមយ៉ាងឆាប់រហ័ស រួមទាំងបច្ចេកវិទ្យាបង្កាអង្គែស្បែកក្បាល់ និងប្រឆាំងការជ្រុះសក់។ ផ្ដល់នូវអាហាររូបត្ថម្ភជាច្រើនដល់ស្បែកក្បាល និងសក់ ដូចជាពពួកប្រូតេអ៊ីន និងវិតាមីនជាដើម។ វានឹងផ្ដល់មកវិញនូវសុខភាពដ៍ល្អ មិនមាន អង្គែ ដល់ស្បែកក្បាលដែលនាំនូវអារម្មណ៍រីករាយ និងស្រស់ស្រាយដល់អ្នក។',
            'category_id'=>2,
            'pro_code'=>'004',
            'prices'=>10,
            'isPop'=>1,
            'photo_id'=>'4',
            'brand_id'=>1,
            'video'=>''
        ]);
        $photos = \App\Photo::create([
            'file' => 'products/4.jpg'
        ]);

        $user = \App\User::create([
            'name'=>'Soriya',
            'role_id'=>'2',
            'isActive'=>'1',
            'email'=>'soriya@weone.com',
            'password'=>bcrypt('123123'),
            'photo_id'=>'4'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'Logo(100x100)',
            'static_value_first'=>'Company Logo',
            'photo_id'=>'5'
        ]);
        $photos = \App\Photo::create([
            'file' => 'header/weone.png'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'Top Seller',
            'static_value_first'=>'The green tea seed serum is awarded globally as best moist serum for 19 times! And Super volcanic pore clay mask is the winner of 39 Global Beauty Awards. Meet innisfree bestsellers below.',
            'photo_id'=>'6'
        ]);
        $photos = \App\Photo::create([
            'file' => 'products/best.jpg'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'Left Footer',
            'static_value_first'=>'WEONE CAMBODIA',
            'static_value_second'=>'Best & New',
            'static_value_third'=>'Offer',
            'static_value_forth'=>'Brand'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'Main-Footer-Left',
            'static_value_first'=>'Child Support',
            'static_value_second'=>'any text',
            'photo_id'=>'7'
        ]);
        $photos = \App\Photo::create([
            'file' => 'main-footer/child.jpg'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'Main-Footer-Center',
            'static_value_first'=>'Our Supplier',
            'static_value_second'=>'any text',
            'photo_id'=>'8'
        ]);
        $photos = \App\Photo::create([
            'file' => 'main-footer/child.jpg'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'Main-Footer-Right',
            'static_value_first'=>'Our Products',
            'static_value_second'=>'https://www.youtube.com/embed/VLMD0WR9Y6g',
        ]);




        $promotion1 =\App\Promotion::create([
            'promo_name'=>'Promotion 1',
            'desc'=>'1',
            'order'=>'1',
            'user_id'=>'1',
            'from_date'=>'2018-01-01',
            'to_date'=>'2018-01-01',
            'photo_id'=>'9',
            'expired'=>'0',
        ]);
        $photos = \App\Photo::create([
            'file' => 'Offer/Offer1.jpg'
        ]);
        $promotion1 =\App\Promotion::create([
            'promo_name'=>'Promotion 2',
            'desc'=>'2',
            'order'=>'1',
            'user_id'=>'1',
            'from_date'=>'2018-01-01',
            'to_date'=>'2018-01-01',
            'photo_id'=>'10',
            'expired'=>'0',
        ]);
        $photos = \App\Photo::create([
            'file' => 'Offer/Offer2.jpg'
        ]);
        $promotion1 =\App\Promotion::create([
            'promo_name'=>'Promotion 3',
            'desc'=>'3',
            'order'=>'1',
            'user_id'=>'1',
            'from_date'=>'2018-12-01',
            'to_date'=>'2018-12-01',
            'photo_id'=>'11',
            'expired'=>'0',
        ]);
        $photos = \App\Photo::create([
            'file' => 'Offer/Offer3.jpg'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'First Offer (Header)',
            'static_value_first'=>'[SLEEPING MASK]',
            'static_value_second'=>'30% OFF',
            'photo_id'=>'12'
        ]);
        $photos = \App\Photo::create([
            'file' => 'header/adv.png'
        ]);

        $sys_static =SysStatic::create([
            'static_name'=>'Second Offer (Header)',
            'static_value_first'=>'[LIP TINT]',
            'static_value_second'=>'But 1 Get 1 Free',
            'photo_id'=>'13'
        ]);
        $photos = \App\Photo::create([
            'file' => 'header/adv.png'
        ]);

        $this->call(SlideShowSeeder::class);
    }
}

