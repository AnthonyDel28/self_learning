#coding:utf-8

price = 21550
price = int(price)
modèle = "Ford Fiesta 2020"
score = 100


user_id = "root"
user_pass = "root"
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
        if score == 0:
            print("Dommage, vous avez perdu ! Au revoir.")
            break
        number = input("Quelle est votre estimation? ")
        number = int(number)
        if number == price:
            print("Félicitations vous avez gagné !\n")
            winner == True
            print("Vous avez obtenu un score de", score)
            other_game = input("Voulez-vous recommencer? Tapez Oui ou Non\n")
            if other_game == "Oui":
                score = 100
                continue
            elif other_game == "Non":
                print("Au revoir!")
                break
            else:
                print("Erreur: Vous devez répondre par 'Oui' ou 'Non' !")
                break
        elif number > price and number < 1000000:
            score = score - 10
            print("C'est moins! Score: ", score)
            continue
        elif number < price and number > 1:
            score = score - 10
            print("C'est plus!  Score: ", score)
            continue
        else:
            print("Erreur. Veuillez entrer des valeurs correctes !")
            continue
else:
    print("Erreur: données de connexion incorrectes !")


    
