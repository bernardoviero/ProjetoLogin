![Logo](https://i.ibb.co/3WPMqrs/login.png)


# ProjetoLogin: Tela de Login funcional.

## Objetivos Gerais:
Realizar o Login em um sistema simples.

## Objetivos Específicos:
Por em práticamente os conhecimentos adquiridos de Php, Html, Css e Banco de Dados.

## Bibliotecas Utilizadas
[PHPMailer](https://github.com/PHPMailer/PHPMailer) - Envio de E-mails.

## Stack Utilizada

* **PHP** - Linguagem de programação
* **VisualStudioCode** - IDE
* **MySQL** - Banco de dados
* **PhPMyAdmin** - Gerenciador do banco de dados
* **XAMPP** - Servidor para hospedagem do Banco e da Aplicação.

## Instalação

### XAMP
Ao baixar o sistema é necessário a utilização do XAMPP.
Caso já possua, apenas coloque a pasta do sistema dentro do seu /xampp/htdocs/. E inicie o servidor e o banco de dados.

### BANCO DE DADOS
-- Database: `login`

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'Nome teste', 'usuario', '1f29244727931d79deeb9516367e7688', 'teste@gmail.com'),
(3, NULL, 'usuario2', '0aee913e006edcea8462645d93174cbc', 'teste2@gmail.com');

--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

### ACESSAR O SERVIDOR
Agora basta acessar seu localhost, no navegador de sua preferência.
O desenvolvimento desse sistema é apenas para aplicações acadêmicas, não sendo recomendados de se adicionar em sistemas "reais".

## Autores

- [@bernardoviero](https://www.github.com/bernardoviero)