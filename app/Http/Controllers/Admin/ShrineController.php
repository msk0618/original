<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shrine;

class ShrineController extends Controller
{
    public function add()
    {
        return view('mypage.newpost');
    }
    
    public function create(Request $request)
    {
        // 以下を追記
        // Validationを行う
        $this->validate($request, Shrine::$rules);

        $shrine = new Shrine;
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $shrine->image_path = basename($path);
        } else {
            $shrine->image_path = null;
        }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $shrine->fill($form);
        $shrine->save();

        return redirect('list');
    }
    
    public function edit()
    {
        return view('mypage.edit');
    }
    
    public function update()
    {
        return redirect('newpost');
    }

}
