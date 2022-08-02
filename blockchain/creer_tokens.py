import os
import time
import sys

def procedure(numero_de_tokens):
    commande="python create_new_user.py admin123"
    os.system(commande)
    comande="cleos push action eosio.token create "+"'["+' "admin123", "'+numero_de_tokens+' SYS"]'+"' -p eosio.token@active"


        

    os.system(comande)
    comande="cleos push action eosio.token issue"
    comande=comande+" '"
    comande=comande+'["admin123", "'+numero_de_tokens+' SYS", "memo"]'
    
    
    comande=comande+"' -p admin123@active"

    os.system(comande)

numero_de_tokens=sys.argv[1]
procedure(numero_de_tokens)

