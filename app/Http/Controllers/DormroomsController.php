<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DormroomsController extends Controller
{
    public function createDormrooms(request $request){
    $Dormrooms=new Dormroom;
    $Dormrooms->price = $request->price;
    $Dormrooms->adress = $request->adress;
    $Dormrooms->free_rooms = $request->free_rooms;
    $Dormrooms->name_of_the_property = $request->name_of_the_property;
    $Dormrooms->adicional_prices = $request->adicional_prices;
    $Dormrooms->phone = $request->phone;
    $Dormrooms->save();
    return response()->json($Dormrooms);
    }

    public function showDormrooms($id){
        $Dormrooms = Dormrooms::findOrFail($id);
        return response()->json($Dormrooms);
    }

    public function listDormrooms($id){
       $Dormrooms = Dormrooms::all();
       return response()->json([$Dormrooms]);
    }
    public function updateDormrooms(Request $request, $id){
        $Dormrooms = Dormrooms::findOrFail($id);
        if($request->Adtitle){
            $republic->Adtitle = $request->name_of_the_property;
            $republic->Adtitle = $request->price;
            $republic->Adtitle = $request->adress;
            $republic->Adtitle = $request->free_dorms;
            $republic->Adtitle = $request->adicional_prices;
            $republic->Adtitle = $request->phone;
        }
        $Dormrooms = save();
        return response()->json($Dormrooms);
    }
    public function addDormrooms($id,$Dormrooms_id){
        $user=User::findOrFail($id);
        $Dormrooms=Dormrooms::findOrFail($Dormrooms_id);
        $user->Dormrooms_id=NULL;
        $user->save();
        return response()->json($Dormrooms);
    }
    public function deleteDormrooms($id){
        Dormrooms::destroy($id);
        return response()->json(['Anuncio apagado']);
    }
    public function addUser ($user_id, $Dormrooms_id){
        $user=User::findOrFail($user_id);
        $Dormrooms=Dormrooms::findOrFail($Dormrooms_id);
        $Dormrooms->user_id=$Dormrooms_id;
        $republic->save();
        return response()->json($Dormrooms);
    }

}
