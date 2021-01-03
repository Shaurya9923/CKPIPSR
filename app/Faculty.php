<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Storage;

class Faculty extends Model
{
    //
    protected $table='faculties';
    protected $primaryKey='facultyid';
    protected $guarded = []; 

    public static function add($data){
        $faculty = new Faculty;        
        $faculty->fill($data);
        
        if(is_file($faculty->facultyimage)==true){
        
        $a=$faculty->facultyimage;
        // $extension=$faculty->facultyimage->extension();        
        // $filename=time().".".$extension;        
        // $facultyimage=$filename;
        $name=basename($faculty->facultyimage);
        // dd($name);
        move_uploaded_file($a,'uploads/FacultyImage/'.$name);
        $faculty->facultyimage=$name;
        
        // $faculty->facultyimage->move(public_path('iimages'), $faculty->facultyimage);
        // dd(move_uploaded_file($filename,'uploads/FacultyImage/'. $facultyimage));
        // $directory='upload/FacultyImage/'.$facultyimage;
        // $files = Storage::move("",$directory);        
        }
        else{
            $hello=10;
            dd($hello);
        }

        // $file=$faculty->file('facultyimage');
        // $file=store($filename,'uploads/FacultyImage');  
        // dd($file);
        
        
        
        

        
        // $faculty->facultyfirstname = $data->facultyfirstname;
        // $faculty->facultylastname = $data->facultylastname;
        // $faculty->facultyemailid = $data->facultyemailid;
        // $faculty->facultyid = $data->facultyid;
        // $faculty->facultydesignation = $data->facultydesignation;
        // $faculty->facultyqualification = $data->facultyqualification;
        // $faculty->joiningdate = $data->joiningdate;
        // $faculty->facultydob = $data->facultydob;
        // $faculty->facultyexperience = $data->facultyexperience;
        // $faculty->nationalpublication = $data->nationalpublication;
        // $faculty->internationalpublication = $data->internationalpublication;
        // $faculty->facultygender = $data->facultygender;
        // $faculty->facultyaddress = $data->facultyaddress;
        // $faculty->facultyachievement = $data->facultyachievement; 
        // $faculty1=new Faculty;
        // if($data->hasfile('facultyimage')){
        //     $file=$data->file('facultyimage');
        //     $extension=$data->facultyimage->extension();
        //     $filename=time().".".$extension;
        //     $file->move('uploads/FacultyImage',$filename);
        //     $faculty1->facultyimage=$filename;            
        // }else{
        //     $faculty1->facultyimage="";
        // }          
        // $array1=$data;
        // dd($array1);
        // print_r($array1);
        // $data=array_fetch($data,'facultyimage');        
        $faculty->save();                
    }

    // public static function imagestore($data){
    //     $faculty2 = new Faculty;        
    //     if($data->hasfile('facultyimage')){
    //         $file=$data->file('facultyimage');
    //         $extension=$data->facultyimage->extension();
    //         $filename=time().".".$extension;
    //         $file->move('uploads/FacultyImage',$filename);
    //         $faculty2->facultyimage=$filename;            
    //     }else{
    //         $faculty2->facultyimage="";
    //     }   
    //     $faculty2->save();       
    // }

     public function edit($data){        
        // $this->fill($data);        
        $this->fill($data->except('facultyimage')->toArray());
        
        $image = $data['facultyimage'];
        if(is_file($image)==true){
            $a=$image;
            $name=basename($image);            
            $extension=$image->extension();
            $filename=time().".".$extension;            
            move_uploaded_file($a,'uploads/FacultyImage/'.$filename);
            $this->facultyimage=$filename;
        }
        else{
            $hello=15;
            dd($hello);
        }
        
        $this->save();
        // $faculty = new Faculty;

        // if(is_file($faculty->facultyimage)==true){
            
        //     $a=$faculty->facultyimage;
        //     // $extension=$faculty->facultyimage->extension();        
        //     // $filename=time().".".$extension;        
        //     // $facultyimage=$filename;
        //     $name=basename($faculty->facultyimage);
        //     // dd($name);
        //     move_uploaded_file($a,'uploads/FacultyImage/'.$name);
        //     $faculty->facultyimage=$name;
            
        //     // $faculty->facultyimage->move(public_path('iimages'), $faculty->facultyimage);
        //     // dd(move_uploaded_file($filename,'uploads/FacultyImage/'. $facultyimage));
        //     // $directory='upload/FacultyImage/'.$facultyimage;
        //     // $files = Storage::move("",$directory);        
        //     }
        //     else{
        //         $hello=10;
        //         dd($hello);
        //     }
     }
}




// $table->bigInteger('facultyid');            
//             $table->string('facultyfirstname');
//             $table->string('facultylastname');
//             $table->string('facultyemailid')->nullable();
//             $table->string('facultydesignation')->nullable();
//             $table->string('facultyqualification')->nullable();
//             $table->date('joiningdate')->nullable();
//             $table->date('facultydob')->nullable();
//             $table->integer('facultyexperience')->nullable();
//             $table->integer('nationalpublication')->nullable();
//             $table->integer('internationalpublication')->nullable();
//             $table->string('facultygender')->nullable();
//             $table->string('facultyaddress')->nullable();
//             $table->string('facultyachievement')->nullable();
//             $table->string('facultyimage')->nullable();            
//             $table->timestamps();                