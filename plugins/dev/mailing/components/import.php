<?php namespace Dev\Mailing\Components; 

use Cms\Classes\ComponentBase;
use Redirect;
use dev\mailing\Models\Emails as Emails;
use Input;
use DB;

class import extends ComponentBase

{

    public function componentDetails()

        {

            return[
                'name' => 'Import',
                'description' => 'Import z excela'
            ];

       }
    public function onSave()
    {
    	$handle = fopen(Input::file('file'), "r");
		$header = true;

		while ($csvLine = fgetcsv($handle, 0, ";")) {

   		 if ($header) {
        $header = false;
   		 } elseif($csvLine[6]!='-') {
        Db::table('dev_mailing_emails')->insert(
    ['email' => $csvLine[6] ]
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
