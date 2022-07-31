nodeos -e -p eosio --plugin eosio::chain_api_plugin --plugin eosio::history_api_plugin --delete-all-blocks
cleos wallet unlock -n claudia --password PW5Ji6JUrLjhKAVn68nmacLxwhvtqUAV18J7iycZppsPKeoGGgBEw
cleos wallet list
/home/fallcar/eosio-wallet/./eosio.token.wallet  




!!!ATTENTION!!!
Name should be less than 13 characters and only contains the following symbol .12345abcdefghijklmnopqrstuvwxyz
ex:
alberto
alberto5
alberto12345


procedures pour installer la blockchain:
https://developers.eos.io/manuals/eos/latest/install/install-prebuilt-binaries

procedures pour installer EOSIO.CDT(necessaire pour compiler le smartcontract.)
https://developers.eos.io/welcome/latest/getting-started-guide/local-development-environment/installing-eosiocdt


AVANT DE COMMENCER IL FAUT S'ASSURER D'AVOIR TOUS LES .WALLETS EFFACÉS DANS LE DOSSIER: /home/user/eosio-wallet/./eosio.token.wallet  
IL FAUT S'ASSURER QUE TOUS LES .txt ET LES .pwd SOIENT EFFACÉS DU DOSSIER.
IL FAUT S'ASSURER AUSSI AVEC LA COMMANDE : "top" que tous les process de nodeos et keosd soient effacées avec la commande "kill -9 PID"



PROCEDURE POUR PARTTIR LA BLOCKCHAIN

1) partir la blockchain avec : nodeos -e -p eosio --plugin eosio::chain_api_plugin --plugin eosio::history_api_plugin --delete-all-blocks


PROCEDURE POUR COMPILER LE SMART CONTRACT:
1) creer un account pour le contract: python create_new_user.py eosio.token
2) être dams le dossier contract/eosio.token et faire la commande suivante : eosio-cpp -I include -o eosio.token.wasm src/eosio.token.cpp --abigen
3) deploy le token du contract de la facon suivante: cleos set contract eosio.token contract/eosio.token --abi eosio.token.abi -p eosio.token@active
***********************************OR*******************
python compile_and_deploy_smartcontract.py



PROCEDURE POUR CRÉER DE TOKENS : 
1) CRÉER LE NOM DU ADMINISTRATEUR : python create_new_user.py admin123
2)créer le même nom de token que nombre de votans avec la commande suivante: cleos push action eosio.token create '[ "admin123", "100 SYS"]' -p eosio.token@active
MAINTENANT ON VA ISSUE LES TOKENS A admin123 
2) cleos push action eosio.token issue '["admin123", "100 SYS", "memo"]' -p admin123@active
**********************************OR***********************
python creer_tokens.py 100




MAINTENANT ON VA CRÉER TOUTES LES OPTIONS POUR LESQUELS VOTER:
python create_new_user.py option1
python create_new_user.py option2
python create_new_user.py option3


!!!ATTENTION!!! maintenant les token sont créer, c'est maintenant qu'on va créer le compte de votants et leur donner 1 token par la suite
POUR CREER UN VOTANT APPELÉ ALBERTO ET LUI DONNER 1 TOKEN, ON FAIT LES COMMANDES SUIVANTES : 

1)python create_new_user.py alberto
2)cleos push action eosio.token transfer '[ "admin123", "alberto", "1 SYS", "m" ]' -p admin123@active

MAINTENANT ON VA ENVOYER LE VOTE DE ALBERTO À OPTION1
cleos push action eosio.token transfer '[ "alberto", "option1", "1 SYS", "m" ]' -p alberto@active




ON PEUT VOIR LE VALANCE DE OPTION 1 AVEC LA COMMANDE SUIVANTE: 
cleos get currency balance eosio.token admin123 SYS



