<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('lines')->insert([
            'name' => 'Dressing Beauty by Aldo Coppola',
            'slug' => 'dressing-beauty-by-aldo-coppola',
            'description' => 'Gamma & Bross presents the new "Dressing Beauty" collection by Aldo Coppola. This newly designed concept revolutionizes the way of conceiving a living salon, which changes clothes to suit seasons, fashions, moods and memories. For a look that can always amaze and be renewed, the furniture, which you can "dress and undress", can change at will by choosing the Design from the fabric folder.',
            'image' => 'lines/November2018/mDFhJixDsm700NCq8R8X.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => '9000 Series',
            'slug' => '9000-series',
            'description' => '9000 Series, Welcome to the biosphere',
            'image' => 'lines/November2018/fKakfzsdLDujpYW94DZZ.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Giuguaro Design',
            'slug' => 'giuguaro-design',
            'description' => '"Design is not only form or function, but rather the aesthetic synthesis of both concepts". This is the leading phylosophy which has constantly inspired our research, especially during the selection of our designers. Giugiaro design has taken with its brand an immense store of experience in car design which has been exploited in the realization of this line dedicated exclusively to the most famous worldwide hair-stylist.',
            'image' => 'lines/November2018/KC71Cj7KuEc8CJDW0E65.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'ArtForm',
            'slug' => 'art-form',
            'description' => 'Beauty between invention and imitation of nature.',
            'image' => 'lines/November2018/btFr62WpJGSi5FZC4CDD.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Pop Beauty',
            'slug' => 'pop-beauty',
            'description' => 'Beauty between invention and imitation of nature.',
            'image' => 'lines/November2018/KC71Cj7KuEc8CJDW0E65.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Salon Emotion Polaris Collection L\'Oreal',
            'slug' => 'salon-emotion-polaris-collection-loreal',
            'description' => 'GAMMA & BROSS, in collaboration with L’Oréal, is glad to introduce the new Polaris Collection for “Salon Emotion”. A new furniture line addressed to all beauty salons willing to give their clients a new experience, new furniture that evolutionizes the way of conceiving the living salon. Through our common desire to re-enchant the client’s journey in your salon, we have designed a furniture collection that perfectly adapts to different uses, from the presentation of the products until the creation of a diagnose corner, critical for an effective consultation and offering your knowledge to the client. This chic and modern furniture line will lead your clientele, as well as your team, into the salon of the future!',
            'image' => 'lines/November2018/mDFhJixDsm700NCq8R8X.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Fluid Generation',
            'slug' => 'fluid-generation',
            'description' => 'Beauty between invention and imitation of nature.',
            'image' => 'lines/November2018/btFr62WpJGSi5FZC4CDD.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Spa Logic',
            'slug' => 'spa-logic',
            'description' => 'Beauty between invention and imitation of nature.',
            'image' => 'lines/November2018/mDFhJixDsm700NCq8R8X.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Diamond Line',
            'slug' => 'diamond-line',
            'description' => 'Beauty between invention and imitation of nature.',
            'image' => 'lines/November2018/btFr62WpJGSi5FZC4CDD.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Glow Series',
            'slug' => 'glow-series',
            'description' => 'Beauty between invention and imitation of nature.',
            'image' => 'lines/November2018/fKakfzsdLDujpYW94DZZ.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Black Design by F.A.Porsche',
            'slug' => 'black-design-by-fa-porsche',
            'description' => 'The design philosophy of F.A. Porsche clearly emerges in this collection that integrates technological materials and minimal design. The Porsche approach to develop innovative products starts with forms that are more integral to their intended functions, this idea is clearly visible in the Tsu chair with its single molded plywood frame, in the classic spirit of Eames, that envelopes the body with a particularly masculine styling. The language of technology is similarly reflected in the Black Wash shampoo unit made from a structural resin finished in black lacquer that creates a sinuous line reflecting an automotive profile. The Torix reception desk and Edo styling station are envisioned through extreme minimal shapes detailed with cast aluminum surfaces and ultra technological finishes. The combination of functional, and minimal design with technological innovations is what makes the F.A. Porsche collection a timeless classic.',
            'image' => 'lines/November2018/fKakfzsdLDujpYW94DZZ.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Homme',
            'slug' => 'homme',
            'description' => 'Beauty between invention and imitation of nature.',
            'image' => 'lines/November2018/btFr62WpJGSi5FZC4CDD.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Echoes Collection',
            'slug' => 'echoes-collection',
            'description' => 'Beauty between invention and imitation of nature.',
            'image' => 'lines/November2018/mDFhJixDsm700NCq8R8X.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Bio Logic',
            'slug' => 'bio-logic',
            'description' => 'Beauty between invention and imitation of nature.',
            'image' => 'lines/November2018/btFr62WpJGSi5FZC4CDD.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Nutopia by Karim Rashid',
            'slug' => 'nutopia-by-karim-rashid',
            'description' => 'Rashid applies his manifesto of changing the world with the concept of taking the user to a new level of sensation. The Nutopia collection is centered around Teknowash, a revolutionary system that combines chromo-therapy and an audio surround sound in a total comfort shampoo unit. Rashid’s Sensual chair is made using the most advanced molding process that creates both a structural frame as well as seamless comfort. Further, he uses illuminated forms in both the Human workstation as well as the Komplete desk to create a weightless floating effect. Through the integration of high technology and sculptural forms, Rashid’s Nutopia collection represents the design icons of the beauty industry.',
            'image' => 'lines/November2018/KC71Cj7KuEc8CJDW0E65.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Fashion Collection',
            'slug' => 'fashion-collection',
            'description' => 'The Fashion Collection is a project based on the collaboration between Gamma & Bross and Club House Italia (manufacturer of Fendi Casa), two companies that share the passion for craftsmanship, attention to detail, and for that mix of tradition and innovation that converge in a unique product. The products chosen for the collection were selected with the aim of addressing the luxury market with brand recognition possible working only with a world renowned fashion house. The Crystalcoiff chair is made from a molded plastic polymer with exclusive resin finishes. The Empire mirror has an extruded aluminum frame covered in the embossed branded silver leather. The Fashion Collection represents the highest luxury standard the beauty industry has to offer and recommends the line only for the most exclusive clients.',
            'image' => 'lines/November2018/mDFhJixDsm700NCq8R8X.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('lines')->insert([
            'name' => 'Collezione Privata by Marcel Wanders',
            'slug' => 'collezione-privata-by-marcel-wanders',
            'description' => '“Collezione Privata” is characterized by “Nabucco” an oversized round Island workstation that resembles a small facial mirror only it is 185cm in diameter. The “Aida” chair made from a lacquered outer frame with a trim finished in a Wanders pattern, is completed by a hallmark flower made from cast aluminium. Marcel’s approach to the shampoo unit was to create both comfort and privacy, “Va pensiero” combines overstuffed seating with an upholstered surround with perhaps the most important element a large shampoo bowl that allows maximum flexibility. The “Otello“ workstation is made from a continuous aluminium frame with a classic profile that is repeated on a grand scale with the “Alzira” desk finished in white lacquer. Marcel’s attention to detail is reflected in the “Falstaff” foot rest with its classic spindles as well as the “Libiam” hair dryer holder that resembles a champagne bucket. Marcel Wanders designs reflect modern and elegant sophistication, with a touch of his playful fantasy. “The collection I have designed for Gamma & Bross is inspired by the salon experience of the past, where women would spend time beautifying themselves. The collection is titled “Collezione Privata” (private collection) and with the design I have sought to make the salon experience beautiful, personal and intimate. Above all, I believe women’s tools should be jewels, so all elements of the collection while technical equipment is first and foremost beautiful pieces of furniture.“ M. Wanders',
            'image' => 'lines/November2018/btFr62WpJGSi5FZC4CDD.jpeg',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
