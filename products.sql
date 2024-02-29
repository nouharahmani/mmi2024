-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 29 fév. 2024 à 04:20
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(108) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_image2` varchar(255) DEFAULT NULL,
  `product_image3` varchar(255) DEFAULT NULL,
  `product_image4` varchar(255) DEFAULT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_special_offer` int(2) DEFAULT NULL,
  `product_color` varchar(108) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `product_image2`, `product_image3`, `product_image4`, `product_price`, `product_special_offer`, `product_color`) VALUES
(1, 'Baume pour les lèvres', 'makeup', 'Baume pour les levres est un produit hydratant qui aide a maintenir la douceur et la souplesse des levres. Formule avec des ingredients nourrissants, il offre une protection contre la secheresse et les gerçures, laissant les levres douces et lisses. ', 'baume_1.png', 'baume_1.png', 'baume_1.png', 'baume_1.png', '15.99', 0, 'beige'),
(2, 'Gel douche', 'skincare', 'Gel douche est un produit de nettoyage corporel rafraîchissant et revitalisant. Sa formule douce et moussante élimine efficacement les impuretés tout en préservant l équilibre naturel de la peau. Idéal pour une expérience de douche revigorante au quotidie', 'bodywash.png', 'bodywash.png', 'bodywash_1.png', 'bodywash2.png', '8.49', 0, 'Bleu'),
(3, 'Pinceau à maquillage', 'brush', 'Pinceau à maquillage est un outil essentiel pour appliquer le maquillage de manière précise et uniforme. Avec ses poils doux et souples, il permet une application facile des produits. Ce pinceau offre une sensation agréable sur la peau et est idéal.', 'brush_2.png', 'brush_2_2.png', 'brush_5.png', 'brush_4.png', '12.99', 0, 'Noir'),
(4, 'Concealer', 'makeup', 'un produit cosmétique utilisé pour dissimuler les imperfections de la peau, telles que les cernes, les rougeurs et les taches. Sa formule couvrante est conçue pour camoufler discrètement ces défauts, laissant la peau paraître plus uniforme et éclatante', 'concealer.png', 'concealer.png', 'concealer.png', 'concealer.png', '9.99', 0, 'Beige'),
(5, 'Crème pour la peau', 'skincare', 'Hydratation intense', 'cream_4.png', 'cream_1.png', 'cream_2png', 'cream_3.png', '15.99', 0, 'blanc'),
(6, 'Crème visage', 'skincare', 'un produit cosmétique utilisé pour dissimuler les imperfections de la peau, telles que les cernes, les rougeurs et les taches. Sa formule couvrante est conçue pour camoufler discrètement ces défauts, laissant la peau paraître plus uniforme et éclatante.', 'cream_3.png', 'cream_1.png', 'cream_5.png', 'cream_2.png', '18.99', 0, 'beige'),
(7, 'Crème pour la peau', 'skincare', 'un produit cosmétique utilisé pour dissimuler les imperfections de la peau, telles que les cernes, les rougeurs et les taches. Sa formule couvrante est conçue pour camoufler discrètement ces défauts, laissant la peau paraître plus uniforme et éclatante', 'cream_3.png', 'cream_2.png', 'cream_1.png', 'cream_2.png', '15.99', 0, 'Blanc'),
(8, 'Crème anti-ride', 'skincare', 'Réduit les rides visiblement', 'cream_3.png', 'cream_1.png', 'cream_2.png', 'cream_1.png', '22.99', 0, 'beige'),
(9, 'Fond de teint 2', 'makeup', 'Longue tenue', 'fondation2.png', 'fondation_1.png', 'fondation_2.png', 'fondation_3.png', '19.99', 0, 'Doré'),
(10, 'Rouge à lèvres 1', 'makeup', 'Couleur intense Baume pour les levres est un produit hydratant qui aide a maintenir la douceur et la souplesse des levres. Formule avec des ingredients nourrissants, il offre une protection contre la secheresse et les gerçures.', 'lipstick2.png', 'lipstick_1.png', 'lipstick_2.png', 'lipstick2.png', '11.99', 0, 'Rouge classique'),
(11, 'Rouge à lèvres 2', 'makeup', 'Mat et longue tenue', 'lipstick2.png', 'lipstick3.png', 'lipstick_2.png', 'lipstick_1.png', '13.99', 0, 'Corail'),
(12, 'Lotion pour le corps 1', 'skincare', 'Hydratation quotidienne', 'lotion_5.png', 'lotion2_2.png', 'lotion1_1.png', 'lotion1_2.png', '7.99', 0, 'Vert menthe'),
(13, 'Lotion pour le corps 2', 'skincare', 'Parfum délicat', 'lotion_6.png', 'lotion2_2.png', 'lotion1_1.png', 'lotion1_2.png', '9.99', 0, 'Lavande'),
(14, 'Lotion pour le corps 3', 'skincare', 'Réparation intense', 'lotion_7.png', 'lotion_6.png', 'lotion1_1.png', 'lotion2_2.png', '12.99', 0, 'Rose'),
(15, 'Lotion pour le corps 4', 'skincare', 'Protection UV', 'lotion_4.png', 'lotion1_2.png', 'lotion2_2.png', 'lotion_7', '14.99', 0, 'Transparente'),
(16, 'Mascara', 'makeup', 'Volume et longueur', 'mascara.png', 'mascara_1.png', 'mascara_2.png', 'mascara_1.png', '10.99', 0, 'Noir intense'),
(17, 'Fond de teint poudre', 'makeup', 'Finition mate', 'powder_1.png', 'powder_3.png', 'powder_4.png', 'powder_2.png', '16.99', 0, 'Naturel'),
(18, 'Poudre fixatrice', 'makeup', 'Fixe le maquillage', 'powder_4.png', 'powder_3.png', 'powder_2.png', 'powder_1.png', '14.99', 0, 'Incolore'),
(19, 'Serum hydratant', 'skincare', 'Hydratation en profondeur', 'serum_1.png', 'serum1_1.png', 'serum1_2.png', 'serum2_3.png', '20.99', 0, 'Rose clair'),
(20, 'Serum vitamine C', 'skincare', 'Éclat et anti-oxydant', 'serum_2.png', 'serum_3.png', 'serum2_3.png', 'serum1_1.png', '24.99', 0, 'Orange'),
(21, 'Serum cerne', 'skincare', 'Réduit les cernes', 'serum_4.png', 'serum2_1.png', 'serum_6.png', 'serum2_3.png', '18.99', 0, 'Beige clair'),
(22, 'Serum anti-ride', 'skincare', 'Combat les signes de âge', 'serum_3.png', 'serum_5.png', 'serum1_2.png', 'serum1_1.png', '26.99', 0, 'Or'),
(23, 'Crème solaire', 'skincare', 'Protection SPF 50', 'spf_3.png', 'spf_2.png', 'spf_1.png', 'fondation_3.png', '15.99', 0, 'Transparent'),
(24, 'pinceau poudre', 'brush', 'Éclat et anti-oxydant', 'brush_3.png', 'brush_4.png', 'brush_2.png', 'brush_3.png', '24.99', 0, 'naturel'),
(25, 'pinceau', 'brush', 'Éclat et anti-oxydant', 'brush_4.png', 'brush_4.png', 'brush_4.png', 'brush_4.png', '24.99', 0, 'naturel'),
(26, 'pinceau poudre', 'brush', 'Éclat et anti-oxydant', 'brush_5.png', 'brush_5.png', 'brush_5.png', 'brush_5.png', '24.99', 0, 'naturel'),
(27, 'Gel douche ', 'skincare', 'Nettoyant doux', 'bodywash.png', 'bodywash_1.png', 'cream_2.png', 'lotion2_2.png', '8.49', 0, 'caramel'),
(28, 'Baume pour les lèvres 2', 'makeup', 'Réparateur et parfumé', 'baume_2.png', 'lipstick_1.png', 'baume_2.png', 'baume_2.png', '6.99', 0, 'Rose'),
(50, 'Fond de teint', 'makeup', 'fondation_4.png', 'fondation_2.png', 'fondation_1.png', 'fondation_3.png', NULL, '15.99', 0, 'Beige');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
