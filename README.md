# Loja de Chocolates de Páscoa (Crud de produtos e fornecedores com tema de páscoa).

Este projeto foi desenvolvido para a disciplina de Desenvolvimento de Aplicações para Web II, com o objetivo de aplicar, na prática, os conceitos estudados ao longo da matéria.

## Sobre o sistema

A aplicação consiste em um sistema web para gerenciamento de produtos (chocolates) e seus respectivos fornecedores. A proposta simula o funcionamento de uma loja temática de Páscoa, permitindo o controle organizado das informações cadastradas.

O sistema foi construído buscando simplicidade, clareza e funcionalidade, garantindo uma navegação intuitiva e uma boa experiência de uso.

## Funcionalidades

O sistema implementa operações de CRUD (Create, Read, Delete) para as seguintes entidades:

### Chocolates
- Cadastro de novos chocolates  
- Listagem dos chocolates cadastrados  
- Exclusão de registros  
- Associação com fornecedores  

### Fornecedores
- Cadastro de fornecedores  
- Listagem de fornecedores  
- Exclusão de registros  

## Relacionamento entre entidades

O sistema estabelece o seguinte relacionamento:

- Um fornecedor pode estar associado a vários chocolates  
- Cada chocolate está vinculado a um único fornecedor  

Esse relacionamento permite uma melhor organização dos dados e representa uma situação comum em sistemas de gestão.

## Interface

A interface foi desenvolvida utilizando Blade e Bootstrap, com foco em organização visual e facilidade de uso.

Foram aplicados ajustes de layout e estilização para tornar o sistema mais agradável, incluindo padronização de cores, organização dos elementos na tela e utilização de feedback visual para ações realizadas pelo usuário.

## Dados para teste

O projeto conta com seeders para popular automaticamente o banco de dados com registros iniciais.

Essa funcionalidade facilita a realização de testes e demonstrações do sistema, dispensando o cadastro manual de dados.

## Tecnologias utilizadas

- PHP  
- Laravel  
- MySQL  
- Blade  
- Bootstrap  

## Como executar o projeto

1. Clonar o repositório:
