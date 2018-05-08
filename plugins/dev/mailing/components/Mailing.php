<?php namespace dev\mailing\components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Flash;
use DB;


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
            ->where('active', '=', 0)
            ->count();
            $this->page['size2'] = $users;
            $this->page['notsend'] = $notsend;
           }

    public function onSend()
    {
       
        set_time_limit(0);
        $users = Db::table('dev_mailing_emails')
        ->select('email')
        ->where('active', '=', 1)
        ->get();


        $vars = ['name' => 'Test', 'email' => 'michr21@gmail.com','content' => Input::get('about2'),'content2' => Input::get('about3'),'content3' => Input::get('about4')];
        foreach ($users as $value){
           
       
            //for ($x = 0; $x <= 1000; $x++) {
                //$this->page['size3'] = $x;
                $test=$value->email;
                Mail::send(['html' => 'dev.mailing::mail.message'], $vars, function($message) use ($test) {
                    
                                $message->to($test, 'Michal');
                        
                                
                                $message->subject('PLUGSTUDIO - wspołpraca');
                    
                            });
                
            //}
        }
        Flash::success('Wiadomość wysłana poprawnie!');
         
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
         
    }
}


