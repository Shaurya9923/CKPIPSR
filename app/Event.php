<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $table='events';
    protected $primaryKey='eventid';
    protected $guarded = []; 

    public static function add($data){
        $event = new Event;
        $event->fill($data);
        if(is_file($event->eventimage)==true){
            
            $a=$event->eventimage;
            // $extension=$faculty->facultyimage->extension();        
            // $filename=time().".".$extension;        
            // $facultyimage=$filename;
            $name=basename($event->eventimage);
            //dd($name);
            $extension=$event->eventimage->extension();
            $filename=time().".".$extension;
            
            move_uploaded_file($a,'uploads/EventImage/'.$filename);
            $event->eventimage=$filename;
            
            // $faculty->facultyimage->move(public_path('iimages'), $faculty->facultyimage);
            // dd(move_uploaded_file($filename,'uploads/FacultyImage/'. $facultyimage));
            // $directory='upload/FacultyImage/'.$facultyimage;
            // $files = Storage::move("",$directory);        
            }
            else{
                $hello=10;
                dd($hello);
            }
        // $event->eventid = $data->eventid;
        // $event->eventtitle = $data->eventtitle;
        // $event->eventtype = $data->eventtype;
        // $event->eventdetail = $data->eventdetail;
        // $event->eventcoordinator = $data->eventcoordinator;
        // $event->eventconductedby = $data->eventconductedby;
        // $event->eventdate = $data->eventdate;
        
        // if($data->hasfile('eventimage')){
        //     $file=$data->file('eventimage');
        //     $extension=$data->eventimage->extension();
        //     $filename=time().".".$extension;
        //     $file->move('uploads/EventImage',$filename);
        //     $event->eventimage=$filename;            
        // }else{
        //     $event->eventimage="";
        // }        
    

        $event->save();
    }


    // public static function editf($data1,$eventid){
    //     $event1= Event::find($eventid);

    //     $event1->eventid=$data1->get('eventid');
    //     $event1->eventtitle=$data1->get('eventtitle');
    //     $event1->eventtype=$data1->get('eventtype');
    //     $event1->eventdetail=$data1->get('eventdetail');
    //     $event1->eventdate=$data1->get('eventdate');
    //     $event1->eventcoordinator=$data1->get('eventcoordinator');
    //     $event1->eventconductedby=$data1->get('eventconductedby');
        
    //     // $event1->eventimage=$data1->get('eventimage'); for image

    //     $event1->save();
    //  }


    public function edit($data){
        //$event = new Event;
        $this->fill($data->except('eventimage')->toArray());
        
        $image = $data['eventimage'];
        if(is_file($image)==true){
            $a=$image;
            $name=basename($image);            
            $extension=$image->extension();
            $filename=time().".".$extension;            
            move_uploaded_file($a,'uploads/EventImage/'.$filename);
            $this->eventimage=$filename;
        }
        else{
            $hello=15;
            dd($hello);
        }
        
        $this->save();                            
     }

}
