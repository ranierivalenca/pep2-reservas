separator:
	@echo "\033[01;37m============================="
conf-ok:
	@echo  "\033[01;32mGIT CONFIGURADO COM SUCESSSO!"
	@echo  "\033[01;34mDETALHES DA CONFIGURAÇÃO :\033[06;37m"
	@git config user.name
	@git config user.email

commit-all:
	@git add .
	@read -p "escreva seu commit:" COMMIT
	@git commit -m $COMMIT
	@$(MAKE) separator

conf-git-silvio:
	@git config user.name "Silvio"
	@git config user.email "silvioej@gmail.com"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
conf-git-ranieri:
	@git config user.name "Ranieri"
	@git config user.email "ranierivalenca@gmail.com"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
conf-git-lib:
	@git config user.email "libnarodrigues723@gmail.com"
	@git config user.name "libna"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
conf-git-Sony:
	@git config user.name "erickson"
	@git config user.email "erickson.ferreira@outlook.com.br"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
conf-git-cleyton:
	@git config user.email "cleytonv104@gmail.com"
	@git config user.name "CleytonVieira"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
conf-git-adriene:
	@git config user.email "adrienebarbosa22@gmail.com"
	@git config user.name "Adriene"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
conf-git-ricardo:
	@git config --global user.name "cranioscaner"
	@git config --global user.email "cranioscaner@gmail.com"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
config-git-naadabe:
	@git config --global user.name "naadabefarias"
	@git config --global user.email "naadabe@gmail.com"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
config-git-geovane:
	@git config --global user.name "geovanejose"
	@git config --global user.email "geovanejose240899@gmail.com"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
conf-git-rebeca:
	@git config user.name "rebecacristina"
	@git config user.email "rebecacristina535@gmail.com"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
conf-git-wolaci:
	@git config user.name "Wolaci"
	@git config user.email "wolacijose8@gmail.com"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
conf-git-luigi:
	@git config user.name "Luigi"
	@git config user.email "luigi.martins.355@gmail.com"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
conf-git-jhonatas:
	@git config user.name "Jhonatas"
	@git config user.email "jhonsnoow32@gmail.com"
	@$(MAKE) separator
	@$(MAKE) conf-ok
	@$(MAKE) separator
