<?php namespace dev\mailing\components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Flash;
use DB;
use Redirect;

class Mailing extends ComponentBase

{

    public function componentDetails()

        {

            return[
                'name' => 'Mailing',
                'description' => 'Mailing app'
            ];

        } 
        public function onRun() {
            $users = Db::table('dev_mailing_emails')
            ->select('email')
            ->where('active', '=', 1)
            ->get();
            $notsend = Db::table('dev_mailing_emails')
            ->select('email')
            ->where('active', '=', 1)
            ->count();
            $this->page['size2'] = $users;
            $this->page['notsend'] = $notsend;
           }

    public function onSend()
    {
       
        set_time_limit(0);
        $limit=Input::get('limit');
        $users = Db::table('dev_mailing_emails')
        ->select('email')
        ->where('active', '=', 1)
        ->take($limit)->get();
        $licznik=0;


        $vars = ['name' => 'Test', 'email' => 'michr21@gmail.com','content' => Input::get('about2'),'content2' => Input::get('about3'),'content3' => Input::get('about4')];
        foreach ($users as $value){
           
       
           // for ($x = 0; $x <= 1000; $x++) {
                //$this->page['size3'] = $x;
                $test=$value->email;
                Mail::send(['html' => 'dev.mailing::mail.message'], $vars, function($message) use ($test) {
                    
                                 $message->to($test, 'PlUGSTUDIO');
                        
                                
                                $message->subject('PLUGSTUDIO - współpraca');
                    
                            });
           Db::table('dev_mailing_emails')
            ->where('email', $test)
            ->update(['active' => 0]);
            $licznik++;
            // if($licznik==500)
            // {
            //     break;
            //     Flash::success('500 wiadomosci wysłane pomyślnie!');
            //     return Redirect::to('/mail');

            // }
                
           // }
        }
        Flash::success('Wiadomość wysłana poprawnie!');
        return Redirect::to('/mail');
         
    }
    public function onTest()
    {
       
       


        $vars = ['name' => 'Test', 'email' => 'michr21@gmail.com','content' => Input::get('about2'),'content2' => Input::get('about3'),'content3' => Input::get('about4')];
        
           
       
            //for ($x = 0; $x <= 1000; $x++) {
                //$this->page['size3'] = $x;
                $test=Input::get('email');


                Mail::send(['html' => 'dev.mailing::mail.message'], $vars, function($message) use ($test) {
                    
                                $message->to($test, 'Michal');
                        
                                
                                $message->subject('PLUGSTUDIO - wspołpraca');
                    
                            });
                

            //}
        
        Flash::success('Wiadomość testowa wysłana poprawnie!');
        return Redirect::to('/mail');
         
    }
}


