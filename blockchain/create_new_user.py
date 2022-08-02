
#eosio public key: EOS6MRyAjQq8ud7hVNYcfnVPJqcVpscN5So8BhtHuGYqET5GDW5CV
#eosio private key: 5KQwrPbwdL6PhXujxW37FSSQZ1JiwsST4cqQzDeyXtP79zkvFD3

import os
import time
import sys
import subprocess
def procedure(name):
    #first we create a wallet
    wallet_password=create_wallet(name)
    #then we create a key
    create_key(name)
    #we get the private and public key
    private_key,public_key= get_private_public_key(name+".txt")
    #we import the private key to the wallet
    print("*************************")
    import_private_key(name,private_key)
    #import the genesis key (obligatory)
    import_private_key(name, '5KQwrPbwdL6PhXujxW37FSSQZ1JiwsST4cqQzDeyXtP79zkvFD3')
    
    #now we gotta create an account with the public key:
    account_name= name
    create_account(account_name, public_key)

    

def import_private_key(wallet_name,private_key):
    command="cleos wallet import --name "+ wallet_name +" --private-key "+ private_key
    p=os.popen(command)
    print(p.read())
#this fonction will creaste a wallet
def create_wallet(name):
    command="cleos wallet create -n "+ name +" -f "+ name+"_wallet_password.pwd"
    print(command)
    p=os.popen(command)
    print(p.read())
#this functions will take the password wallet
def get_password_wallet(file_name):
    with open(file_name) as file:
        for line in file:
            line_to_return=line
            
    return line_to_return

#this functions creates new keys and save it on a file(name on parameter)
def create_key(name):
    command="cleos create key --file "
    file_to_save=name+".txt"
    command_to_send= command+file_to_save
    os.popen(command_to_send)
#this function returns the private and public key of a file(name on parameter)
def get_private_public_key(file_name):
    time.sleep(1)
    lines=[]
    with open(file_name) as file:
        for line in file:
            line_to_add=line.replace("Private key: ","")
            line_to_add=line_to_add.replace("Public key: ","")
            line_to_add=line_to_add.replace("\n","")
            lines.append(line_to_add)
    return lines[0],lines[1]          


def create_account(name_of_account,public_key):
    command="cleos create account eosio "+ name_of_account +" EOS6MRyAjQq8ud7hVNYcfnVPJqcVpscN5So8BhtHuGYqET5GDW5CV "+ public_key
    command_output=os.popen(command)
    print("********************")
    print(command_output)
    time.sleep(1)

firstarg=sys.argv[1]

procedure(firstarg)

