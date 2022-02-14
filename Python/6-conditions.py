#coding:utf-8

user = "root"
user_pass = "123"

print("Bienvenue, pour accéder à ce contenu vous devez vous connecter!\n")

username = input("Votre identifiant: ")
password = input("Votre mot de passe: ")


if user == username and password == user_pass:
    print("Vous êtes connecté! Bienvenue", username)
    status = False # = 1
    if status:
        print("Vous êtes en ligne.")
    else:
        print("Vous êtes hors ligne.")
        
else:
    print("Erreur: Identifiant ou mot de passe incorrect !")
    

age = input("Quel âge as-tu?\n")
age = int(age)

if 0 < age <= 99:
    print("Ton âge est valide.\n")
else:
    print("Ton âge est invalide!\n")