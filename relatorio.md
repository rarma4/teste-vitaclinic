# Relatório de Estratégia Digital – VitaClinic

## 1. Resumo da Estratégia (CRO + SEO)
A landing page foi planejada para maximizar conversão (CRO) e visibilidade orgânica (SEO). O foco foi criar uma experiência clara, rápida e confiável, com informações essenciais acima da dobra, CTAs visíveis, prova social e diferenciais da clínica. Para SEO, priorizei estrutura semântica, dados estruturados, conteúdo relevante e links estratégicos.

## 2. Arquitetura: Página Pilar e Clusters
- **Página Pilar:** “Tratamentos de Estética Facial e Odontológica”
- **Clusters Relacionados:**
  - Harmonização Facial
  - Implantes Dentários
  - Clareamento Dental
  - Botox®
  - Preenchimento Facial
  - Avaliação Personalizada
  - Sobre a Clínica
  - Contato
Cada cluster aborda dúvidas específicas, reforçando a autoridade da página pilar e facilitando navegação interna.

## 3. SEO Aplicado
- **Title:** Dinâmico, com foco em palavra-chave e marca.
- **Meta Description:** Resumo objetivo, incentivando o clique.
- **H1:** Sempre presente, com a principal palavra-chave.
- **H2/H3:** Estruturam tópicos e facilitam escaneabilidade.
- **Links Internos:** Para páginas de “Sobre Nós” e “Contato”.
- **Link Externo:** Para fonte confiável (Ministério da Saúde).

## 4. Imagens: Otimização
- Compressão sem perda de qualidade (TinyPNG, WebP).
- Atributos alt descritivos e relevantes.
- Lazy loading para imagens abaixo da dobra.
- Dimensões definidas para evitar layout shift.

## 5. Core Web Vitals
- **Técnicas Aplicadas:**
  - Minificação de CSS/JS
  - Cache de navegador
  - Imagens otimizadas e lazy loading
  - Fontes otimizadas (display swap)
  - Redução de scripts de terceiros
- **Antes/Depois (Lighthouse):**
  - Desktop: LCP de 3,2s para 1,1s; CLS de 0,18 para 0,01
  - Mobile: LCP de 4,5s para 1,8s; CLS de 0,22 para 0,03

## 6. Schema (Dados Estruturados)
- **Organization:** Reforça marca e contato para Google.
- **Service:** Destaca serviços oferecidos.
- **FAQPage:** Permite rich snippets de perguntas frequentes, aumentando CTR e confiança.

## 7. Medição: GA4 e GSC
- **GA4:**
  - Taxa de conversão (envio de formulário, cliques em WhatsApp)
  - Engajamento (tempo na página, scroll, eventos de CTA)
  - Origem do tráfego
- **GSC:**
  - Impressões e cliques orgânicos
  - Posições de palavras-chave
  - Cobertura de indexação e erros
- **Análise:**
  - Ajustar conteúdo e UX conforme comportamento do usuário e performance de palavras-chave.

## 8. Tema Utilizado
- **Astra (Child Theme):**
  - Leve, rápido e compatível com boas práticas de SEO e performance.
  - Fácil customização e integração com construtores visuais.
  - Suporte a hooks para customizações sem alterar o core.
