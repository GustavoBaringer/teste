# Questionário C4

Como nosso projeto tem contribuidores remotos, precisamos **confiar em você**, por isso não vamos te monitorar enquanto responde, mas pedimos que siga as seguintes regras:

- Não utilize nenhuma fonte externa para pesquisa:
  Responda o melhor que puder, sem usar a internet, livros, cadernos, colegas ou qualquer outra fonte externa.
  > Um de nossos pilares é o **tamo junto**, então, caso tenha dúvida em alguma pergunta, você pode perguntar para alguém da equipe, sendo esta a única exceção.
- Responda conforme achar mais adequado:
  Não tente adivinhar ou chutar. Curtimos futebol, mas vamos deixar os chutes para o campo!
- Leia atentamente as pergunta:
  Boa leitura é uma habilidade indispensável, sério.
- Seja franco:
  É muito melhor deixar claro o que pensa agora do que esperar algumas semanas para fazer isso.

Serão 10 perguntas, 2 descritivas e 8 objetivas, mas pode ficar tranquilo, o objetivo desse questionário é agilizar nosso processo, não vamos te julgar por tuas respostas.

Respira fundo, desliga a internet, se concentra e vamos lá:

---

# 1 - Você está projetando um módulo novo do sistema e sabe que haverá várias relações entre outras partes da aplicação e esta novidade, podendo gerar uma salada nas dependências. Qual princípio SOLID você aplicaria para facilitar o trabalho futuro da equipe? (Responda apenas qual o princípio SOLID, de forma objetiva. Não escreva um texto descritivo, por favor)

R.: Inversão de dependências.

# 2 - Seu supervisor te passou uma tarefa para amanhã, mas você está testando uma tecnologia nova que pode ser útil futuramente e pode demorar um pouco a terminar. O que você faz?

- A - Termina o que está fazendo antes de validar a demanda, visto que está no meio de um processo;
  `X B - Analisa a urgência da tarefa e se necessário, inicia o trabalho nela;`
- C - Questiona seu supervisor por trazer uma demanda extra fora da reunião de sprint, visto que você já tem suas atividades planejadas;
- D - Inicia imediatamente a tarefa independentemente da urgência ou complexidade;
- E - Delega para outro colega que tenha mais tempo para realizar a tarefa;

# 3 - Você está contribuindo em uma biblioteca pública e percebe que há um nível de complexidade muito alto na criação dos objetos, fazendo com que as dependências fiquem espalhadas e dificultando a criação de novos objetos. Qual padrão de projeto adotar?

- A - Construtores Nomeados;
- B - Inversão de Dependências;
  `X C - Injeção de Dependências;`
- D - PDO;
- E - PORO;

# 4 - Você acabou de enviar sua pull request e percebeu que realizou seu commit na branch errada! Deveria ter feito na branch `awesome_feature`, mas fez na `not_so_awesome`. Acontece. Como você faria para ajustar isso, sem perder o que fez?

- A - `git checkout not_so_awesome` e `git cherry pick hash_do_commit`;
- B - `git rebase master` e `git rebase awesome_feature`;
  `X C - `git checkout awesome_feature`e`git cherry-pick hash_do_commit`;`
- D - Faria as alterações novamente para evitar conflitos;
- E - Copiaria o código do github, visto que a PR está aberta e colaria na branch certa;

# 5 - Automação de processos repetitivos salva seu tempo e de seus colegas. Qual dos `shebangs` a seguir não é válido

- A - `#!/bin/bash`;
- B - `#!/bin/sh`;
- C - `#!/usr/bin/env python3`;
  `X D - `!#/bin/bash`;`
- E - `#!/bin/cat`

# 6 - Uma api bem projetada aceita trabalhar com ferramentas externas e melhorar processos internos. Um sistema que possui seu core isolado e utiliza um padrão de portas e adaptadores pra comunicação com serviços externos provavelmente implementa qual arquitetura?

- A - Event Sourcing;
- B - Event Bus;
- C - Hexagonal;
  `X D - CQRS;`
- E - MVC;

# 7 - Um colega que trabalha com Delphi precisa saber a diferença entre o comportamento das classes `TList` e `TObjectList` para trabalhar com listas genéricas. Você não sabe a resposta. O que você faz?

`X A - Tento ajudar a resolver o problema, utilizando meu conhecimento em outras tecnologias para formular uma resposta; - PRIMEIRA TENTATIVA, CASO EU TENHA ALGUM CONHECIMENTO SOBRE`
`X B - Pesquiso no Google e descubro a resposta; - SEGUNDA TENTATIVA, MÉTODO MAIS FÁCIL`

- C - Tento passar segurança e respondo da forma que creio ser mais correta;
- D - Eu digo que não sei a resposta;
- E - Continuo fazendo o que estava fazendo e deixo que meu colega encontre a resposta por conta própria;

# 8 - Você fez checkout para a branch master e ao executar `docker-compose up -d`, percebeu que um container não está funcionando adequadamente. O que você faria primeiro?

- A - Executaria `git blame docker-compose.yml` e informaria quem realizou a última alteração;
- B - Avisaria a equipe no slack para deixar todos informados;
  `X C - Olharia os logs para ver se consego resolver a situação;`
- D - Reiniciaria o serviço do docker para ver se o erro desaparace;
- E - Relato para meu supervisor, por se tratar da branch master, quem quebrou deverá ser notificado;

# 9 - Descreva Acoplamento e Coesão:

R.: O acomplamento e coesão são dois fatores que andam junto. Geralmente essse tipo de observação se da no uso de Classes, podendo-se analisar se ela é fortemente acoplada e pouco coesa, ou seja, que
depende de muitos outros componentes para executar a função dela, ou fracamente acoplada e fortemente coesa, ou seja, que depende de poucos ou nenhum outro componente/classe para executar oque foi destinada a executar.

# 10 - Qual dos protocolos abaixo não é utilizado para comunicação de micro serviços?

- A - Graphql;
- B - AMQP;
  `X C - RPC;`
- D - Apache Thrift;
- E - SOAS;
