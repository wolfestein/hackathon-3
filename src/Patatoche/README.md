## Exercice du Niveau Z

Nous avons l'habitude de travailler avec des chiffres décimaux.
Mais bien avant leur invention, d'autres systèmes existaient.

Nous allons donc nous plonger dans le monde merveilleux des chiffres romains.

Pour rappel, les chiffres de base du système romain sont les suivants :
- I => 1
- V => 5
- X => 10
- L => 50
- C => 100
- D => 500
- M => 1000

La numérotation en chiffres romains a été normalisée dans l'usage actuel et repose sur quatre principes :
1. Toute lettre placée à la droite d'une autre figurant une valeur supérieure ou égale à la sienne s'ajoute à celle-ci.
2. Toute lettre placée immédiatement à la gauche d'une lettre strictement plus forte qu'elle indique que le nombre qui lui correspond doit être retranché au nombre qui suit.
3. Les valeurs sont groupées en ordre décroissant, sauf pour les valeurs à retrancher selon la règle précédente.
4. La même lettre ne peut pas être employée quatre fois (ou plus) consécutivement, sauf M.

Exemples :
- XI     => 10 + 1                      => 11
- IX     => 10 - 1                      => 9
- XLI    => 50 -10 + 1                  => 41
- CDXLIV => 500 - 100 + 50 - 10 + 5 - 1 => 444
- LD     => 500 - 50                    => 450

Comme ces chiffres sont difficiles à lire, nous allons écrire une méthode pour les convertir.
Cette méthode prendra en entrée une chaîne de caractères représentant un nombre romain (lettres majuscules), et retournera sa représentation décimale.
Pour ce faire, vous devrez appliquer les deux premiers principes donnés ci-dessus dans la méthode RomanToIntegerConverter::convert().
