<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Метод-получатель статьи по id.
        /*try {
            //Соединение с БД
            //Попытка вытащить статью по переданному ID
        } catch (Exception $ex) {
            //Обработка исключений
            abort(404);
        }*/
        
        return view('page');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $articleId
     * @return Response
     */
    public function show($articleId = 1)
    {
        //
        $user = Socialize::with('facebook')->user();

        // Провайдеры, использующие OAuth v.2.0
        $token = $user->token;

        // Провайдеры, использующие OAuth v.1.0
        $token = $user->token;
        $tokenSecret = $user->tokenSecret;

        // Все провайдеры
        $user->getNickname();
        $user->getName();
        $user->getEmail();
        $user->getAvatar();
        print_r($user);
        return view('page');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
