<h3>
    Funcionario: {{ $nome->getNome() }} <br>
    Número de Inscrição: {{ $numerodeiscricao->getNumeroDeIscricao() }} <br>
    Cargo: Junior <br>
    Salário por hora trabalhada: {{ $salario() }} <br>
    Horas trabalhadas por mês: {{ $horasTrabalhadas }} <br>
    Salário total do mês: {{ $junior->saldoAtual }} <br>
</h3>