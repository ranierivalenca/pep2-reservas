# Sistema de Reservas

Este sistema será desenvolvido pela turma 2019-1. É um sistema de reservas de salas e equipamentos.

***

Neste sistema, um administrador (*e apenas o administrador*) poderá cadastrar usuários, equipamentos e salas onde os equipamentos poderão ser reservados. O login do administrador deve ser feito numa página separada do login padrão (com uma URL diferente), e apenas um usuário deve ser aceito nesta página: *admin*. A senha deve ser definida e entregue ao administrador, podendo ser alterada pelo mesmo em sua interface.

Cada usuário (incluindo o administrador) deve ter guardado seu nome, nome de usuário (login), seu e-mail e sua senha (criptografada). As salas têm um nome e o bloco onde se encontram. Os equipamentos têm um tipo e um nome. Ainda deve ser possível atribuir equipamentos a salas, para o caso do equipamento estar fixo naquela sala (dessa forma, aquele equipamento só pode ser reservado naquela sala).

Alguns equipamentos só podem ser reservados em algumas salas (por exemplo, *projetor fixo*, quando este está instalado no teto de uma sala).

Uma mesma sala não pode ser reservada por dois usuários no mesmo horário. Assim como um mesmo equipamento não pode ser reservado em duas salas no mesmo horário.

Um usuário deve poder ver suas reservas, editá-las ou removê-las. Ao fazer uma reserva, o usuário deve escolher o dia / hora (no mínimo 24h após a data que ele está efetuando a reserva) e só então visualizar as salas disponíveis e, após a escolha da sala, os equipamentos disponíveis. O administrador deve ver todas as reservas futuras ordenadas das mais próximas para as mais distantes; as reservas passadas devem poder ser consultadas numa área separada.