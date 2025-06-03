<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert(
            [
                [
                    'conference_id' => 1,
                    'name' => 'Home',
                    'html' => '<p><strong>Welcome to the 32nd International Symposium Animal Science Days 2024<br><br><span class="bg-boku">The deadline for submitting abstracts to ASD2024 has been extended. The new deadline is July 31, 2024.</span></strong></p><p>Dear colleagues, researchers, students, experts,<br>Dear friends,<br><br>Welcome to the <strong>32nd International Symposium Animal Science Days 2024</strong> (ASD 2024) in Oberaichwald near Faaker See, Carinthia, Austria, which will take place from <strong>2 to 4 October 2024</strong>.<br><br>The conference will feature keynote speakers, inspiring oral and poster presentations selected from participants\' submissions, and an exhibition of sponsors. A field trip and a half-day course on crossbreeding is also planned.<br><br>The ASD Symposium is an annual meeting with the aim to create a platform for Central and Eastern European colleagues and for interested academics and professionals from around the globe in the field of Animal Sciences to exchange ideas and to enable efficient collaboration. We particularly focus on promoting the new generation of young researchers, scientists and experts. Launched in 1993 with three participating countries, the consortium now includes 8 universities from Austria, Croatia, the Czech Republic, Hungary, Italy, Slovakia and Slovenia.<br><br>The impact of this regional meeting of researchers and faculty members from eight universities was also recognized by the European Federation for Animal Science (EAAP), whose goal is to improve knowledge and dissemination of research results in farm animal science. Therefore, ASD 2024 is organised under the <a href="https://www.eaap.org/" target="_blank" rel="noopener noreferrer">patronage of the EAAP</a>.</p><p><img src="/src/assets/images/csm_EAAP-Logo_88219270ae.jpg"></p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 1,
                    'name' => 'About us',
                    'html' => '<p><strong>About us</strong><br><br><strong>Participating universities:</strong><br><a href="https://www.bf.uni-lj.si/en/" target="_blank" rel="noopener noreferrer">University of Ljubljana, Biotechnical Faculty, Department of Animal Science, Ljubljana, Slovenia</a><br><a href="https://www.agr.unizg.hr/en/group/285/About+Us" target="_blank" rel="noopener noreferrer">University of Zagreb, Faculty of Agriculture, Zagreb, Croatia</a><br><a href="https://www.unios.hr/en/" target="_blank" rel="noopener noreferrer">Josip Juraj Strossmayer University of Osijek, Faculty of Agrobiotechnical Sciences Osijek, Osijek, Croatia</a><br><a href="https://boku.ac.at/en/">BOKU University, Vienna, Austria</a><br><a href="https://www.unipd.it/en/" target="_blank" rel="noopener noreferrer">University of Padua, Padua, Italy</a><br><a href="https://www.czu.cz/en" target="_blank" rel="noopener noreferrer">Czech University of Life Sciences Prague, Prague, Czech Republic</a><br><a href="https://en.uni-mate.hu/" target="_blank" rel="noopener noreferrer">Hungarian University of Agricultural and Life Sciences, Hungary</a><br><a href="https://www.uniag.sk/en/main-page" target="_blank" rel="noopener noreferrer">Slovak University of Agriculture in Nitra, Nitra, Slovakia</a></p><p><strong>Organizing Committee:</strong><br>Birgit F&uuml;rst-Waltl<br>Johann S&ouml;lkner<br>Werner Zollitsch<br>Peter Dovč<br>Radovan Kasarda<br>Sarah-Joe Burn<br>Michaela B&uuml;rtlmair<br>Wilhelm Knaus<br>Daniela Kottik<br>G&aacute;bor M&eacute;sz&aacute;ros<br>Sarah Zinggl</p><p><strong>Scientific Committee:</strong><br>Martino Cassandro, Italy<br>Gulio Cozzi, Italy<br>Ino Čurik, Croatia<br>Peter Dovč, Slovenia<br>Birgit F&uuml;rst-Waltl, Austria<br>Radovan Kasarda, Slovakia<br>Wilhelm Knaus, Austria<br>Ivona Djurkin Ku&scaron;ec, Croatia<br>Vladimir Margeta, Croatia<br>Istv&aacute;n Nagy, Hungary<br>Kre&scaron;imir Salajpal, Croatia<br>Johann S&ouml;lkner, Austria<br>Nina Moravč&iacute;kov&aacute;, Slovakia<br>Lubo&scaron; Vostr&yacute;, Czech Republic<br>Silvo Žgur, Slovenia<br>Minja Zorc, Slovenia</p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 1,
                    'name' => 'Contact',
                    'html' => '<p><strong>Contacts:</strong><br>Michaela B&uuml;rtlmair, <a href="https://boku.ac.at/en/agri/nuwi/tagungen-seminare/aktuell/animal-science-days-2024/contact" data-mailto-token="wksvdy4kcn,:,.Jlyue8km8kd" data-mailto-vector="10">asd2024(at)boku.ac.at</a>, tel.: +43 1 47654-93200</p><p><strong>Please note:<br>Registration, abstract submission and organizing accommodation must be done in three separate steps.</strong></p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 1,
                    'name' => 'Accomodation',
                    'html' => '<p><strong>Venue/Accommodation</strong></p><p><a href="https://www.schoenleitn.at/en/" target="_blank" rel="noopener noreferrer">Naturel Hotels &amp; Resorts Dorf SCH&Ouml;NLEITN ****</a><br>Dorfstra&szlig;e 26<br>9582 Oberaichwald<br>Austria<br>Tel. +43 5 023 84<br>Email: <a href="https://boku.ac.at/en/agri/nuwi/tagungen-seminare/aktuell/animal-science-days-2024/accommodation" data-mailto-token="wksvdy4sxpyJxkdebovrydovc8myw" data-mailto-vector="10">info(at)naturelhotels.com</a></p><p>Virtual tours:<br><a href="https://www.schoenleitn.at/en/hotel-faaker-see-interactive-plan/" target="_blank" rel="noopener noreferrer">Interactive plan</a><br><a href="https://www.naturelhotels.com/en/seminar-hotel-carinthia-meeting-rooms/" target="_blank" rel="noopener noreferrer">Meeting rooms</a><br><br>ASD 2024 conditions:<br><br>&euro; 104 pp/night (single)<br>&euro; 86 pp/night (double)<br>&euro; 67 pp/night (triple or quadruple)<br>From 2-4 persons - 2 separate rooms<br>Excl. tax, approx. &euro; 2.20/pp/day<br>Alternatively, a more luxurious variant is available: Deluxe Suite &euro; 166 pp with own sauna<br><br>Included: Breakfast, wellness and fitness facilities, wifi; transfer from railway station Villach or Faaker See (please arrange with Hotel)<br><br>For cancellation policy please see <a href="https://www.naturelhotels.com/en/condtions-terms/" target="_blank" rel="noopener noreferrer">www.naturelhotels.com/en/condtions-terms/</a><br><br><strong>Rooms are only guaranteed until 2nd May 2024 &ndash; so please make reservations as soon as possible</strong><br><br>Please contact the Hotel for room reservations via <a href="https://boku.ac.at/en/agri/nuwi/tagungen-seminare/aktuell/animal-science-days-2024/accommodation" data-mailto-token="wksvdy4sxpyJxkdebovrydovc8myw" data-mailto-vector="10">info(at)naturelhotels.com</a> and indicate <strong>&ldquo;BOKU&rdquo;</strong></p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 1,
                    'name' => 'Registration',
                    'html' => '<p><strong>Registration</strong></p><p>Symposium registration fee:<strong>&nbsp; 220 EUR until July 31, 2024<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 300 EUR from August 1, 2024</strong></p><p>The registration fee includes:<br>&bull;&nbsp;&nbsp;&nbsp;&nbsp; Participation in the symposium program<br>&bull;&nbsp;&nbsp;&nbsp;&nbsp; Symposium materials<br>&bull;&nbsp;&nbsp;&nbsp;&nbsp; Coffee breaks<br>&bull;&nbsp;&nbsp;&nbsp;&nbsp; Poster Sessions incl. lunch<br>&bull;&nbsp;&nbsp;&nbsp;&nbsp; Scientific summary and dinner on Thursday, October 3, 2024<br>&bull;&nbsp;&nbsp;&nbsp;&nbsp; Field trip (self-drive or carpool)</p><p>Course on crossbreeding registration fee: 25 EUR until July 31, 2024<br>The fee includes:<br>&bull;&nbsp;&nbsp;&nbsp;&nbsp; Participation in the course<br>&bull;&nbsp;&nbsp;&nbsp;&nbsp; Coffee break</p><p><strong>Please transfer the registration fee to the following account:</strong></p><p><strong>NOTE:</strong> if an invoice is needed, please contact <a href="https://boku.ac.at/en/agri/nuwi/tagungen-seminare/aktuell/animal-science-days-2024/registration" data-mailto-token="wksvdy4kcn,:,.Jlyue8km8kd" data-mailto-vector="10">asd2024(at)boku.ac.at</a> <strong>BEFORE</strong> transfering the registration fee!</p><p>Bank name: Raiffeisenlandesbank Nieder&ouml;sterreich-Wien&nbsp;&nbsp; &nbsp;<br>Bank Address: Friedrich-Wilhelm-Raiffeisenplatz 1, 1020 Wien &nbsp;<br>Account Number: 09300500512<br>Reference: 7932015937&nbsp;&nbsp;&nbsp; &nbsp;<br>IBAN: AT50 3200 0093 0050 0512&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<br>SWIFT Code: RLNWATWWXXX&nbsp;&nbsp;&nbsp; &nbsp;<br>&nbsp;&nbsp; &nbsp;<br>Account Holder: Universit&auml;t f&uuml;r Bodenkultur&nbsp; &nbsp;<br>Address: Gregor Mendel-Stra&szlig;e 33, 1180 Wien&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<br>VAT Number: ATU16285008&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<br>&nbsp;<br>Details of payment: Registration fee / ASD2024 / participant\'s name and surname<br>Please download and complete the<strong> <a href="https://boku.ac.at/fileadmin/data/H03000/H93000/H93200/ASD2024/Registration_form_2024.pdf">REGISTRATION FORM (.pdf)</a></strong> and return it by email to <a href="https://boku.ac.at/en/agri/nuwi/tagungen-seminare/aktuell/animal-science-days-2024/registration" data-mailto-token="wksvdy4kcn,:,.Jlyue8km8kd" data-mailto-vector="10">asd2024(at)boku.ac.at</a></p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 1,
                    'name' => 'Call for submission',
                    'html' => '<p><strong>For authors</strong></p><p><strong>Guidelines for oral presentations and posters</strong></p><p>All presentations, oral and poster, must be prepared in PowerPoint (file extension .pptx).<br>Oral presentations should last 15 minutes, including 2-3 minutes for discussion. Posters will be presented in short presentations - a total of 5 minutes (3+2) will be reserved for each poster.<br><br><strong>Call for submissions<br><br><span class="bg-boku">The deadline for submitting abstracts to ASD2024 has been extended. The new deadline is July 31, 2024.</span></strong><br><br>Abstract submission is required, while paper submission is optional. Further information regarding paper options will follow.<br><br>Abstracts should be sent to: <a href="https://boku.ac.at/en/agri/nuwi/tagungen-seminare/aktuell/animal-science-days-2024/call-for-submissions" data-mailto-token="wksvdy4kcn,:,.Jlyue8km8kd" data-mailto-vector="10">asd2024(at)boku.ac.at</a> as MS Word file (.docx) prepared according to the <strong><a href="https://boku.ac.at/fileadmin/data/H03000/H93000/H93200/ASD2024/Lastname_ASD2024.docx">template</a></strong> for an abstract (please name it &ldquo;Lastname_ASD2024.docx&rdquo;).<br><br>The deadline for abstract submission July 31. All abstracts will be published in the electronic book of abstracts of the symposium.<br><br>The ASD Scientific Committee reserves the right to return abstracts for revision if they do not conform to the form specified in the template. Please note that presenters with accepted abstracts are expected to register and pay for their attendance to the symposium.</p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 1,
                    'name' => 'Scientific program',
                    'html' => '<p><strong>Scientific program</strong><br><br><strong><a href="https://boku.ac.at/fileadmin/data/H03000/H93000/H93200/ASD2024/programme_final.pdf">download (.pdf)</a></strong></p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 1,
                    'name' => 'Short course',
                    'html' => '<section id="c614767"><p>(Very) Short Course, 1.10.2024 01:00 pm</p><p>Genetics of Crossbreeding<br>Hans S&ouml;lkner, Negar Khayatzadeh</p><p>Background<br>Crossbreeding is very frequently practiced in livestock populations, either producing terminal crosses or forming composite breeds. Still, the genetic mechanisms causing hybrid effects (heterosis) are not well understood. This short course aims to provide some basic understanding of how to find levels of crossbreeding from genomic data and to estimate and map heterosis effects with data produced in crossbreeding experiments as well as from composite breeds.</p><p>Contents<br>Use of high throughput genomic data for predicting levels of crossbreeding/admixture<br>-&gt; global admixture<br>-&gt; local admixture<br>Heterosis: what it is and why it is important in livestock breeding<br>-&gt; Concept of dominance and epistatic loss<br>-&gt; Terminal crossbreds vs composite breeds<br>Estimation of heterosis effects (breed additive, dominance and epistatic)<br>-&gt; Pedigree based approach: Effect coding done from types of crosses (Guinea pigs from Peru)<br>-&gt; Genomic approach: effect coding from breed ancestry of SNP (Swiss Fleckvieh)<br>Mapping genes responsible for heterosis<br>-&gt; Examples from maize and rice<br>-&gt; Results from Swiss Fleckvieh<br>-&gt; Data from advanced intercross lines of chicken</p><p>&nbsp;</p></section><section id="c625074"><p>Heterosis. What it is and why it is important in livestock breeding download (pdf.)</p><p>Estimation of admixture at global and local levels. Concept and methodology download (pdf.)</p></section><p>&nbsp;</p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 1,
                    'name' => 'Sponsors',
                    'html' => '<p><a href="http://www.neogen.com/" target="_blank" rel="noopener"><img src="/src/assets/images/csm_Official_Neogen_logo_Green_PANTONE-6160-CP_c2e114d713.jpg"></a></p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 1,
                    'name' => 'Book abstracts',
                    'html' => '<p>Link to the BOKU library:&nbsp;</p><p><a href="https://permalink.obvsg.at/bok/AC17395097" target="_blank" rel="noopener noreferrer">https://permalink.obvsg.at/bok/AC17395097</a></p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 2,
                    'name' => 'conf2 page1',
                    'html' => '<p>paragraph1</p><p>paragraph</p><p>paragraph3</p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'conference_id' => 2,
                    'name' => 'conf2 page2',
                    'html' => '<p>secondpage</p><p>paragraph</p><p>paragraph3</p>',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
