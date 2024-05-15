<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Calculadora Simples</title>
</head>
<body>
    <form id="myForm">
        <label for="inputField">Primeiro Valor:</label>
        <input type="text" id="n1" name="inputField"><br><br>

        <label for="selectField">Operação:</label>
        <select id="selectField" name="selectField">
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="multiplicacao">*</option>
            <option value="divisao">/</option>
        </select><br><br>

        <label for="anotherInput">Segundo Valor:</label>
        <input type="text" id="n2" name="anotherInput"><br><br>

        <button type="button" onclick="calculate()">Calcular</button>
    </form>

    <div id="result"></div>

    <script>
        function calculate() {
            // Obtendo os valores dos campos de entrada
            var primeiroValor = parseFloat($('#n1').val());
            var segundoValor = parseFloat($('#n2').val());
            var operacao = $('#selectField').val();
            var resultado;

            // Verificando qual operação foi selecionada e realizando o cálculo
            switch (operacao) {
                case 'soma':
                    resultado = primeiroValor + segundoValor;
                    break;
                case 'subtracao':
                    resultado = primeiroValor - segundoValor;
                    break;
                case 'multiplicacao':
                    resultado = primeiroValor * segundoValor;
                    break;
                case 'divisao':
                    resultado = primeiroValor / segundoValor;
                    break;
                default:
                    resultado = "Operação inválida";
            }

            // Exibindo o resultado na div result
            $('#result').text('Resultado: ' + resultado);
        }
    </script>
</body>
</html>