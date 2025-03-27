# Conversor de Moedas Online 2.0

## Descrição
Este projeto é um conversor de moedas simples que permite converter valores em reais (BRL) para dólar americano (USD) utilizando a API do Banco Central do Brasil para obter a cotação do dólar em tempo real.

O projeto foi desenvolvido como parte de estudos sobre **PHP**, **HTML**, **CSS** e integração com APIs.

## Tecnologias Utilizadas
- **PHP**: Para processar os dados e consumir a API do Banco Central.
- **HTML**: Para estruturar a interface do usuário.
- **CSS**: Para estilizar o layout e melhorar a experiência do usuário.
- **Banco Central do Brasil API**: Para obter a cotação do dólar.

## Como Usar
1. Insira um valor em reais no campo do formulário.
2. Clique no botão **"Converter"**.
3. O sistema irá buscar a taxa de câmbio atual e exibir o valor convertido em dólares.

## Estrutura do Projeto
```
/conversor-moedas
│── index.html  # Interface principal do sistema
│── conversor.php  # Script para buscar a cotação e calcular a conversão
│── style.css  # Estilização do site
│── README.md  # Documento explicativo do projeto
```

## Como Executar o Projeto
1. Clone o repositório:
   ```bash
   git clone https://github.com/MateusTMoreira/Conversor-de-Moedas.git
   ```
2. Coloque os arquivos em um servidor local como **XAMPP** ou **WAMP**.
3. Acesse `http://localhost/Conversor-de-Moedas/index.html` no navegador.

## Melhorias Futuras
- Adicionar suporte para mais moedas.
- Criar um histórico de conversões.
- Implementar conversão em tempo real sem recarregar a página (usando AJAX/JavaScript).

## Autor
Projeto desenvolvido por **Mateus Moreira**, baseado em aulas de estudo sobre PHP e integração com APIs.

## Licença
Este projeto está sob a licença MIT. Sinta-se à vontade para usar e modificar!

