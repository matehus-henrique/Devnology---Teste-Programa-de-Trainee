<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Forca;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{

    public function index(){

        //método para fazer busca
        $search = request('search');
        if($search){

            $forcas = Forca::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        }else{
            $forcas = Forca::all();
        }

        return view('welcome', ['forcas' => $forcas, 'search'=>$search]);
        //método para pegando registro do banco
    }

    //add produtos
    public function create(){
        return view('events.create');
    }

    //controller para produtos

    public function produtos(){
        $busca = request('search');

    return view('produtos' , ['busca' => $busca ]);

    }

    public function store(Request $request){
        $forcas = new Forca;

        $forcas->title = $request->title;
        $forcas->nome = $request->nome;
        $forcas->date = $request->date;
        $forcas->subtitle = $request->subtitle;
        $forcas->descricao = $request->descricao;



        //upload da imagem

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'),$imageName);

            $forcas->image = $imageName;


            //fim

            //busca de user

            $user = auth()->user();
            $forcas->user_id= $user->id;
            //fim

        }

        $forcas->save();

        return redirect('/')->with('msg', 'Prosuto adicionado com sucesso!');




    }

    // fanction do produto
    public function show($id){
        $forcas = Forca::findOrfail($id);


        $eventOwner = User::where('id',$forcas->user_id)->first()->toArray();

        return view('events.show', ['forca' => $forcas, 'eventOwner' => $eventOwner]);
    }

    //fanction de dashboard

    public function dashboard(){

        $user = auth()->user();

        $forcas = $user->forcas;

        return view('events.dashboard', ['forcas'=>$forcas]);
    }

        //fanction para delete

        public function destroy($id){
            Forca::findOrFail($id)->delete();

            return Redirect('/dashboard')->with('msg', 'Produto excluido com susseso!');
        }
                //fanction para editar

        public function edit($id){
            $forca = Forca::findOrFail($id);
            return view('events.edit', ['forca'=>$forca]);


        }


                //fanction para editar

        public function update(Request $request){

            $date = $request->all();

            //upload da imagem

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'),$imageName);

            $date['image'] = $imageName;

        }


            Forca::findOrFail($request->id)->update($date);

            return Redirect('/dashboard')->with('msg', 'Produto editado com susseso!');

        }



}
