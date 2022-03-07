<?php

use Illuminate\Support\Facades\Route;

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

$posts = [
    '1' => [
        'Blog_Title'    =>  'Intro to blogging',
        'Date'          =>  '01/25/2020',
        'Subtitle'      =>  'blogging stuff',
        'Content'       =>  'this is about blogging'
    ],
    '2' => [
        'Blog_Title'    =>  'Lorem Ipsum',
        'Date'          =>  '01/28/2020',
        'Subtitle'      =>  'Lorem',
        'Content'       =>  'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
    ],
    '3' => [
        'Blog_Title'    =>  'The standard Lorem Ipsum passage, used since the 1500s',
        'Date'          =>  '01/29/2020',
        'Subtitle'      =>  'this is some subtitle',
        'Content'       =>  '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'
    ],
    '4' => [
        'Blog_Title'    =>  'Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC',
        'Date'          =>  '01/30/2020',
        'Subtitle'      =>  'this is some subtitle',
        'Content'       =>  '"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. '
    ],
    '5' => [
        'Blog_Title'    =>  '1914 translation by H. Rackham',
        'Date'          => '02/1/2020',
        'Subtitle'      =>  'this is some subtitle',
        'Content'       =>  '"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. '
    ],
    '6' => [
        'Blog_Title'    =>  'Section 1.10.33 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC',
        'Date'          =>  '02/2/2020',
        'Subtitle'      =>  'this is some subtitle',
        'Content'       =>  '"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.'
    ],
    '7' => [
        'Blog_Title'    =>  '1914 translation by H. Rackham',
        'Date'          => '02/3/2020',
        'Subtitle'      =>  'this is some subtitle',
        'Content'       =>  '"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, '
    ],
  
];

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myblogs', function () use ($posts){
    return view('myblogs.index',['posts'=>$posts]);
})-> name('myblogs.index');


Route::get('/myblogs/{id}', function ($id) use ($posts){
     abort_if(!(isset($posts[$id])), 404);
     return view('myblogs.show',['post'=>$posts[$id] ]);
})-> name('myblogs.show');



