<?php

namespace App\Http\Controllers;

use App\Models\Contact as ModelsContact;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        $allContacts = Contact::all();
        return view('accueil',['contacts'=>$allContacts]);
    }
    //chemin du formulaire
    public function newContact()
    {
        return view('formulaireContact');
    }
    //ajout contact
    public function addContact(Request $request)
    {
        $newContact = new Contact();
        $newContact->name = $request->nom;
        
        $newContact->phone = $request->numero;
        $newContact->email = $request->email;
        $newContact->location = $request->location;
        $newContact->statut = $request->status;
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img',$filename);
            $newContact->photo = $filename;
        }
        
        $newContact->save();
        return  redirect('accueil'); 
    }
    //mise a jour niveau formulaire
    public function updateformulaire( $id)
    {
        $contactUpdate = Contact::find($id);
      
        return view('update')->with('contactToUpdate',$contactUpdate);
    }
    // mise a jour donnees
    public function update(Request $request, $id)
    {
        $contactUpdate = Contact::find($id);
        $contactUpdate->name = $request->input('nom');
        
        $contactUpdate->phone = $request->input('numero');
        $contactUpdate->email = $request->input('email');
        $contactUpdate->location = $request->input('location');
        $contactUpdate->statut = $request->input('status');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('img',$filename);
            $contactUpdate->photo = $filename;
        }
        
        $contactUpdate->save();
        return redirect('accueil');
    }

    // detail contact
    public function detailcontact($id)
    {
        $contact = Contact::find($id);
        return view('details')->with('contactdetail',$contact);
    }
    //suppression
    public function supprimer($id){
        $DeleteContact = Contact::find($id);
        if(!$DeleteContact){
                return response ("cette $id n'existe pas",404)->header('Content-Type', 'text/plain');
        }else{
                $DeleteContact->delete($id);
                return redirect('accueil');
        }
    }
}
