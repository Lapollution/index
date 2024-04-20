import sys

# Récupérer les arguments de la ligne de commande
name = sys.argv[1]
email = sys.argv[2]
subject = sys.argv[3]
message = sys.argv[4]
browser = sys.argv[5]
device_name = sys.argv[6]

# Écrire les données dans un fichier ou les traiter selon les besoins
with open('user_info.txt', 'a') as file:
    file.write(f"Name: {name}\n")
    file.write(f"Email: {email}\n")
    file.write(f"Subject: {subject}\n")
    file.write(f"Message: {message}\n")
    file.write(f"Browser: {browser}\n")
    file.write(f"Device Name: {device_name}\n")
    file.write('*********************************************')
    file.write('\n')

# Vous pouvez également envoyer ces données à une base de données ou à un service de stockage en ligne, selon vos besoins.
