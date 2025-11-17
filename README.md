# RexIA - Site Institucional

Site institucional da RexIA, empresa especializada em automação, inteligência artificial e transformação digital.

## 📋 Índice

- [Sobre](#sobre)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Tecnologias](#tecnologias)
- [Funcionalidades](#funcionalidades)
- [Instalação](#instalação)
- [Sistema de Blog](#sistema-de-blog)
- [Sistema de Análise de Maturidade Digital](#sistema-de-análise-de-maturidade-digital)
- [Configuração de Webhooks](#configuração-de-webhooks)
- [Deploy](#deploy)

## 🎯 Sobre

O site da RexIA é uma plataforma institucional moderna que apresenta serviços, cases de sucesso, portfólio e um sistema completo de análise de maturidade digital para clientes e prospects.

## 📁 Estrutura do Projeto

```
rexia-web-site/
├── assets/
│   ├── css/
│   │   ├── main.css          # CSS principal do site
│   │   └── blog.css          # CSS específico do blog
│   ├── js/
│   │   └── main.js           # JavaScript principal
│   ├── img/
│   │   ├── logo-dark-bg.png  # Logo para tema escuro
│   │   ├── logo-light-bg.png # Logo para tema claro
│   │   ├── favicon.png       # Favicon do site
│   │   └── ...               # Outras imagens
│   └── data/
│       └── posts.json        # Base de dados dos posts do blog
├── includes/
│   ├── header.php            # Header comum a todas as páginas
│   └── footer.php            # Footer comum a todas as páginas
├── index.php                 # Página inicial
├── blog.php                  # Listagem e visualização de posts
├── contato.php               # Formulário de contato
├── portfolio.php             # Portfólio de cases
├── analise.php               # Escolha de tipo de análise
├── analise-pessoal.php       # Formulário de análise pessoal (15 perguntas)
├── analise-empresarial.php   # Formulário de análise empresarial (20 perguntas)
├── 404.php                   # Página de erro 404
├── save-post.php             # Endpoint para salvar posts via API
├── .htaccess                 # Configurações do Apache
└── README.md                 # Este arquivo
```

## 🛠 Tecnologias

- **Backend:** PHP 7.4+
- **Frontend:** HTML5, CSS3, JavaScript (Vanilla)
- **Icons:** Lucide Icons
- **Design System:** Custom design system com variáveis CSS
- **Integrações:** n8n (webhooks para automação)

## ✨ Funcionalidades

### 1. Site Institucional
- Home com apresentação de serviços
- Cases de sucesso
- Portfólio de projetos
- Tech Stack
- Depoimentos
- Tema claro/escuro

### 2. Blog Dinâmico
- Sistema de posts via JSON
- Listagem de artigos
- Visualização individual de posts
- Sistema de tags
- Integração com n8n para publicação automatizada

### 3. Análise de Maturidade Digital
- **Análise Pessoal:** 15 perguntas sobre habilidades digitais
- **Análise Empresarial:** 20 perguntas sobre transformação digital
- Formulários paginados com validação
- Cálculo automático de scores
- Envio de relatório por email via n8n

### 4. Formulário de Contato
- Integração com webhook n8n
- Captura de UTMs
- Proteção anti-spam (honeypot)

## 🚀 Instalação

### Requisitos
- PHP 7.4 ou superior
- Apache com mod_rewrite habilitado
- Servidor web (Apache/Nginx)

### Passos

1. Clone o repositório:
```bash
git clone https://github.com/rexia-intel-automation/rexia-web-site.git
cd rexia-web-site
```

2. Configure o servidor web para apontar para o diretório do projeto

3. Configure as permissões:
```bash
chmod 755 assets/data/
chmod 644 assets/data/posts.json
```

4. Configure os webhooks n8n (veja seção [Configuração de Webhooks](#configuração-de-webhooks))

5. Acesse o site no navegador

## 📝 Sistema de Blog

### Estrutura de um Post

Os posts são armazenados em `assets/data/posts.json` no seguinte formato:

```json
[
  {
    "slug": "nome-do-post",
    "title": "Título do Post",
    "excerpt": "Resumo curto do post para listagem",
    "date": "2025-01-15",
    "readTime": "5 min",
    "tags": ["automação", "IA", "n8n"],
    "imageUrl": "/assets/img/post-image.jpg",
    "contentHtml": "<h2>Título da Seção</h2><p>Conteúdo em HTML...</p>"
  }
]
```

### Publicar um Novo Post via HTTP POST

A RexIA possui um endpoint que permite publicar posts automaticamente via HTTP POST. Este endpoint é protegido por token e ideal para integrações com n8n ou outros sistemas de automação.

#### Endpoint

```
POST https://seudominio.com/save-post.php
Content-Type: application/json
```

#### Autenticação

O endpoint requer um token de segurança enviado no corpo da requisição:

```json
{
  "token": "rex_token_@@_2025"
}
```

⚠️ **Importante:** Mantenha este token seguro! Altere-o em `save-post.php` se necessário.

#### Formato da Requisição

```json
{
  "token": "rex_token_@@_2025",
  "post": {
    "slug": "automatizando-whatsapp-com-n8n",
    "title": "Como Automatizar o WhatsApp com n8n",
    "excerpt": "Aprenda a criar fluxos de automação poderosos no WhatsApp usando n8n e a API oficial.",
    "date": "2025-01-15",
    "readTime": "8 min",
    "tags": ["automação", "n8n", "WhatsApp"],
    "imageUrl": "/assets/img/whatsapp-automation.jpg",
    "contentHtml": "<h2>Introdução</h2><p>O WhatsApp é uma ferramenta...</p>"
  }
}
```

#### Exemplo com cURL

```bash
curl -X POST https://seudominio.com/save-post.php \
  -H "Content-Type: application/json" \
  -d '{
    "token": "rex_token_@@_2025",
    "post": {
      "slug": "meu-novo-post",
      "title": "Meu Novo Post",
      "excerpt": "Descrição resumida",
      "date": "2025-01-15",
      "readTime": "5 min",
      "tags": ["tag1", "tag2"],
      "imageUrl": "/assets/img/imagem.jpg",
      "contentHtml": "<h2>Título</h2><p>Conteúdo...</p>"
    }
  }'
```

#### Exemplo com JavaScript/Node.js

```javascript
const response = await fetch('https://seudominio.com/save-post.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    token: 'rex_token_@@_2025',
    post: {
      slug: 'meu-novo-post',
      title: 'Meu Novo Post',
      excerpt: 'Descrição resumida',
      date: '2025-01-15',
      readTime: '5 min',
      tags: ['tag1', 'tag2'],
      imageUrl: '/assets/img/imagem.jpg',
      contentHtml: '<h2>Título</h2><p>Conteúdo...</p>'
    }
  })
});

const result = await response.json();
console.log(result);
```

#### Exemplo com Python

```python
import requests
import json

url = 'https://seudominio.com/save-post.php'
data = {
    'token': 'rex_token_@@_2025',
    'post': {
        'slug': 'meu-novo-post',
        'title': 'Meu Novo Post',
        'excerpt': 'Descrição resumida',
        'date': '2025-01-15',
        'readTime': '5 min',
        'tags': ['tag1', 'tag2'],
        'imageUrl': '/assets/img/imagem.jpg',
        'contentHtml': '<h2>Título</h2><p>Conteúdo...</p>'
    }
}

response = requests.post(url, json=data)
print(response.json())
```

#### Exemplo com n8n (HTTP Request Node)

Configure um nó HTTP Request no n8n com:

- **Method:** POST
- **URL:** `https://seudominio.com/save-post.php`
- **Body Content Type:** JSON
- **Body:**
```json
{
  "token": "rex_token_@@_2025",
  "post": {
    "slug": "{{ $json.slug }}",
    "title": "{{ $json.title }}",
    "excerpt": "{{ $json.excerpt }}",
    "date": "{{ $json.date }}",
    "readTime": "{{ $json.readTime }}",
    "tags": {{ $json.tags }},
    "imageUrl": "{{ $json.imageUrl }}",
    "contentHtml": "{{ $json.contentHtml }}"
  }
}
```

#### Respostas da API

**Sucesso (200):**
```json
{
  "status": "ok",
  "updated": false,
  "totalPosts": 5,
  "slug": "meu-novo-post"
}
```

**Erro - Token Inválido (401):**
```json
{
  "error": "Unauthorized"
}
```

**Erro - Método Inválido (405):**
```json
{
  "error": "Method not allowed"
}
```

**Erro - JSON Inválido (400):**
```json
{
  "error": "Invalid JSON"
}
```

#### Comportamento do Endpoint

- Se um post com o mesmo `slug` já existir, ele será **atualizado**
- Se for um novo `slug`, o post será **adicionado** à lista
- O arquivo `posts.json` é automaticamente atualizado
- A resposta indica se foi uma atualização (`updated: true`) ou novo post (`updated: false`)

### Campos Obrigatórios

| Campo | Tipo | Descrição |
|-------|------|-----------|
| `slug` | String | Identificador único do post (usado na URL) |
| `title` | String | Título do post |
| `excerpt` | String | Resumo para listagem |
| `date` | String | Data no formato YYYY-MM-DD |
| `contentHtml` | String | Conteúdo completo em HTML |

### Campos Opcionais

| Campo | Tipo | Descrição |
|-------|------|-----------|
| `readTime` | String | Tempo de leitura (ex: "5 min") |
| `tags` | Array | Lista de tags/categorias |
| `imageUrl` | String | URL da imagem de capa |

## 🔍 Sistema de Análise de Maturidade Digital

### Análise Pessoal

- **Página:** `/analise-pessoal.php`
- **Perguntas:** 15 divididas em 3 páginas
- **Dimensões avaliadas:**
  - Uso de Tecnologia e Ferramentas
  - Produtividade e Colaboração Digital
  - Mindset Digital e Inovação
- **Webhook n8n:** `https://primary-production-55af6.up.railway.app/webhook/a00800c7-f2f8-4079-bdb6-81bab0758b9b`

### Análise Empresarial

- **Página:** `/analise-empresarial.php`
- **Perguntas:** 20 divididas em 4 páginas
- **Dimensões avaliadas:**
  - Estratégia e Cultura Digital
  - Processos e Automação
  - Dados e Analytics
  - Tecnologia, Clientes e Pessoas
- **Webhook n8n:** `https://primary-production-55af6.up.railway.app/webhook/f962ca3c-e969-4d90-82d1-0724bcc886d2`

### Dados Enviados aos Webhooks

Os formulários enviam dados estruturados via POST/JSON para os webhooks n8n configurados.

#### Formato - Análise Pessoal

```json
{
  "tipo": "analise_pessoal",
  "timestamp": "2025-01-15T14:30:00.000Z",
  "informacoes_basicas": {
    "nome": "João Silva",
    "email": "joao@email.com",
    "idade": "26-35"
  },
  "respostas": {
    "q1": 4,
    "q2": 3,
    "q3": 5,
    // ... até q15
  },
  "score": {
    "total": 58,
    "maximo": 75,
    "percentual": 77
  }
}
```

#### Formato - Análise Empresarial

```json
{
  "tipo": "analise_empresarial",
  "timestamp": "2025-01-15T14:30:00.000Z",
  "informacoes_empresa": {
    "empresa": "Empresa XYZ",
    "nome_contato": "Maria Santos",
    "cargo": "CTO",
    "email": "maria@empresa.com",
    "porte": "media",
    "setor": "Tecnologia"
  },
  "respostas": {
    "q1": 4,
    "q2": 3,
    // ... até q20
  },
  "score": {
    "total": 78,
    "maximo": 100,
    "percentual": 78
  },
  "dimensoes": {
    "estrategia_cultura": 22,
    "processos_automacao": 19,
    "dados_analytics": 18,
    "tecnologia_pessoas": 19
  }
}
```

## ⚙️ Configuração de Webhooks

### Contato

Edite o arquivo `contato.php` e altere a linha:

```javascript
const WEBHOOK_URL = "SUA_URL_DO_WEBHOOK_N8N";
```

### Análise Pessoal

Edite o arquivo `analise-pessoal.php` e altere a linha:

```javascript
const WEBHOOK_URL = "SUA_URL_DO_WEBHOOK_N8N";
```

### Análise Empresarial

Edite o arquivo `analise-empresarial.php` e altere a linha:

```javascript
const WEBHOOK_URL = "SUA_URL_DO_WEBHOOK_N8N";
```

### Blog (Save Post)

Edite o arquivo `save-post.php` e altere:

```php
$SECRET_TOKEN = 'SEU_TOKEN_SEGURO';
```

## 🌐 Deploy

### Requisitos de Servidor

- **PHP:** 7.4 ou superior
- **Apache:** Com mod_rewrite habilitado
- **SSL:** Recomendado para produção
- **Permissões:** 755 para diretórios, 644 para arquivos

### Configuração do .htaccess

O arquivo `.htaccess` já está configurado com:
- Redirecionamento de URLs amigáveis
- Segurança de headers
- Compressão GZIP
- Cache de assets

### Variáveis de Ambiente

Configure as seguintes variáveis conforme necessário:

1. **Token do Blog** (`save-post.php`):
   ```php
   $SECRET_TOKEN = 'seu_token_seguro_aqui';
   ```

2. **Webhooks n8n:**
   - Contato: `contato.php`
   - Análise Pessoal: `analise-pessoal.php`
   - Análise Empresarial: `analise-empresarial.php`

### Checklist de Deploy

- [ ] Configurar servidor web (Apache/Nginx)
- [ ] Instalar PHP 7.4+
- [ ] Configurar permissões de arquivos
- [ ] Atualizar webhooks n8n
- [ ] Alterar token do blog
- [ ] Configurar SSL/HTTPS
- [ ] Testar formulários
- [ ] Testar publicação de posts
- [ ] Validar tema claro/escuro
- [ ] Verificar responsividade mobile

## 🔒 Segurança

### Práticas Implementadas

- ✅ Honeypot anti-spam em todos os formulários
- ✅ Validação de inputs no servidor e cliente
- ✅ Token de autenticação para API de posts
- ✅ Sanitização de dados recebidos
- ✅ Headers de segurança no .htaccess
- ✅ CORS configurado para webhooks

### Recomendações Adicionais

1. **Altere o token padrão** do blog em `save-post.php`
2. **Use HTTPS** em produção
3. **Mantenha o PHP atualizado**
4. **Configure backups regulares** de `posts.json`
5. **Monitore logs** de acesso à API

## 📊 Manutenção

### Backup do Blog

Faça backup regular do arquivo:
```bash
cp assets/data/posts.json assets/data/posts.json.backup
```

### Limpeza de Cache

Se usar cache, limpe após atualizações:
```bash
# Limpar cache do navegador alterando versão dos assets
# Edite header.php e altere ?v=5 para ?v=6
```

### Logs

Monitore logs de acesso ao endpoint de posts:
```bash
tail -f /var/log/apache2/access.log | grep save-post.php
```

## 🤝 Contribuindo

Para contribuir com o projeto:

1. Fork o repositório
2. Crie uma branch para sua feature (`git checkout -b feature/nova-funcionalidade`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova funcionalidade'`)
4. Push para a branch (`git push origin feature/nova-funcionalidade`)
5. Abra um Pull Request

## 📄 Licença

© 2025 RexIA. Todos os direitos reservados.

## 📞 Suporte

Para suporte e dúvidas:
- **Website:** [rexia.com.br](https://rexia.com.br)
- **Email:** contato@rexia.com.br
- **WhatsApp:** +55 61 99610-8445

---

Desenvolvido com ❤️ pela equipe RexIA
