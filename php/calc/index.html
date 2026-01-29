<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Калькулятор</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="calculator">
  <input type="text" id="display" readonly>
  <br>
  <button onclick="append('7')">7</button>
  <button onclick="append('8')">8</button>
  <button onclick="append('9')">9</button>
  <button onclick="append('/')">/</button>
  <br>
  <button onclick="append('4')">4</button>
  <button onclick="append('5')">5</button>
  <button onclick="append('6')">6</button>
  <button onclick="append('*')">*</button>
  <br>
  <button onclick="append('1')">1</button>
  <button onclick="append('2')">2</button>
  <button onclick="append('3')">3</button>
  <button onclick="append('-')">-</button>
  <br>
  <button onclick="append('0')">0</button>
  <button onclick="append('(')">(</button>
  <button onclick="append(')')">)</button>
  <button onclick="append('+')">+</button>
  <br>
  <button onclick="clearDisplay()">C</button>
  <button onclick="calculate()">=</button>
</div>

<script>
function append(char) {
    document.getElementById('display').value += char;
}

function clearDisplay() {
    document.getElementById('display').value = '';
}

function calculate() {
    const expression = document.getElementById('display').value;
    fetch('calc.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'expr=' + encodeURIComponent(expression)
    })
    .then(response => response.text())
    .then(result => {
        document.getElementById('display').value = result;
    });
}
</script>
</body>
</html>
