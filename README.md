# rotazapp/hex-core

Hexagonal architecture core for PHP (Laravel or any framework), focused on interfaces, helpers, and events for decoupled, event-driven microservices.

## Features

- **Port**: Entry interfaces (HTTP, Websocket, GRPC, Webhook, etc.)
- **Processor**: Message/event processing and orchestration
- **Adapter**: Output interfaces (API, database, files, etc.)
- **Helpers**: Mapper, Parser
- **Event**: Base interfaces for reusable events between microservices

## Installation

```bash
composer require rotazapp/hex-core
```

## Usage

Implement the interfaces from this package in your modules and services to ensure decoupling and reusability.

### Best Practices

- **Reuse Interfaces**: Always implement the provided interfaces in your application layers. This allows you to swap implementations (e.g., change from HTTP to Websocket) without affecting business logic.
- **Decouple Adapters**: Use Adapter interfaces to abstract external dependencies (APIs, databases). This makes testing and maintenance easier.
- **Event-Driven Design**: Use Event interfaces to standardize communication between microservices. This enables consistent event handling and easier integration.
- **Helpers**: Use Mapper and Parser helpers to transform data between layers, keeping your domain logic clean.

### Practical Examples

#### 1. Implementando uma Porta de Entrada

```php
use Rotaz\Hex\Port\Inbound\HttpMessagePortInterface;

class UserController implements HttpMessagePortInterface
{
    public function handleRequest($request)
    {
        // Validar e encaminhar para o processador
    }
}
```

#### 2. Criando um Processador

```php
use Rotaz\Hex\Processor\HttpProcessInterface;

class UserRegistrationProcessor implements HttpProcessInterface
{
    public function process($message)
    {
        // Orquestrar o fluxo de registro de usuário
    }
}
```

#### 3. Usando um Adapter

```php
use Rotaz\Hex\Adapter\Outbound\ApiAdapterInterface;

class ExternalApiAdapter implements ApiAdapterInterface
{
    public function send($payload)
    {
        // Enviar dados para API externa
    }
}
```

#### 4. Publicando um Evento

```php
use Rotaz\Hex\Event\OutboundEventInterface;

class UserRegisteredEvent implements OutboundEventInterface
{
    public function getPayload()
    {
        // Retornar dados do evento
    }
}
```

#### 5. Utilizando Helpers

```php
use Rotaz\Hex\Helpers\Mapper;

class UserMapper extends Mapper
{
    public function map($source)
    {
        // Mapear dados de DTO para Entidade
    }
}
```

## Estrutura

- `Rotaz\Hex\Port\Inbound\...`
- `Rotaz\Hex\Processor\...`
- `Rotaz\Hex\Adapter\Outbound\...`
- `Rotaz\Hex\Helpers\...`
- `Rotaz\Hex\Event\...`

---

Ao seguir essas práticas e exemplos, você garante que seus microsserviços sejam modulares, testáveis e fáceis de manter.

