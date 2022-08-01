import os



command="nodeos -e -p eosio --plugin eosio::chain_api_plugin --plugin eosio::history_api_plugin --delete-all-blocks"
p=os.popen(command)
print(p.read())

# def lancer_blockchain():
#     command="nodeos -e -p eosio --plugin eosio::chain_api_plugin --plugin eosio::history_api_plugin --delete-all-blocks"
#     p=os.popen(command)
#     print(p.read())