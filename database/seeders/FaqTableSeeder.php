<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
	 private $faq = [
		[
			"question"	=> "Nasıl üye olurum ?",
			"answer"	=> "Teldeki türemiş sıfat öyle ki bundan dolayı ekşili çorba şafak çünkü cezbelendi bilgisayarı göze çarpan. Duyulmamış gazete kalemi orta camisi biber filmini mi mutlu oldular göze çarpan lakin uzattı. Ötekinden dolayı teldeki teldeki sokaklarda anlamsız layıkıyla öyle ki cesurca yaptı de öyle ki biber çakıl. Masanın masanın uzattı patlıcan ve teldeki uzattı kapının kulu gitti otobüs. Kalemi dışarı çıktılar mıknatıslı okuma sayfası değerli olduğu için öyle ki cesurca yaptı. Telefonu umut yazın gazete ışık dağılımı adanaya filmini mi un değirmeni göze çarpan sandalye. Nedirnedemek Türkçe Lorem İpsum." ,
			"status"	=> 1		
		],
		[
			"question"	=> "Nasıl randevu alabilirim ?",
			"answer"	=> "Sandalye lakin yapacakmış biber uzattı domates sevindi lambadaki gül yapacakmış koyun koşuyorlar otobüs. Layıkıyla ve salladı patlıcan sandalye ışık dağılımı gül kapının kulu kapının kulu sokaklarda. Ve bilgisayarı bilgiyasayarı ona doğru masanın telefonu telefonu umut umut. Duyulmamış ona doğru gazete cezbelendi teldeki sinema türemiş sıfat kapının kulu adresini. Uzattı lakin gül ve koyun salladı adanaya teldeki teldeki beğendim. Nedirnedemek Türkçe Lorem İpsum." ,
			"status"	=> 1
		],
	 ];
     
    public function run()
    {
		foreach ($this->faq as $t) {
			$new = new \App\Models\Faq();
			$new->question 		= $t['question'];
			$new->answer 		= $t['answer'];
			$new->status 		= $t['status'];
			$new->save();
		}
    }
}
