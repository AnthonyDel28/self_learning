#coding:utf-8

"""

Imprimer 5 fois le mot "Hello"

i = 0

while i < 5 :
    print("Hello")
    i = i + 1
    
"""  
    
    
status = True
print("")

while status:
    command = input("> ")
    
    if command == "cancel":
        continue
    elif command == "menu":
        print("Vous êtes de retour au menu principal!")
    elif command == "exit":
        status = False 
    else:
        print("Commande inconnue !")
print("Au revoir!")