gitconfig:
	git config user.name "Silvio"
	git config user.email "silvioej@gmail.com"
	git add .
	read -p "escreva seu commit:" COMMIT
	git commit -m $COMMIT 