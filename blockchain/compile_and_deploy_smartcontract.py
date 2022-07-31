import os


def make_path(r_path):  
    ack = 1
    try:
        root = os.path.dirname(__file__)
        rel_path = os.path.join("..", r_path)

        abs_path = os.path.join(root, rel_path)
        os.chdir(abs_path)
        ack = 0
    except Exception as details:
        print('problem to get to the path '+r_path+' (0001) : ' + str(details))
    return ack

command="python create_new_user.py eosio.token"
os.system(command)


command = "eosio-cpp -I include -o eosio.token.wasm src/eosio.token.cpp --abigen"
make_path('blockchain/contract/eosio.token/')
os.system(command)

make_path('blockchain')
command="cleos set contract eosio.token contract/eosio.token --abi eosio.token.abi -p eosio.token@active"
os.system(command)
