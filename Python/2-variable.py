#coding:utf-8

"""
Nommer une variable: doit commencer par une lettre ou un underscore
                     ne pas contenir de caractère spéciaux
                     ne pas contenir d'espaces
                     utiliser des underscores "_"


Types standards:     entier numérique(int)
                     nombre flottant(float)
                     chaine de caractères(str)
                     booléen(bool)
                     autres(listes, dictionnaires, tuples, ect...)
"""

age_personne = 14
argent_personne = 2500.56
nom_personne = "Mark"
open_status = True

print("L'age de la personne est de", age_personne, "ans.")
print("La personne possède", argent_personne, "€.")
print("Son nom est", nom_personne, ".")
print(open_status)

text = "La personne est agée de {} et possède {} €."
print(text.format(age_personne, argent_personne))

print("La personne est agée de {} et possède {} €.".format(age_personne, argent_personne))
print("\n")

#------------------------------------------------------------------------------------------------------------------------



