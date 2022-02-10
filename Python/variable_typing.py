#codnig:utf-8

"""
Fonctions vues: print()     -> afficher à l'écran
                input()     -> lire au clavier
                type()      -> retourne le type d'une donnée, variable, ect..
                str.format  -> formater une chaîne
                int(), float(), str(), bool() -> "caster" une donnée, la convertir
"""


nom_joueur = input("Choississez un nom de joueur: ")


print("Bienvenue,", nom_joueur)

#--------------------------------------------------------------------

prixHT = input("Entrez un prix: ")
prixHT = int(prixHT)

prixTTC = prixHT + (prixHT * 20 / 100)

print("Prix TTC =", prixTTC)

#--------------------------------------------------------------------


value = False
print(type(value))
value = str(value)

print(type(value))
