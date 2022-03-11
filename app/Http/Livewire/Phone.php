<?php

namespace App\Http\Livewire;
use App\Models\Phones;

use Livewire\Component;

class Phone extends Component
{
    public $name , $address , $phone , $email , $gender , $phoneEdit , $search , $searchnum ,$searchaddress ;
    public $phoneUpdate = false;
    public function render()
    {

        $data['phone']=Phones::where('name','like','%'.$this->search.'%')->where('address','like','%'.$this->searchaddress.'%')->where('phone','like','%'.$this->searchnum.'%')->orderBy('id','desc')->get();
//        $data['phone']=Phones::->orderBy('id','desc')->get();


//        $data['phone']=Phones::orderBy('id','desc')->get();
        return view('livewire.phone',compact('data'));
    }

    function blank(){
$this->name="";
$this->address="";
$this->phone="";
$this->email="";
$this->gender="";
    }

//    protected $updatesQueryString=["search"];
//    public function mount(){
//        $this->search= request('search',$this->search);
//
//    }

    public function Insert(){
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|min:10|max:10',
            'address'=>'required',
            'gender'=>'required',
        ]);
        Phones::create([
            'name'=>$this->name,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'address'=>$this->address,
            'gender'=>$this->gender,
        ]);
        $this->blank();

    }
    public function Edit($id){
        $this->phoneUpdate = true;
        $phoneEdit=Phones::findOrFail($id);
        $this->phone_id=$id;
        $this->name=$phoneEdit->name;
        $this->address=$phoneEdit->address;
        $this->phone=$phoneEdit->phone;
        $this->email=$phoneEdit->email;
        $this->gender=$phoneEdit->gender;
    }


    public function update(){

        $Updatephone=Phones::findOrFail($this->phone_id);
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required|min:10|max:10',
            'address'=>'required',
            'gender'=>'required',
        ]);
        $Updatephone->update([
            'name'=>$this->name,
            'phone'=>$this->phone,
            'email'=>$this->email,
            'address'=>$this->address,
            'gender'=>$this->gender,
        ]);
        $this->blank();
        $this->phoneUpdate =false;
    }


    public  function Delete($id){
        if($id){
            $deletePhone = Phones::where('id',$id);
            $deletePhone->delete();
        }
    }


}
