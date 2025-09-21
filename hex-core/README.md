# hex-core

Este núcleo define contratos, interfaces e utilitários essenciais para a implementação de microsserviços PHP seguindo o padrão da arquitetura hexagonal (Ports & Adapters).  
A proposta é centralizar contratos e helpers comuns, promovendo desacoplamento e padronização entre serviços distintos.

Principais componentes:
- **Adapters**: Interfaces para integração com sistemas externos (API, HTTP, etc).
- **Ports**: Contratos de entrada para interação com o domínio (mensagens, eventos, etc).
- **Events**: Contratos para eventos internos e externos.
- **Helpers**: Utilitários para mapeamento e parsing de dados.
- **Processors**: Contratos para processamento de mensagens e requisições.

Este repositório não implementa regras de domínio, apenas define contratos e utilitários compartilháveis.
