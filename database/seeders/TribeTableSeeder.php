<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tribe;

class TribeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tribe = new Tribe();
        $tribe->tribe_name = array(
            'Alagwa','Akiek', 'Akie', 'Arusha','Assa','Barabaig','Balouch','Bembe','Bena','Bende','Bondei','Bungu','Burunge','Chaga','Datooga',
            'Dhaiso','Digo','Doe','Fipa','Gogo','Goa','Goma','Gorowa','Gujarati','Gweno','Ha','Hu', 'Kagera','Hadza','Hangaza','Haya','Hehe','Holoholo',
            'Hutu','Ikizu','Ikoma','Iraqw','Isanzu','Issenye','Jiji','Jita','Kabwa','Kagura','Kaguru','Kahe','Kami','Kamba','Kara/Regi','Kerewe','Kikuyu','Kimbu',
            'Kinga','Kisankasa','Kisi','Konongo','Kuria','Kutu','Kw\'adza','Kwavi','Kwaya','Kwere','Kwifa','Lambya','Luguru','Luo','Maasai','Machinga','Magoma',
            'Mahanji','Mbulu','Makonde','Makua','Makwe','Malila','Mambwe','Manyema','Manda','Mahara','Mediak','Meru','Matengo','Matumbi','Maviha','Mbugwe',
            'Mbunga','Mbugu','Mosiro','Mpoto','Msur','Mwanga','Mwera','Natta','Ndali','Ndamba','Ndendeule','Ndengereko','Ndonde','Nyanja','Ngas','Ngasa','Ngindo',
            'Ngoni','Ngulu','Ngazija','Ngurimi','Ngwele','Nilamba','Nindi','Nyakyusa','Nyasa','Nyambo','Nyamwanga','Nyamwezi','Nyanyembe','Nyaturu','Nyiha','Nyiramba',
            'Omotik','Okiek','Pangwa','Pare','Pimbwe','Pogolo','Rangi','Rufiji','Rungi','Rungu','Rungwa','Rwa','Safwa','Sagara','Sandawe','Sangu','Segeju','Swengwear',
            'Shambaa','Shirazi','Shubi','Sizaki','Suba','Sukuma','Sumbwa','Sungu','Swahili','Temi','Tongwe','Twa','Tutsi','Tumbuka','Vidunda','Vinza','Wanda',
            'Washihiri','Wamanga','Wanji','Ware','Yaaku','Yao','Zanaki','Zaramo','Zigua','Zinza','Zyoba','Zulu'
        );
        $tribe->save();
    }
}
