<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\Doctor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HospitalManagementController extends Controller
{
    /* Appoinment */

    //Add
    public function appoinmentaddstore(Request $request)
    {
       $user_email = Auth::user()->email;
       $appoinment=new Appoinment;
       $appoinment->email= $user_email;
       $appoinment->name= $request->name;
       $appoinment->pemail= $request->pemail;
       $appoinment->mobile= $request->mobile;
       $appoinment->address= $request->address;
       $appoinment->date= $request->date;

       $appoinment->save();
       return redirect()->back()->with('message', 'Your Appoinment has been recoded successly!!');
    }
    //show
    public function appoinmentshow()
    {
      $appoinmentshow= Appoinment::select('*')
                ->where('status', 'Pending' )
                ->orderBy('id', 'ASC')
                ->get();
      return view('hospital.showeditanddelete.appoinmentshow',compact('appoinmentshow'));
    }
    //Edit
    public function appoinmentedit($id)
    {
        $data=Appoinment::find($id);
        return view('hospital.showeditanddelete.appoinmentedit', compact('data'));
    }
    public function appoinmenteditprocess(Request $request, $id)
    {
        $data=Appoinment::find($id);
        $data->name= $request->name;
        $data->name= $request->name;
        $data->pemail= $request->pemail;
        $data->mobile= $request->mobile;
        $data->address= $request->address;
        $data->date= $request->date;
        $data->status= $request->status;

        $data->save();
         return redirect()->to('/allappoinment')->with('message1', 'Appoinment Info. has been updated successly!!');
    }
    //Delete
    public function deleteappoinment($id)
    {
        $data=Appoinment::find($id);
        $data->delete();
        return redirect()->back()->with('message2', 'Appoinment Info. has been deleted successly!!');
    }

    /* Confirmed Appoinment */

    //show
    public function confirmedappoinmentshow()
    {
         $confirmedappoinmentshow = Appoinment::select('*')
                   ->where('status', 'Confirmed' )
                   ->orderBy('id', 'ASC')
                   ->get();

          return view('hospital.showeditanddelete.confirmedappoinmentshow',compact('confirmedappoinmentshow'));
    }
    //Edit
    public function confirmedappoinmentedit($id)
    {
        $data=Appoinment::find($id);
        return view('hospital.showeditanddelete.confirmedappoinmentedit', compact('data'));
    }
    public function confirmedappoinmenteditprocess(Request $request, $id)
    {
        $data=Appoinment::find($id);
        $data->name= $request->name;
        $data->name= $request->name;
        $data->pemail= $request->pemail;
        $data->mobile= $request->mobile;
        $data->address= $request->address;
        $data->date= $request->date;
        $data->status= $request->status;

        $data->save();
         return redirect()->to('/confirmedappoinmentshow')->with('message1', 'Confirmed Appoinment Info. has been updated successly!!');
    }
    //Delete
    public function deleteconfirmedappoinment($id)
    {
        $data=Appoinment::find($id);
        $data->delete();
        return redirect()->back()->with('message2', 'Confirmed Appoinment Info. has been deleted successly!!');
    }

    /* Doctor Add, Show, Edit and Delete*/

       //Add
       public function doctoradd()
       {
          return view('hospital.doctoradd');
       }

       public function doctorstore(Request $request)
       {
          $user_email = Auth::user()->email;
          $doctor=new Doctor;
          $doctor->email= $user_email;
          $doctor->name= $request->name;
          $doctor->address= $request->address;
          $doctor->gender= $request->gender;
          $doctor->mobile= $request->mobile;
          $doctor->demail= $request->demail;
          $doctor->specialization= $request->specialization;
          $doctor->dob= $request->dob;

          $files=$request->file('image');
          $name=$request->file('image')->getClientOriginalName();

          if($request->hasFile('image')) {
          $name=$request->file('image')->getClientOriginalName();
          $request->file('image')->storeAs('images/',$name);
          $request->image->move(public_path('images'), $name);
          }

          $doctor->image="images/".$name;

          $doctor->save();
          return redirect()->back()->with('message', 'Doctor has been added successly!!');
       }
       //Show
      public function alldoctorshow()
      {
        $alldoctorshow= Doctor::get();
        return view('hospital.showeditanddelete.alldoctorshow',compact('alldoctorshow'));
      }
      //Edit
      public function doctoredit($id)
      {
          $data=Doctor::find($id);
          return view('hospital.showeditanddelete.doctoredit', compact('data'));
      }
      public function doctoreditprocess(Request $request, $id)
      {
          $data=Doctor::find($id);
          $data->name= $request->name;
          $data->address= $request->address;
          $data->gender= $request->gender;
          $data->mobile= $request->mobile;
          $data->demail= $request->demail;
          $data->specialization= $request->specialization;
          $data->dob= $request->dob;

          $data->save();
           return redirect()->to('/alldoctorshow')->with('message1', 'Doctor Information has been updated successly!!');
      }
      //Delete
      public function deletedoctor($id)
      {
          $data=Doctor::find($id);
          $data->delete();
          return redirect()->back()->with('message2', 'Doctor has been deleted successly!!');
      }

}
