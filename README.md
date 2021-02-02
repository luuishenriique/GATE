# GATE-
O **GATE** (**G**estor de **A**tivos **T**ecnológicos **E**mpresariais), tem como objetivo ajudar a gerenciar da melhor forma possível todos os equipamentos tecnológicos utilizados em um ambiente de trabalho, facilitando o seu rastreio e acompanhamento para tomada de ações pertinentes para o mesmo.

## Características

- **Cadastro de equipamentos** (_Viabilizando cadastro via QR Code_).

     Registro contendo todos os dados do equipamento a ser cadastrado, sendo gerado um QR Code para facilitar os processos posteriores de acompanhamento deste equipamento.

- **Abertura de chamados para os equipamentos selecionados**

    Chamados serão abertos para a equipe de suporte ser acionada, e, tendo o problema já declarado, iniciar o processo de manutenção do equipamento.

- **Status do andamento do chamado e seus participantes**

    Atualização em tempo real da situação do equipamento no chamado que está em aberto, relatando a evolução da situação gradativamente, podendo se utilizar do **QR Code** para agilizar o processo.

- **Dashboards trazendo estatísticas para a equipe de manutenção sobre os chamados**

    Gráficos interativos mostrando o desempenho da equipe / colaborador nos chamados abertos, indicando chamados pendentes, em atraso e já concluídos.

- **Central de problemas conhecidos para ajudar em problemas resolvidos anteriormente nos chamados já encerrados** (_Equipe de manutenção_)

    Criação de banco de problemas já resolvidos, contribuindo para que se problemas parecidos sejam identificados, possíveis soluções já sejam mostradas para o problema.

- **Cronograma para limpeza e manutenção dos equipamentos cadastrados**

    Calendário contendo chamados abertos, última manutenção realizada e agendamento de limpeza preventiva aos equipamentos.
    
- **FAQ interativo para ajudar os usúarios em problemas menores com os equipamentos** (_Usuários_)

    Sistema com perguntas frequentes, trazendo soluções para problemas mais simples que possam ser resolvidos no momento. 

- **Integração via e-mail**

    Facilitando em comunicar mais abrangentemente quaisquer atualizações referentes ao chamado em questão.
    
## Tecnologias Utilizadas

- Integração de QR Code via HTML5 e JavaScript -> https://github.com/schmich/instascan
- NodeJS -> https://nodejs.org/en/
- Laravel 8 -> https://laravel.com/
- PHP -> https://www.php.net/manual/pt_BR/intro-whatis.php
- Javascript -> https://developer.mozilla.org/pt-BR/docs/Web/JavaScript
- Mysql Server -> https://dev.mysql.com/doc/

      Observação: Quaisquer outras tecnologias usadas serão adicionadas aqui em breve.

## Instalação

### Debian/Ubuntu
      
```bash
sudo apt-get install git -y
sudo apt-get install make -y
git clone https://github.com/luuishenriique/GATE
cd GATE/
make init
```      
### Windows
      
      Manual de instalação será colocado em breve!
      

