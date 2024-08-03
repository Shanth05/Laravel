<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Route::get('/', function () {
//     $marks=[
//         "Maths"=>90,
//         "Science"=>80,
//         "English"=>70
//     ];
//     // function dumfordie($mark){
//     //     dump($mark);
//     //     die();
//     // };
//     return view('welcome',['marks'=>$marks]);
//     // return  dumfordie($marks);

// });


// Route::get('/page', function () {
//     $data="Shanth"
//     return view('page.homewelcome',['marks'=>$marks]);
// });

Route::get('/{p?}', function ($p='home') {
    $marks=[
        "Maths"=>90,
        "Science"=>80,
        "English"=>70
    ];
    return view('pages/'.$p,['marks'=>$marks]);
});

/*Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/post', function () {
    return view('pages.post');
});


Route::get('/photos', function () {
    return view('pages.photos');
});
*/

