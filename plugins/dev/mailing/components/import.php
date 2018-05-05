<?php namespace Dev\Mailing\Components; 

use Cms\Classes\ComponentBase;
use Redirect;
use dev\mailing\Models\Emails as Emails;
use Input;
use DB;
use Cookie;

class import extends ComponentBase

{

    public function componentDetails()

        {

            return[
                'name' => 'Import',
                'description' => 'Import z excela'
            ];

       }
    public function onRun() {
        $param=Emails::count();
        Cookie::queue('Size',$param , 60);
        $this->page['size'] = $param;

        $users = Db::table('dev_mailing_emails')
        ->select('email')
        ->where('active', '=', 1)
        ->get();
        $this->page['size2'] = $users;

       }
    public function onSave()
    {
        set_time_limit(0);
    	$handle = fopen(Input::file('file'), "r");
		$header = true;

		while ($csvLine = fgetcsv($handle, 0, ";")) {

   		 if ($header) {
        $header = false;
   		 } elseif($csvLine[6]!='-') {
        Db::table('dev_mailing_emails')->insert(
    ['email' => $csvLine[6],'active' => '0' ]
);
        
    }
}
    	 return Redirect::to('');
    }
    public function onDelete()
    {
    	
        Db::table('dev_mailing_emails')->delete();
   
    	 return Redirect::to('');
    }

}
