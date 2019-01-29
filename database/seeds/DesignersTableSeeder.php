<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        DB::table('designers')->insert([
            'name' => 'Fendi Casa',
            'slug' => 'fendi-casa',
            'description' => 'The Fendi Casa Home Collection was launched in 1989 becoming a new parameter of excellence and creativity. The concept behind Fendi Casa is to ‘dress up rooms’ taking advantage of the distinctive experience of the brand plus the collaboration of Alberto Vignatelli and his Club House Italia. Fendi Casa also showed its creative vitality in the contract sector by designing the interiors for the new Crn 128 yacht of the Ferretti Group.
            The yacht is originally furnished with sofas, chandeliers, carpets, fabrics, armchairs and coffee tables covered with ivory and dark brown leathers. Skillfully blended designs, a trademark of the Fendi Casa style famous and renowned worldwide.',
            'image' => 'designers/November2018/bwbbpOcTxBDQ8xvEPLzx.jpeg',
            'website' => 'www.fendicasa.com',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('designers')->insert([
            'name' => 'Marcel Wanders',
            'slug' => 'marcel-wanders',
            'description' => 'Marcel Wanders is a product and interior designer who drew international recognition for his Knotted Chair produced by Droog Design in 1996. His work is ubiquitous; he designs for leading international companies such as Flos, Alessi, Puma, KLM Royal Dutch Airlines, MAC Cosmetics, Cappellini, B&B Italia, Moroso and Target. Wanders also designs for architectural projects, such as the Kameha Grand hotel in Bonn, the Mondrian South Beach hotel in Miami and the Villa Moda store in Bahrain. In addition to running his studio, Wanders is co-founder and Artistic Director of the successful design label Mooi (2001). He exhibits widely and his work is included in such significant museum collections as MoMA New York, The Stedelijk Museum, Amsterdam. Wanders has further published numerous books and appearing in such publications as the New York Times, Domus, The Financial Times and Wallpaper Magazine.',
            'image' => 'designers/November2018/kVQUI3c0jFUda5FyKtEK.jpeg',
            'website' => 'www.marcelwanders.com',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('designers')->insert([
            'name' => 'Karim Rashid',
            'slug' => 'karim-rashid',
            'description' => 'Karim Rashid is regarded as a legend in the world of design. To date he has had some 3000 objects put into production, which turns him into of the most prolific designer the world over. Karim Rashid has designed luxury goods, hi-tech products, objects, as well as brand identities, restaurants, hotels and multi-purpose centres. However, his work is not focused on exclusive environments only. Quite the opposite. He pursues the idea that design should be an experience every person, from any social class, can share in. Therefore, he now travels the world as a frequent guest lecturer at universities and conferences to speak about the importance of style, taste and practicality in our every day life. His work is in the permanent collections of twenty museums and galleries worldwide, including the international design museum Die Neue Sammlung in Munich, that selected for its permanent exhibition the multisensorial shampoo station Teknowash, designed by Karim Rashid for Gamma & Bross.',
            'image' => 'designers/November2018/CJ1DMwMeV4Iybz7mqk7u.jpeg',
            'website' => 'http://www.karimrashid.com/',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('designers')->insert([
            'name' => 'Giugiaro Design',
            'slug' => 'giugiaro-design',
            'description' => 'Giugiaro Design is today the industrial and transport design division of Italdesign. It was established in 1981 by Mr. Giorgetto Giugiaro, present Chairman of the Group, leading a highly qualified team of business and design professionals in line with international market\'s trends and expectations. Today Giugiaro Design is based in the Moncalieri HQ and ranks among the leading companies in the field of industrial design worldwide, for its size, for the variety and quality of its services, its know-how and activity on the international markets.At the base of Giugiaro Design\'s versatility is the adoption of a working method divided into steps that can be used for any product and enables to develop a project for the various possible fields of application, sticking to the same exacting approach. Giugiaro Design has representative offices in Germany, France, Spain, Japan, China, Russia, Mexico and Brazil. Since 1996, Fabrizio Giugiaro is the Styling Director.',
            'image' => 'designers/November2018/LLXqLlQxsbc98blHJxUK.jpeg',
            'website' => 'giugiaro-design.com',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('designers')->insert([
            'name' => 'F.A. Porsche',
            'slug' => 'fa-porsche',
            'description' => 'Porsche deals not only with motor vehicles. The Porsche Design Studio was opened in Stuttgart in 1972 by professor Ferdinand Alexander Porsche, the man who designed the Porsche 911, grandson of the Porsche founder. Two years later this Porsche Design Studio was moved to Zell am See, Austria. The 911 quickly became the quintessential sports car and a design classic, along with many other products that professor F. A. Porsche designed. It stays on the top until now. Over the last few decades, numerous classic men\'s accessories such as watches, glasses and writing utensils were created and marketed worldwide under the "Porsche Design" brand. At the same time, many industrial products and household- and consumer goods for internationally recognized clients were developed under the "Design by F.A. Porsche" brand. All of the Studio’s design work is distinguished by clarity and functionality of form, careful selection of materials, and high-quality workmanship that combines traditional craftsmanship with state-of-the-art technology. Since 2005, all products have been developed and marketed under the brand Porsche Design. Porsche Design products have won accolades at several international competitions for their exceptional quality and design. The IF Forum Hanover, the Red Dot Award, and the EISA Award are some of them. The Porsche designs can even be spotted in the Museum of Modern Art, New York. The Porsche\'s designs are reflections of Porsche\'s personal philosophy: "Timeless good design is not just a matter of superficial styling. Rather, it is a process that takes place from within, as part of the formal implementation of a functional principle." Each of Porsche\'s designs is reduced to their essential function to impart the clear and linear shape that is the signature of Porsche. Employing the most appropriate and advanced materials, the company fabricates their remarkable designs.',
            'image' => 'designers/November2018/2x2Zxga0tSrOgf06GjUD.jpeg',
            'website' => 'faporsche.com',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('designers')->insert([
            'name' => 'Anton Kobrinetz',
            'slug' => 'anton-kobrinetz',
            'description' => 'Product and interior designer, Anton Paul Kobrinetz was born in 1965 in Chicago, USA. Studied industrial design at the University of Illinois at Chicago. Coordinator of the Milan foreign study program 1986. Collaborated with Maurizio Morgantini (President ADI foundation) in 1987 with the exhibition Telematic Ulysses the futuristic office, salone del mobile. From 1987 to 1989 worked as a product designer in Chicago specializing on products for the pharmaceutical industry with clients such as Abbott Laboratories and Boehringer Ingelheim. In 1990 moved to Milan and began to collaborate with experimental design groups such as Studio Alchimia (Alessandro Guerriero). In 1992 returned to Chicago and opened The Concept factory a design and manufacturing facility producing non industrial custom projects focusing on the branded space. In 2001 established an office in Milan and continued to develop projects in the United States while collaborating with Italian companies. Beauty and wellness exhibition. Has also taught design at the Politecnic of Milan as well as NABA (Nuova Accademia Di Belle Arti Milano). Since 2004 he is working as Gamma & Bross Art Director for which he designed among others the top selling collections "9000 Series" and Fluid Generation, as well as developed projects for several customers including l\'Oreal USA and Aldo Coppola.',
            'image' => 'designers/November2018/8cmnswJDHe6XaRxbHVRV.jpeg',
            'website' => 'kobrinetz.com',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
        DB::table('designers')->insert([
            'name' => 'Aldo Coppola',
            'slug' => 'aldo-coppola',
            'description' => 'In 1965 Aldo opened his first salon on Via Manzoni in Downtown Milan and began working as a Hair Stylist for the photo shoots of top italian and international magazines. He also created avant-garde Hairstyles for the Fashion Shows of some of the world\'s most famous designers (Giorgio Armani, Versace, Gianfranco Ferré, Valentino, and many more). The company grew, opening new directly-owned salons in strategic urban areas, establishing the first Italian freelance hair stylist and makeup artist agency for fashion shows, advertising campaigns, magazines and TV, promoting the Aldo Coppola franchising formula, creating the Academy project, and selling Aldo Coppola products and accessories. Today the company has diversified, adding new brands such as Go Coppola and Shatush and expanding on an international level. The relationship between Aldo and his children, which is based on trust, and the artistic skills of Aldo and his daughter Monica as well as the business expertise of Aldo Jr, has made it possible to create a family-run company composed of talented people of value.',
            'image' => 'designers/November2018/XA0qIwbrJeWOCpKpZhgh.jpeg',
            'website' => 'aldo-coppola.com',
            'created_at' => new \DateTime(),
            'updated_at' => new \DateTime()
        ]);
    }
}
