#coding:utf-8

print("Hello, welcome on board! Can you tell us more about yourself?")

name = input("What's your name?\n")
surname = input("And your surname?\n")
age = input("How old are you?\n")
height = input("How tall are you?\n")
money = input("How much money do you have on your bank account?\n")


text = "OK so you are {} {}, you are {} years old, you are {} tall and you have exactly {} € on your ING Bank Account. See you later ! "

print(text.format(name, surname, age, height, money))

print(type(money))

money = float(money)
print(type(money))