```markdown
# 📰 UK Newspaper - Edição Especial

![Banner](img/london.jpg)

## 📋 Sobre o Projeto

Trabalho Interdisciplinar das disciplinas de **Inglês** e **PAM/PW** (Programação de Aplicativos Mobile / Programação Web) da **ETEC Sales Gomes - Tatuí/SP**.

O projeto consiste em um jornal digital em formato web no estilo vintage (jornal impresso antigo) que apresenta conteúdo cultural sobre o Reino Unido, abordando aspectos linguísticos, históricos, geográficos e turísticos da cultura britânica.

---

## 👥 Equipe

| Nome | Função |
|------|--------|
| Diego | Desenvolvimento |
| Maria | Desenvolvimento |
| Emily | Desenvolvimento |

### Professores Orientadores

| Nome | Disciplina |
|------|------------|
| Marcela | Inglês |
| Diogo | PAM/PW |

---

## 🛠️ Tecnologias Utilizadas

- **HTML5** - Estrutura semântica do jornal
- **CSS3** - Estilização vintage com design responsivo
- **PHP 7.4+** - Renderização dinâmica dos dados
- **Bootstrap 5.3** - Framework CSS para grid e componentes
- **Bootstrap Icons** - Ícones decorativos nas seções
- **JavaScript (Vanilla)** - Interatividade do carrossel e animações

---

## 📂 Estrutura do Projeto

```
📁 projeto-jornal/
│
├── 📄 index.php              # Página principal do jornal
├── 📄 dados.php              # Array com todo conteúdo textual
├── 📄 style.css              # Estilos personalizados
├── 📄 script.js              # Interatividade e animações (opcional)
├── 📄 README.md              # Documentação do projeto
│
├── 📁 img/                   # Imagens do jornal
│   ├── london.jpg            # Banner principal (1200×500px)
│   ├── mapa.jpg              # Mapa do Reino Unido (800×500px)
│   ├── historia.jpg          # Imagem histórica (800×500px)
│   ├── fishchips.jpg         # Gastronomia (800×500px)
│   ├── bigben.jpg            # Carrossel - Big Ben (1200×600px)
│   ├── towerbridge.jpg       # Carrossel - Tower Bridge (1200×600px)
│   ├── stonehenge.jpg        # Carrossel - Stonehenge (1200×600px)
│   ├── buckingham.jpg        # Carrossel - Buckingham (1200×600px)
│   └── londoneye.jpg         # Carrossel - London Eye (1200×600px)
│
└── 📁 video/                 # Vídeos (opcional - pode usar YouTube)
    └── sotaque-britanico.mp4
```

---

## 🚀 Como Executar

### Opção 1 - Servidor PHP Local

```bash
# Na pasta do projeto, execute:
php -S localhost:8000
```

Depois acesse: `http://localhost:8000`

### Opção 2 - XAMPP / WAMP

1. Copie a pasta do projeto para `htdocs` (XAMPP) ou `www` (WAMP)
2. Inicie o Apache
3. Acesse: `http://localhost/pasta-do-projeto`

### Opção 3 - Deploy (Recomendado para apresentação)

Faça deploy gratuito em uma dessas plataformas:

- [InfinityFree](https://infinityfree.com) - PHP grátis
- [000webhost](https://000webhost.com) - PHP grátis

---

## 📱 Responsividade

O jornal se adapta a diferentes tamanhos de tela:

| Dispositivo | Largura | Comportamento |
|-------------|---------|---------------|
| TV / Projetor | 1200px+ | Layout completo, imagens grandes |
| Desktop | 992px - 1200px | Layout padrão do jornal |
| Tablet | 768px - 992px | Título reduzido, padding menor |
| Celular | até 480px | Layout empilhado, fonte reduzida |

---

## 🎨 Características do Design

- 🏛️ Estilo **vintage/jornal impresso** com fontes serifadas (Times New Roman)
- 📜 Fundo **bege envelhecido** (#f6f0df) simulando papel
- 🖼️ Bordas duplas e sombras simulando impressão tipográfica
- 🎠 **Carrossel interativo** de pontos turísticos com informações dinâmicas
- 📊 **Tabela comparativa** de vocabulário britânico vs americano
- 🎴 **Cards** para expressões idiomáticas com efeito hover
- 🔝 **Botão "Voltar ao topo"** (via script.js)
- ♿ Elementos de **acessibilidade** (aria-label, visually-hidden, focus-visible)

---

## 📝 Conteúdo do Jornal

| Seção | Conteúdo |
|-------|----------|
| **Localização Geográfica** | Países, capitais, área e oceanos |
| **Influência Cultural** | História da língua inglesa |
| **Diferenças de Sotaque** | 40+ sotaques regionais |
| **Breve História** | Dos celtas ao Império Britânico |
| **Pontos Turísticos** | 5 destinos com carrossel |
| **Gastronomia** | Pratos típicos britânicos |
| **Curiosidades Culturais** | 12 fatos interessantes |
| **Fatos Rápidos** | Dados gerais do país |
| **Vocabulário Específico** | 20 palavras britânicas |
| **Expressões Idiomáticas** | 12 expressões comuns |
| **Variação Linguística** | 20 palavras UK vs USA |
| **Vídeo** | Sotaques britânicos (YouTube) |

---

## 🔧 Configuração

### Para usar link do YouTube (recomendado):

No arquivo `dados.php`:
```php
$video = [
    "titulo" => "20 British Accents in One Video",
    "descricao" => "Neste vídeo, um especialista...",
    "tipo" => "youtube",
    "link" => "https://www.youtube.com/watch?v=XXXXXXXXXXX"
];
```

### Para usar vídeo local:

```php
$video = [
    "titulo" => "20 British Accents in One Video",
    "descricao" => "Neste vídeo, um especialista...",
    "tipo" => "local",
    "arquivo" => "video/sotaque-britanico.mp4"
];
```

---

## 📐 Tamanhos de Imagem

| Imagem | Largura × Altura | Proporção |
|--------|------------------|-----------|
| Banner (london.jpg) | 1200 × 500px | 12:5 |
| Carrossel | 1200 × 600px | 2:1 |
| Seções | 800 × 500px | 8:5 |

**Formato recomendado:** JPG (80-85% qualidade) ou WebP  
**Tamanho máximo por imagem:** 200KB

---

## 📄 Licença

Projeto acadêmico desenvolvido para fins educacionais.

---

## 📅 Data

**Junho de 2026**

---

## 🏫 Instituição

**ETEC Sales Gomes**  
Tatuí - São Paulo - Brasil

---

<p align="center">
    <strong>UK Newspaper</strong><br>
    <em>Special Edition - The United Kingdom</em><br>
    Trabalho Interdisciplinar de Inglês e PAM/PW
</p>
```
