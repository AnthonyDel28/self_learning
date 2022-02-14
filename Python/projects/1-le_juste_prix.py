#coding:utf-8

price = 21550
price = int(price)
modèle = "Ford Fiesta 2020"


user_id = "Anthony"
user_pass = "hello"
online = False

print("Bonjour, veuillez vous connecter pour jouer !\n")

username = input("Veuillez entrer votre identifiant: ")
password = input("Veuillez entrer votre mot de passe: ")

if username == user_id and password == user_pass:
    online == True
    print("Connection réussie! Bienvenue ", username)
    print("Vous allez maintenant jouer au 'Juste Prix' !\n Vous allez devoir deviner le prix d'une voiture, voici le modèle:", modèle)
    winner = False
    while winner == False:
        number = input("Quelle est votre estimation? ")
        number = int(number)
        if number == price:
            print("Félicitations vous avez gagné !\n")
            other_game = input("Voulez-vous recommencer? Tapez Oui ou Non\n")
            if other_game == "Oui":
                continue
            elif other_game == "Non":
                print("Au revoir!")
                break
            else:
                print("Erreur: Vous devez répondre par 'Oui' ou 'Non' !")
                break
        elif number > price and number < 1000000:
            print("C'est moins!")
            continue
        elif number < price and number > 1:
            print("C'est plus!")
            continue
        else:
            print("Erreur. Veuillez entrer des valeurs correctes !")
            continue
else:
    print("Erreur: données de connexion incorrectes !")


    
