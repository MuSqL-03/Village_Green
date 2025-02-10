<?php

namespace App\DataFixtures;

use App\Entity\Products;
use App\Entity\Categories;
use App\Entity\Fournisseur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProductsFixtures extends Fixture implements DependentFixtureInterface
{
    public function __construct(private SluggerInterface $slugger) {}

    public function load(ObjectManager $manager): void
    {
        $products = [
                       // Guitar Electric
                       ['Modèles à Découper Unique', 'Guitar en bois de haute qualité avec finition lisse.', 20000, 15, 'git1.jpg', 'category_electric_guitar', 'fournisseur_1'],
                       ['Sets Guitare', 'Set complet de guitare électrique avec accessoires.', 21000, 15, 'git2.jpg', 'category_electric_guitar', 'fournisseur_1'],
                       ['Modèles ST', 'Guitare électrique ST avec son clair et précis.', 22000, 15, 'git3.jpg', 'category_electric_guitar', 'fournisseur_1'],
                       ['Modèles T', 'Guitare T de style classique avec une touche moderne.', 23000, 15, 'git17.jpg', 'category_electric_guitar', 'fournisseur_1'],
           
                       // Guitar Classic
                       ['1/8 Taille Guitar', 'Guitare classique pour débutants, taille 1/8.', 14000, 15, 'git5.jpg', 'category_classical_guitar', 'fournisseur_2'],
                       ['1/4 Taille Guitar', 'Guitare classique taille 1/4, idéale pour les jeunes musiciens.', 13000, 15, 'git6.jpg', 'category_classical_guitar', 'fournisseur_2'],
                       ['1/2 Taille Guitar', 'Guitare classique pour enfants, taille 1/2, facile à jouer.', 12000, 15, 'git7.jpg', 'category_classical_guitar', 'fournisseur_2'],
                       ['3/4 Taille Guitar', 'Guitare classique 3/4 pour les jeunes musiciens en progression.', 12000, 15, 'git18.jpg', 'category_classical_guitar', 'fournisseur_2'],
           
                       // Guitar Acoustic
                       ['Guitares Dread Nought', 'Guitare acoustique au son profond, idéale pour le jeu en solo.', 23000, 15, 'git9.jpg', 'category_acoustic_guitar', 'fournisseur_3'],
                       ['Guitares Jumbo', 'Guitare acoustique jumbo avec un son plein et puissant.', 11000, 15, 'git10.jpg', 'category_acoustic_guitar', 'fournisseur_3'],
                       ['Guitares Folks', 'Guitare acoustique compacte de style folk.', 16000, 15, 'git11.jpg', 'category_acoustic_guitar', 'fournisseur_3'],
                       ['Guitares Round back', 'Guitare acoustique au dos arrondi, offrant un son distinctif.', 16000, 15, 'git12.jpg', 'category_acoustic_guitar', 'fournisseur_3'],
           
                       // Bass Electric
                       ['Basses Jazz 4 Cordes', 'Basse électrique Jazz 4 cordes avec son clair et précis.', 37000, 15, 'git13.jpg', 'category_bass_guitar', 'fournisseur_4'],
                       ['Basses Jazz 5 Cordes', 'Basse électrique Jazz 5 cordes avec un son puissant.', 76000, 15, 'git14.jpg', 'category_bass_guitar', 'fournisseur_4'],
                       ['Basses Electric', 'Basse électrique 4 cordes avec un ton riche.', 76000, 15, 'git14.jpg', 'category_bass_guitar', 'fournisseur_4'],
                       ['Autres Basses Electriques', 'Basse électrique de haute qualité avec finition soignée.', 76000, 15, 'git16.jpg', 'category_bass_guitar', 'fournisseur_4'],
           
                       // Drums Acoustic
                       ['Batteries Acoustiques Complètes', 'Set complet de batterie acoustique, qualité supérieure.', 80000, 15, 'bat1.jpg', 'category_acoustic_drums', 'fournisseur_5'],
                       ['Caisses Claires Bois', 'Caisses claires en bois de qualité supérieure.', 60000, 15, 'bat2.jpg', 'category_acoustic_drums', 'fournisseur_5'],
                       ['Stand Toms', 'Supports pour toms en métal robuste.', 60000, 15, 'bat3.jpg', 'category_acoustic_drums', 'fournisseur_5'],
                       ['Sets de Fûts/Shell Sets', 'Set de fûts de batterie acoustique, qualité premium.', 60000, 15, 'bat13.jpg', 'category_acoustic_drums', 'fournisseur_5'],
           
                       // Drums Electronic
                       ['Electronic Drumkits', 'Kit de batterie électronique avec une gamme étendue de sons.', 19000, 15, 'bat4.jpg', 'category_electronic_drums', 'fournisseur_6'],
                       ['Peds de Grosse Caisse', 'Pédale de grosse caisse électronique, réactive et précise.', 14000, 15, 'bat5.jpg', 'category_electronic_drums', 'fournisseur_6'],
                       ['Percussion & Sampling Pads', 'Pads de percussion et échantillonnage pour batterie électronique.', 14000, 15, 'bat6.jpg', 'category_electronic_drums', 'fournisseur_6'],
                       ['Electronic Bass', 'Basse électronique avec des sons puissants et profonds.', 14000, 15, 'bat14.jpg', 'category_electronic_drums', 'fournisseur_6'],
           
                       // Drums Percussion
                       ['Congas', 'Congas en bois massif pour un son percussif riche.', 75000, 15, 'bat7.jpg', 'category_percussion_drums', 'fournisseur_7'],
                       ['Tambours à Main', 'Tambours à main avec une surface lisse et un son clair.', 97000, 15, 'bat8.jpg', 'category_percussion_drums', 'fournisseur_7'],
                       ['Darboukas & Doumbeks', 'Darboukas et Doumbeks pour musique orientale.', 97000, 15, 'bat9.jpg', 'category_percussion_drums', 'fournisseur_7'],
                       ['Autres Percussions', 'Percussions variées de haute qualité pour tous styles musicaux.', 97000, 15, 'bat15.jpg', 'category_percussion_drums', 'fournisseur_7'],
           
                       // Drums Marching
                       ['Cymbals de Défilé', 'Cymbales de défilé avec un son clair et vibrant.', 15000, 15, 'bat11.jpg', 'category_marching_drums', 'fournisseur_1'],
                       ['Cymbals de Défilé 17', 'Cymbales de défilé de taille 17" pour des performances intenses.', 17000, 15, 'bat12.jpg', 'category_marching_drums', 'fournisseur_2'],
                       ['Cymbals de Défilé 19', 'Cymbales de défilé 19", puissantes et solides.', 17000, 15, 'bat16.jpg', 'category_marching_drums', 'fournisseur_2'],
                       ['Cymbals de Défilé 21', 'Cymbales de défilé 21" pour des sons plus profonds et riches.', 17000, 15, 'bat17.jpg', 'category_marching_drums', 'fournisseur_2'],
           
                       // Pianos
                       ['Pianos Numériques', 'Piano numérique avec une réponse réaliste et des sons variés.', 16000, 15, 'pi7.jpg', 'category_piano', 'fournisseur_5'],
                       ['Pianos à Queue Numériques', 'Piano à queue numérique avec un son de concert.', 16500, 15, 'pi8.jpg', 'category_piano', 'fournisseur_7'],
                       ['Pianos Numériques Compacts', 'Piano numérique compact, idéal pour les petits espaces.', 16500, 15, 'pi9.jpg', 'category_piano', 'fournisseur_7'],
                       ['Pianos Droits', 'Piano droit numérique avec une belle résonance.', 16500, 15, 'pi10.jpg', 'category_piano', 'fournisseur_7'],
           
                       // Keyboards
                       ['Piano de Scène', 'Piano de scène numérique avec un toucher professionnel.', 42000, 15, 'pi1.jpg', 'category_keyboard', 'fournisseur_7'],
                       ['Claviers Arrangeurs Haut de Gamme', 'Clavier arrangeur avec des fonctionnalités avancées.', 19000, 15, 'pi2.jpg', 'category_keyboard', 'fournisseur_3'],
                       ['Claviers Roland', 'Clavier Roland avec un son riche et dynamique.', 19000, 15, 'pi3.jpg', 'category_keyboard', 'fournisseur_3'],
                       ['Clavia Nord', 'Clavier Clavia Nord pour les performances en direct.', 19000, 15, 'pi4.jpg', 'category_keyboard', 'fournisseur_3'],
           
                       // Master Keyboards
                       ['Claviers Maîtres Jusqu\'à 12 Touches', 'Clavier maître 12 touches, compact et précis.', 15000, 15, 'pi5.jpg', 'category_master_keyboard', 'fournisseur_2'],
                       ['Roland FP-10 set', 'Clavier Roland FP-10 avec accessoires, idéal pour les musiciens débutants.', 86000, 15, 'p6.jpg', 'category_master_keyboard', 'fournisseur_3'],
                       ['Claviers Maîtres Jusqu\'à 25 Touches', 'Clavier maître 25 touches avec une grande variété de sons.', 86000, 15, 'p11.jpg', 'category_master_keyboard', 'fournisseur_3'],
                       ['Arturia', 'Clavier Arturia avec des fonctionnalités modulables pour tous types de musiciens.', 86000, 15, 'p12.jpg', 'category_master_keyboard', 'fournisseur_3'],
           
                       // Accordions
                       ['Accordéons Pianos', 'Accordéon piano à la fois classique et moderne.', 79000, 15, 'acor1.jpg', 'category_accordion', 'fournisseur_2'],
                       ['Accordéons de Styrie', 'Accordéon de Styrie pour un son authentique et puissant.', 42000, 15, 'acor2.jpg', 'category_accordion', 'fournisseur_2'],
                       ['Accordéons Spéciaux', 'Accordéons spéciaux pour des performances uniques.', 42000, 15, 'acor3.jpg', 'category_accordion', 'fournisseur_2'],
                       ['Accordéons à Boutons', 'Accordéon à boutons pour un son traditionnel.', 42000, 15, 'acor4.jpg', 'category_accordion', 'fournisseur_2'],
           
                       // Acoustic Traditional Instruments
                       ['Contrebasses Acoustiques', 'Contrebasse acoustique pour une sonorité profonde et riche.', 76000, 15, 'tr1.jpg', 'category_traditional_instruments', 'fournisseur_3'],
                       ['Contrebasses Electriques', 'Contrebasse électrique pour un son moderne et puissant.', 67000, 15, 'tr2.jpg', 'category_traditional_instruments', 'fournisseur_3'],
                       ['Violons & Altos Electriques', 'Violons et altos électriques pour des performances polyvalentes.', 67000, 15, 'tr3.jpg', 'category_traditional_instruments', 'fournisseur_3'],
                       ['Accessoires pour Violoncelles', 'Accessoires de qualité pour violoncelles.', 67000, 15, 'tr4.jpg', 'category_traditional_instruments', 'fournisseur_3'],
           
                       // Traditional Folk Instruments
                       ['Harpes', 'Harpe traditionnelle avec un son cristallin.', 86000, 15, 'tr5.jpg', 'category_traditional_folk_instruments', 'fournisseur_4'],
                       ['Harpes & Lyres pour Enfants', 'Harpe pour enfants avec des cordes en nylon, douce et facile à jouer.', 46000, 15, 'tr6.jpg', 'category_traditional_folk_instruments', 'fournisseur_4'],
                       ['Balalaikas', 'Balalaika traditionnelle pour musique folklorique.', 46000, 15, 'tr7.jpg', 'category_traditional_folk_instruments', 'fournisseur_4'],
                       ['Erthu', 'Erthu pour un son méditatif et introspectif.', 46000, 15, 'tr8.jpg', 'category_traditional_folk_instruments', 'fournisseur_4'],
           
                       // Traditional Percussion Instruments
                       ['Xylophones', 'Xylophone en bois massif pour un son chaleureux.', 86000, 15, 'tr9.jpg', 'category_traditional_percussion_instruments', 'fournisseur_4'],
                       ['Métallophones', 'Métallophone pour des tonalités brillantes et percutantes.', 46000, 15, 'tr10.jpg', 'category_traditional_percussion_instruments', 'fournisseur_4'],
                       ['Marimbas', 'Marimba avec des tons profonds et riches, idéale pour les performances.', 46000, 15, 'tr11.jpg', 'category_traditional_percussion_instruments', 'fournisseur_4'],
                       ['Vibraphones', 'Vibraphone de haute qualité pour des sonorités cristallines.', 46000, 15, 'tr12.jpg', 'category_traditional_percussion_instruments', 'fournisseur_4'],
           
                       // Traditional Meditation Instruments
                       ['Percussions Rituelles', 'Percussions pour méditation rituelle, sonore et apaisant.', 86000, 15, 'tr13.jpg', 'category_traditional_meditation_instruments', 'fournisseur_4'],
                       ['Wind Gonges', 'Gonges de vent pour des sons méditatifs profonds.', 46000, 15, 'tr14.jpg', 'category_traditional_meditation_instruments', 'fournisseur_4'],
                       ['Cymbales de Temple', 'Cymbales de temple pour une ambiance spirituelle unique.', 46000, 15, 'tr15.jpg', 'category_traditional_meditation_instruments', 'fournisseur_4'],
                       ['Bols Chantants', 'Bols chantants pour relaxation et méditation.', 46000, 15, 'tr16.jpg', 'category_traditional_meditation_instruments', 'fournisseur_4'],
           
                       // Wind Instruments - Saxophones
                       ['Saxophones Alto', 'Saxophone alto avec un ton doux et riche.', 48000, 15, 'vent1.jpg', 'category_wind_instruments', 'fournisseur_5'],
                       ['Saxophones Ténor', 'Saxophone ténor avec un son puissant et vibrant.', 46000, 15, 'vent2.jpg', 'category_wind_instruments', 'fournisseur_5'],
                       ['Saxophones Soprano', 'Saxophone soprano avec une tonalité claire et brillante.', 46000, 15, 'vent3.jpg', 'category_wind_instruments', 'fournisseur_5'],
           
                       // Wind Instruments - Trumpets
                       ['Trompettes à Pistons en Sib', 'Trompette à pistons avec un son lumineux et percutant.', 46000, 15, 'vent4.jpg', 'category_wind_instruments', 'fournisseur_6'],
                       ['Trompettes Piccolo', 'Trompette piccolo avec un ton aigu et percutant.', 46000, 15, 'vent5.jpg', 'category_wind_instruments', 'fournisseur_6'],
                       ['Trompettes à Piston', 'Trompette à piston avec une grande clarté sonore.', 46000, 15, 'vent6.jpg', 'category_wind_instruments', 'fournisseur_6'],
           
                       // Wind Instruments - Clarinets
                       ['Clarinette en Sib', 'Clarinette en Sib avec une sonorité fluide et chaude.', 46000, 15, 'vent7.jpg', 'category_wind_instruments', 'fournisseur_7'],
                       ['Clarinette Basse', 'Clarinette basse avec un ton riche et profond.', 46000, 15, 'vent8.jpg', 'category_wind_instruments', 'fournisseur_7'],
                       ['Clarinette Piccolo', 'Clarinette piccolo, idéale pour les solos lumineux.', 46000, 15, 'vent9.jpg', 'category_wind_instruments', 'fournisseur_7'],
                   
           
                       // Euphoniums
                       ['Euphoniums Standards', 'Euphonium standard avec une sonorité riche et claire, idéal pour les ensembles.', 15500, 20, 'vent10.jpg', 'category_euphoniums', 'fournisseur_1'],
                       ['Euphoniums Compensés', 'Euphonium compensé avec un ton puissant et une grande précision dans le jeu.', 15900, 20, 'vent11.jpg', 'category_euphoniums', 'fournisseur_1'],
           
                       // Vocal Microphones
                       ['Microphones de Chant Dynamiques', 'Microphone dynamique conçu pour la performance vocale, avec une réponse claire.', 158600, 20, 'mic1.jpg', 'category_vocal_microphones', 'fournisseur_1'],
                       ['Microphones de Chant à Condensateur', 'Microphone à condensateur pour des performances vocales précises et détaillées.', 15050, 20, 'mic2.jpg', 'category_vocal_microphones', 'fournisseur_1'],
           
                       // Wireless Microphones
                       ['Systèmes sans Fil avec Micro Main', 'Système sans fil avec microphone main, idéal pour les performances sur scène.', 156000, 20, 'mic3.jpg', 'category_wireless_microphones', 'fournisseur_2'],
                       ['Systèmes sans Fil avec Micro Cravate', 'Système sans fil avec micro cravate pour une liberté de mouvement maximale.', 157000, 20, 'mic4.jpg', 'category_wireless_microphones', 'fournisseur_2'],
           
        ];

        foreach ($products as [$nom, $description, $prix, $stock, $photo, $categoryReference, $fournisseurReference]) {
            $this->createProduct($nom, $description, $prix, $stock, $photo, $categoryReference, $fournisseurReference, $manager);
        }

        $manager->flush();
    }

    private function createProduct(
        string $nom,
        string $description,
        int $prix,
        int $stock,
        string $photo,
        string $categoryReference,
        string $fournisseurReference,
        ObjectManager $manager
    ): void {
        $product = new Products();
        $product->setNom($nom);
        $product->setDescription($description);
        $product->setPrix($prix);
        $product->setStock($stock);
        $product->setPhoto($photo);
        $product->setSlug($this->slugger->slug($nom)->lower());

        // Récupérer la catégorie (en supposant que vous avez 4 catégories)
        $category = $this->getReference('cat-' . mt_rand(1, 4), Categories::class);
        $product->setCategories($category);

        // Corriger la référence du fournisseur pour utiliser le format correct
        $fournisseur = $this->getReference($fournisseurReference, Fournisseur::class); // Le format du fournisseur est déjà correct, donc on l'utilise directement
        $product->setReferenceFournisseur($fournisseur->getId());

       /*  $product->setFournisseur($fournisseur);
        $product->setReferenceFournisseur("");
 */




        // Enregistrer la référence du produit pour réutilisation
        $this->setReference('prod-' . strtolower(str_replace(' ', '-', $nom)), $product);

        $manager->persist($product);
    }

    public function getDependencies(): array
    {
        return [
            CategoriesFixtures::class,
            FournisseursFixtures::class,
        ];
    }
}
