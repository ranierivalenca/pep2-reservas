conf-git-silvio:
	git config user.name "Silvio"
	git config user.email "silvioej@gmail.com"

commit-all:
	git add .
	read -p "escreva seu commit:" COMMIT
	git commit -m $COMMIT

conf-git-ranieri:
	@git config user.name "Ranieri"
	@git config user.email "ranierivalenca@gmail.com"
