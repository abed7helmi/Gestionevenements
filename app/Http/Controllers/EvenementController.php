<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;



class EvenementController extends Controller
{
    //detaileven
    public function detaileven($id)
    {
        $even=Evenement::with('organisateur')->where("id","=",$id)->get();
        $even=$even[0];
        // dd($even);
        return view('detailevenement',compact('even'));

    }


    public function deleteeven($id)
    {

        $tport=Evenement::find($id);
        $tport->delete();
        session()->flash('message1','Votre evenement a été bien supprimé');
        return redirect()->route('Mesevenements'); 

    }



    public function participereven($id)
    {

        $even=Evenement::find($id);
        $id2=Auth::user()->id;
        


        try {
            DB::table('participation')->insert([
                'user_id' => $id2,
                'evenement_id' => $id
            ]);
        } catch (\Exception $e) {
            

            session()->flash('message','Vous participer deja à cette evenement');
            return redirect()->route('acceuil'); 
            
        }

       
        
        $even->update([
            'Nb_participants_R'=>($even->Nb_participants_R)-1
        ]);


        session()->flash('message1','Participation prise en compte');
        return redirect()->route('acceuil'); 

        
    }




    




}
