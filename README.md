<h1>Encurtador de URL</h1>
        <p>Um aplicativo web simples e eficiente para encurtar URLs longas em códigos curtos e fáceis de compartilhar, com rastreamento básico de cliques.</p>
        <p class="text-red-600 font-semibold"><strong>Atenção:</strong> Este projeto é apenas para uso local e serve como um projeto de prática. Para funcionar online e com link personalizado, ele necessita de um domínio próprio.</p>
        <h2>🚀 Funcionalidades</h2>
        <ul>
            <li><strong>Encurtamento de URL:</strong> Converte URLs longas em códigos curtos e únicos.</li>
            <li><strong>Redirecionamento Rápido:</strong> Redireciona usuários da URL curta para a URL original.</li>
            <li><strong>Contagem de Cliques:</strong> Registra o número de vezes que cada URL encurtada é acessada.</li>
            <li><strong>Interface Simples:</strong> Um formulário intuitivo para encurtar URLs e exibir o resultado.</li>
            <li><strong>Validação de URL:</strong> Garante que apenas URLs válidas sejam processadas.</li>
        </ul>
        <h2>🛠️ Tecnologias Utilizadas</h2>
        <p>Este projeto foi desenvolvido utilizando as seguintes tecnologias:</p>
        <ul>
            <li><strong>PHP:</strong> Linguagem de programação backend.</li>
            <li><strong>Laravel (v12.x):</strong> Framework PHP robusto e elegante para o desenvolvimento web.</li>
            <li><strong>Eloquent ORM:</strong> Mapeamento Objeto-Relacional para interação com o banco de dados.</li>
            <li><strong>MySQL:</strong> Sistema de gerenciamento de banco de dados relacional para armazenar as URLs e seus códigos curtos.</li>
            <li><strong>Composer:</strong> Gerenciador de dependências para PHP.</li>
            <li><strong>HTML5 & CSS3:</strong> Para a estrutura e estilização da interface do usuário.</li>
            <li><strong>Git:</strong> Sistema de controle de versão.</li>
        </ul>
        <h2>📐 Padrões de Programação e Arquitetura</h2>
        <p>O projeto segue padrões e boas práticas comuns no desenvolvimento web moderno:</p>
        <ul>
            <li><strong>MVC (Model-View-Controller):</strong> O Laravel é construído sobre o padrão MVC, separando a lógica da aplicação em três componentes principais:
                <ul>
                    <li><strong>Model (<code class="font-mono">app/Models/Url.php</code>):</strong> Representa os dados e a lógica de negócios, interagindo com a tabela <code class="font-mono">urls</code> do banco de dados.</li>
                    <li><strong>View (<code class="font-mono">resources/views/welcome.blade.php</code>):</strong> Responsável pela apresentação dos dados ao usuário (o formulário e a mensagem de sucesso/erro).</li>
                    <li><strong>Controller (<code class="font-mono">app/Http/Controllers/UrlController.php</code>):</strong> Gerencia as requisições do usuário, processa os dados, interage com o Model e seleciona a View apropriada.</li>
                </ul>
            </li>
            <li><strong>Rotas Definidas:</strong> Utilização do sistema de roteamento do Laravel para mapear URLs para as ações do Controller.</li>
            <li><strong>Validação de Requisições:</strong> Uso das funcionalidades de validação do Laravel para garantir a integridade dos dados de entrada (<code class="font-mono">long_url</code> deve ser um formato de URL válido).</li>
            <li><strong>Migrations (Migrações de Banco de Dados):</strong> Gerenciamento do esquema do banco de dados de forma versionada e programática, garantindo a fácil recriação e alteração da estrutura da tabela <code class="font-mono">urls</code>.</li>
            <li><strong>Separation of Concerns (Separação de Preocupações):</strong> Cada parte do projeto (rotas, controller, model, view) tem uma responsabilidade bem definida, o que facilita a manutenção e escalabilidade.</li>
            <li><strong>Helpers do Laravel:</strong> Uso de funções auxiliares como <code class="font-mono">Str::random()</code> para gerar códigos aleatórios e <code class="font-mono">url()</code> para construir URLs.</li>
        </ul>
