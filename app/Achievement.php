<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    //
    protected $table='achievements';
    protected $primaryKey='achievementid';
    protected $guarded = []; 

    public static function add($data){
        $achievement = new Achievement;
        $achievement->fill($data);  
        if(is_file($achievement->achievementimage)==true){
            
            $a=$achievement->achievementimage;
            // $extension=$faculty->facultyimage->extension();        
            // $filename=time().".".$extension;        
            // $facultyimage=$filename;
            $name=basename($achievement->achievementimage);
            //dd($name);
            move_uploaded_file($a,'uploads/AchievementImage/'.$name);
            $achievement->achievementimage=$name;
            
            // $faculty->facultyimage->move(public_path('iimages'), $faculty->facultyimage);
            // dd(move_uploaded_file($filename,'uploads/FacultyImage/'. $facultyimage));
            // $directory='upload/FacultyImage/'.$facultyimage;
            // $files = Storage::move("",$directory);        
            }
            else{
                $hello=10;
                dd($hello);
            }   
        $achievement->save();
    }

    public function edit($data){        
        // $this->fill($data);        
        $this->fill($data->except('achievementimage')->toArray());
        
        $image = $data['achievementimage'];
        if(is_file($image)==true){
            $a=$image;
            $name=basename($image);            
            $extension=$image->extension();
            $filename=time().".".$extension;            
            move_uploaded_file($a,'uploads/AchievementImage/'.$filename);
            $this->achievementimage=$filename;
        }
        else{
            $hello=15;
            dd($hello);
        }
        
        $this->save();
    }
}
