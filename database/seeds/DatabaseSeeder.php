<?php

use Illuminate\Database\Seeder;


use App\Gemme;
use App\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $gemme = new Gemme();
        $gemme -> nom = 'Aigue-marine';
        $gemme -> description = 'L\'aigue-marine (du latin aqua marina, « eau de mer ») est un minéral du groupe des silicates, sous-groupe des cyclosilicates. C\'est une variété de béryl, transparente, de couleur bleu clair évoquant l\'eau de mer, d\'apparence proche de la topaze. C\'est une pierre fine ; autrefois appelée également pierre semi-précieuse, cette appellation est aujourd’hui interdite du point de vue commercial. ';
        $gemme -> symbolisme = 'La couleur marine de ce minéral fait qu\'il a été utilisé comme talisman pour les marins. Symbole de fidélité entre jeunes mariés, c\'est un cadeau censé leur garantir un mariage heureux. Ce béryl symbolise 23 ans de mariage. ';
        $gemme -> save();
        $gemme = new Gemme();
        $gemme -> nom = 'Grenat';
        $gemme -> description = 'Grenat désigne une famille de minéraux du groupe des nésosilicates cristallisant dans le système cristallin cubique (ou isométrique). Les grenats de qualité gemme sont des pierres fines. Employé seul, le terme grenat est quasi synonyme de pyrope-almandin. La plupart des grenats sont en effet de composition intermédiaire (solution solide) entre ces deux espèces (pôles purs)2. ';
        $gemme -> symbolisme = 'Le grenat est considéré comme une pierre sacrée par nombre de tribus indiennes d’Amérique. Le grenat serait supposé, selon des croyances populaires, protéger des blessures et du poison, arrêter les saignements, symboliser la vérité et la fidélité, et apporter prospérité. ';
        $gemme -> save();
        $gemme = new Gemme();
        $gemme -> nom = 'Émeraude';
        $gemme -> description = 'L\'émeraude est un minéral, du groupe des silicates, sous-groupe des cyclosilicates, variété de béryl, dont la couleur verte provient de traces de chrome, de vanadium et parfois de fer. L\'émeraude est, avec le diamant, le saphir et le rubis, l\'une des quatre pierres précieuses. ';
        $gemme -> symbolisme = 'L\'émeraude symbolise l\'espérance et le renouveau. Pierre de la sagesse, l\'emeraude favorise le discernement, la vérité.';
        $gemme -> save();
        $gemme = new Gemme();
        $gemme -> nom = 'Améthyste';
        $gemme -> description = 'L\'améthyste est une variété de quartz violet (dioxyde de silicium), de diaphane à translucide, dont la teinte est due aux traces de fer. Ce minéral est utilisé en joaillerie et classé comme pierre fine. Le mot vient du grec ancien ἀμέθυστος / améthustos, adjectif verbal composé du verbe μεθύω / methúô (« être ivre »), et du préfixe privatif ἀ- / a- 4. La pierre aurait été ainsi nommée parce qu\'elle a la couleur du vin coupé d\'eau, dont le titre alcoolique est moindre';
        $gemme -> symbolisme = 'Le poète Rémy Belleau (1528-1577) a composé un poème mythologique intitulé L\'améthyste, ou Les Amours de Bacchus et d\'Améthyste8, dans lequel il imagine Bacchus éperdument épris de la belle Améthyste et la poursuivant avec fureur. Améthyste aux beaux yeux implore alors Diane, déesse de la chasteté, qui a pitié d\'elle et la transforme en pierre. Bacchus, frustré, décrète alors que quiconque boira dans une coupe faite de cette pierre ne pourra pas savourer l\'ivresse de son vin. Et la pierre prit en outre la couleur du vin. ';
        $gemme -> save();
        $gemme = new Gemme();
        $gemme -> nom = 'Malachite';
        $gemme -> description = 'La malachite a été citée par Pline en 77 ap.J.C. Le nom de ce minéral vient du latin malachites déformation du grec ancien molochē (μολóχη), variante de malachē (μαλάχη), signifiant selon le contexte : « mollesse, voluptueux, efféminé », en allusion non à la couleur mais à la plante surnommée Mauve en raison de la mollesse de ses courbes.';
        $gemme -> symbolisme = 'Plusieurs mythologies l\'associent au divin, à la vie et à la fertilité. La lithothérapie lui prête aussi de nombreux effets bénéfiques tant sur le plan du corps que de l\'esprit.';
        $gemme -> save();
    }
}
