## Plataforma de Contratação de Freelancers

Este projeto é uma plataforma web que conecta clientes com desenvolvedores freelancers, permitindo que os clientes exponham suas necessidades e recebam propostas de freelancers com base no número de horas trabalhadas.

 

### Tecnologias Utilizadas

* **Laravel:** Framework PHP para desenvolvimento web.
* **MySQL:** Sistema de gerenciamento de banco de dados.
* **Herd:** Ferramenta para configuração de ambiente de desenvolvimento.
* **Livewire** Permite a criação de aplicativos web interativos de forma rápida e fácil.

### Instalação e Execução

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/joaojp900/Freelancer-hours
   ```
2. **Instale as dependências:**
   ```bash
   composer install
   ```
3. **Configure o banco de dados:**
   * Crie um banco de dados MySQL chamado `[nome do banco de dados]`.
   * Configure as credenciais do banco de dados no arquivo `.env`.
4. **Migre e semeie o banco de dados:**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```
5. **Inicie o servidor:**
   ```bash
   php artisan serve
   ```
6. **Acesse a aplicação:**
   * Abra o navegador e acesse `http://localhost:8000`.

### Observações

* O projeto foi desenvolvido durante o curso de [nome do curso] ministrado por Rafael Lunardelli na plataforma Rocketseat.
* O código-fonte está disponível no repositório [URL do repositório].

### Próximos Passos

* Implementar funcionalidades adicionais, como sistema de pagamento, chat para comunicação, etc.
* Melhorar a interface do usuário e a experiência do usuário.
* Testar e otimizar o desempenho da aplicação.

 
