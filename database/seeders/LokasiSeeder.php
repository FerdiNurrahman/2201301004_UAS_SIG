<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('lokasi')->insert([
            [
                'id' => 1,
                'nama_lokasi' => 'SDN Benua Tengah 1',
                'koordinat' => '-3.875978356790795, 114.65756068587577',
                'jenis' => 'point',
                'sekolah' => 'sd'
            ],
            [
                'id' => 2,
                'nama_lokasi' => 'SDN Benua Tengah 3',
                'koordinat' => '-3.8760429943775327, 114.65830321041079',
                'jenis' => 'point',
                'sekolah' => 'sd'
            ],
            [
                'id' => 3,
                'nama_lokasi' => 'SMP Negeri 1 Takisung',
                'koordinat' => '[[[114.62594827325734,-3.8823409920132974],[114.62566141245497,-3.8821745951875073],[114.62539456519698,-3.8826737855680022],[114.6251777517993,-3.88302654659266],[114.62533786015433,-3.8830931052594764],[114.62531117542903,-3.8831796315186438],[114.6256647480455,-3.883375979536666],[114.62570811072476,-3.883322732620641],[114.62583152758293,-3.883375979536666],[114.62623179846918,-3.8826138827378855],[114.6261984425629,-3.882587259257008],[114.62623513406112,-3.8825340122912166],[114.62618176460893,-3.8825007329356964],[114.62601832066343,-3.882800247083736],[114.62577148694982,-3.883266157768915],[114.62538455842417,-3.883063153859169],[114.62544126346671,-3.882876789571398],[114.62558135827743,-3.882547324033311],[114.62570811072476,-3.8823476478866326],[114.62593159530485,-3.8824574697724614],[114.62594493766687,-3.8823476478866326]]]',
                'jenis' => 'polygon',
                'sekolah' => 'smp'
            ],
            [
                'id' => 4,
                'nama_lokasi' => 'SDN Takisung 2',
                'koordinat' => '[[[114.6154098630015,-3.874952499560237],[114.61536376133745,-3.874893726542595],[114.61527924161857,-3.8749678316510483],[114.61514862023353,-3.874850285615011],[114.6148592042245,-3.8751083758038476],[114.61492579551816,-3.87520547902389],[114.6151844770838,-3.8749627209544713],[114.61533046568951,-3.875044492101054],[114.61540730179917,-3.874952499560237]]]',
                'jenis' => 'polygon',
                'sekolah' => 'sd'
            ],
            [
                'id' => 5,
                'nama_lokasi' => 'SMK Negeri 1 Pelaihari',
                'koordinat' => '[[[114.78321236747053,-3.795696205618981],[114.78317714806695,-3.7957448639780296],[114.78304168881766,-3.795966529801447],[114.78295228571113,-3.7960962853788516],[114.78300376022577,-3.7961260210294228],[114.78298750511698,-3.7961854923263587],[114.78315547458624,-3.7962855122266888],[114.78344264819589,-3.796447706635419],[114.78367292891909,-3.7965369135478113],[114.78363229114586,-3.796685591713455],[114.78440982723816,-3.797064045110659],[114.78449381197277,-3.7970234965408878],[114.78455070485705,-3.797096483965632],[114.78481157142346,-3.796678866757148],[114.78323423842176,-3.7956901236552767],[114.78321076915029,-3.795695630949396]]]',
                'jenis' => 'polygon',
                'sekolah' => 'smk'
            ],
            [
                'id' => 6,
                'nama_lokasi' => 'SMP Negeri 1 Takisung',
                'koordinat' => '-3.8827982, 114.6257760',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 7,
                'nama_lokasi' => 'SMK Negeri 1 Takisung',
                'koordinat' => '-3.8862831, 114.6207342',
                'jenis' => 'point',
                'sekolah' => 'smk'
            ],
            [
                'id' => 8,
                'nama_lokasi' => 'SMKS Muhamadiyah Pelaihari',
                'koordinat' => '-3.7559921, 114.7657340',
                'jenis' => 'point',
                'sekolah' => 'smk'
            ],
            [
                'id' => 9,
                'nama_lokasi' => 'UPTD SD Negeri 1 Batakan',
                'koordinat' => '-4.082764931635699, 114.6353577392059',
                'jenis' => 'point',
                'sekolah' => 'sd'
            ],
            [
                'id' => 10,
                'nama_lokasi' => 'UPTD SD Negeri 1 Batu Mulia',
                'koordinat' => '-3.968845852148416, 114.75669890484146',
                'jenis' => 'point',
                'sekolah' => 'sd'
            ],
            [
                'id' => 11,
                'nama_lokasi' => 'UPTD SD Negeri 1 Batu Tungku',
                'koordinat' => '-4.009835517347932, 114.69753630743857',
                'jenis' => 'point',
                'sekolah' => 'sd'
            ],
            [
                'id' => 12,
                'nama_lokasi' => 'UPTD SD Negeri 1 Bati-Bati',
                'koordinat' => '-3.592444452950095, 114.69237651061894',
                'jenis' => 'point',
                'sekolah' => 'sd'
            ],
            [
                'id' => 13,
                'nama_lokasi' => 'UPTD SD Negeri 2 Bati-Bati',
                'koordinat' => '-3.588920922380358, 114.6964166679161',
                'jenis' => 'point',
                'sekolah' => 'sd'
            ],
            [
                'id' => 14,
                'nama_lokasi' => 'UPTD SD Negeri 2 Batakan',
                'koordinat' => '-4.062590064340879, 114.64051451490853',
                'jenis' => 'point',
                'sekolah' => 'sd'
            ],
            [
                'id' => 15,
                'nama_lokasi' => 'UPTD SD Negeri 3 Batakan',
                'koordinat' => '-4.074099348753228, 114.63587355855361',
                'jenis' => 'point',
                'sekolah' => 'sd'
            ],
            [
                'id' => 16,
                'nama_lokasi' => 'UPTD SD Negeri 1 padang luas',
                'koordinat' => '-3.6176331101233554, 114.62350245835637',
                'jenis' => 'point',
                'sekolah' => 'sd'
            ],
            [
                'id' => 17,
                'nama_lokasi' => 'SMP Islam Nurul Hijrah',
                'koordinat' => '-3.56083940949871, 114.61948078858775',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 18,
                'nama_lokasi' => 'SMP Negeri 1 Bati-Bati',
                'koordinat' => '-3.5994795876856234, 114.70588813373712',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 19,
                'nama_lokasi' => 'SMA Negeri 1 Jorong',
                'koordinat' => '-3.9589521216495873, 114.91704519473434',
                'jenis' => 'point',
                'sekolah' => 'smk'
            ],
            [
                'id' => 20,
                'nama_lokasi' => 'SMP Negeri 1 Kintap',
                'koordinat' => '-3.878768941737345, 115.17990421159982',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 21,
                'nama_lokasi' => 'SMP Negeri 1 Kurau',
                'koordinat' => '-3.6080312011047857, 114.62015762440586',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 22,
                'nama_lokasi' => 'SMP Negeri 1 Panyipatan',
                'koordinat' => '-3.9671675272117732, 114.75523478124212',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 23,
                'nama_lokasi' => 'SMP Negeri 1 Pelaihari',
                'koordinat' => '-3.803530481695967, 114.76572261986605',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 24,
                'nama_lokasi' => 'SMP Negeri 1 Takisung',
                'koordinat' => '-3.8827982, 114.6257760',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 25,
                'nama_lokasi' => 'SMP Negeri 1 Tambang Ulang',
                'koordinat' => '-3.6883015706317366, 114.74035452171616',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 26,
                'nama_lokasi' => 'SMP Negeri 4 Pelaihari',
                'koordinat' => '-3.7964688566923614, 114.7511623463264',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 27,
                'nama_lokasi' => 'SMP Negeri 2 Pelaihari',
                'koordinat' => '-3.8079012880339076, 114.78727519473273',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 28,
                'nama_lokasi' => 'SMP Negeri 3 Pelaihari',
                'koordinat' => '-3.7648148939288975, 114.77119635425532',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 29,
                'nama_lokasi' => 'SMP Negeri 2 Bati-Bati',
                'koordinat' => '-3.535416661763547, 114.80169025425303',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 30,
                'nama_lokasi' => 'SMP Negeri 1 Jorong',
                'koordinat' => '-3.9586375319175175, 114.92115980183155',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 31,
                'nama_lokasi' => 'SMP Negeri 2 Kintap',
                'koordinat' => '-3.8453196082614567, 115.30384024118983',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 32,
                'nama_lokasi' => 'SMP Negeri 2 Kurau',
                'koordinat' => '-3.6593186021884905, 114.64368818829949',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 33,
                'nama_lokasi' => 'SMP Negeri 2 Panyipatan',
                'koordinat' => '-4.067855647154719, 114.64345975425849',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 34,
                'nama_lokasi' => 'SMP Negeri 2 Takisung',
                'koordinat' => '-3.767707717146952, 114.6136170775376',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 35,
                'nama_lokasi' => 'SMP Negeri 2 Tambang Ulang',
                'koordinat' => '-3.668682600410971, 114.68774523520838',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 36,
                'nama_lokasi' => 'SMP Negeri 3 Bati-Bati',
                'koordinat' => '-3.537426395703198, 114.72859189473004',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 37,
                'nama_lokasi' => 'SMP Negeri 3 Batu Ampar',
                'koordinat' => '-3.914946212477669, 114.92019246404672',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 38,
                'nama_lokasi' => 'SMP Negeri 3 Jorong',
                'koordinat' => '-3.976818531092425, 115.00953683421783',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 39,
                'nama_lokasi' => 'SMP Negeri 3 Kintap',
                'koordinat' => '-3.9014226143400124, 115.2656683052907',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 40,
                'nama_lokasi' => 'SMP Negeri 3 Kurau',
                'koordinat' => '-3.5800020058355564, 114.5887605455423',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 41,
                'nama_lokasi' => 'SMP Negeri 3 Takisung',
                'koordinat' => '-3.8490633034331725, 114.65165744076383',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 42,
                'nama_lokasi' => 'SMP Negeri 4 Bati-Bati',
                'koordinat' => '-3.6062927217994294, 114.79760711562798',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 43,
                'nama_lokasi' => 'SMP Negeri 4 Batu Ampar',
                'koordinat' => '-3.8454778352832046, 114.84755912356906',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 44,
                'nama_lokasi' => 'SMP Negeri 4 Jorong',
                'koordinat' => '-3.970044152735379, 115.10595542171913',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 45,
                'nama_lokasi' => 'SMP Negeri 4 Kintap',
                'koordinat' => '-3.8973803794202464, 115.14945757939013',
                'jenis' => 'point',
                'sekolah' => 'smp'
            ],
            [
                'id' => 46,
                'nama_lokasi' => 'SMK Negeri 1 Takisung',
                'koordinat' => '[[[114.61914999379911,-3.8861663006394878],[114.61984067223756,-3.8864133200973328],[114.61982078473193,-3.886757244087619],[114.62117976433893,-3.886955661710772],[114.62124605602821,-3.8866977187915808],[114.62149133527328,-3.8858908199196662],[114.62040415158765,-3.885480756262865],[114.6198671889124,-3.8858709781343777],[114.61923741787461,-3.885804838847335],[114.61915022114823,-3.886166372563892]]]',
                'jenis' => 'polygon',
                'sekolah' => 'smk'
            ],
            [
                'id' => 47,
                'nama_lokasi' => 'MTSN 2 Tanah Laut',
                'koordinat' => '[[[114.78216970809495,-3.7950731420582287],[114.78191130364098,-3.795704581373087],[114.78255995155479,-3.7961150166810143],[114.78292119043516,-3.795457267696122],[114.78219871267572,-3.7950862970485986],[114.78216970809495,-3.7950731420582287]]]',
                'jenis' => 'polygon',
                'sekolah' => 'smp'
            ],
            [
                'id' => 48,
                'nama_lokasi' => 'MTSN 2 Tanah Laut',
                'koordinat' => '[[[114.78216970809495,-3.7950731420582287],[114.78191130364098,-3.795704581373087],[114.78255995155479,-3.7961150166810143],[114.78292119043516,-3.795457267696122],[114.78219871267572,-3.7950862970485986],[114.78216970809495,-3.7950731420582287]]]',
                'jenis' => 'polygon',
                'sekolah' => 'smp'
            ],
            [
                'id' => 49,
                'nama_lokasi' => 'UPTD SDN Angsau 4',
                'koordinat' => '[[[114.78159079747479,-3.7945404865641876],[114.78121347081111,-3.7950950205036236],[114.78150889711338,-3.79524970622316],[114.78182479850591,-3.7947535443824876],[114.78180724842929,-3.794651393379425],[114.78166977282262,-3.794549242365605],[114.78158787246116,-3.794534649362646]]]',
                'jenis' => 'polygon',
                'sekolah' => 'sd'
            ],
            [
                'id' => 50,
                'nama_lokasi' => 'UPTD SDN Angsau 6',
                'koordinat' => '[[[114.7790969132418,-3.797622419127478],[114.77964197998625,-3.7979950706429833],[114.77937954044262,-3.7983838366468774],[114.77890916802943,-3.7978641390468226],[114.7790969132418,-3.7976163761278627]]]',
                'jenis' => 'polygon',
                'sekolah' => 'sd'
            ],
            [
                'id' => 51,
                'nama_lokasi' => 'UPTD SDN Takisung 1',
                'koordinat' => '[[[114.61099701098567,-3.865802060416513],[114.61132586041697,-3.8659288267798644],[114.61131838656587,-3.866018308906817],[114.61125485883514,-3.8661972731324568],[114.61086621859954,-3.8660444078588796],[114.61098953713469,-3.865805788839353],[114.6109965503154,-3.865802012728423]]]',
                'jenis' => 'polygon',
                'sekolah' => 'sd'
            ],
        ]);
    }
}
