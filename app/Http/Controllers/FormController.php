<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        //新規のFormモデルを作成する
        $form = new Form();

        //氏名とメールアドレスをFormモデルに設定する
        $form->name = $request->get('name');
        $form->email = $request->get('email');

        //DBにデータを保存する
        $form->save();

        //thanksページを返す
        return view('thanks');
    }
}
