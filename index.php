<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="calculator">
        <form name="calculatorForm">
            <div class="display">
                <input type="text" name="display" value="0" readonly>
            </div>
            <div class="buttons">
                <button type="button" onclick="addToDisplay('7')">7</button>
                <button type="button" onclick="addToDisplay('8')">8</button>
                <button type="button" onclick="addToDisplay('9')">9</button>
                <button type="button" onclick="addToDisplay('/')">/</button>
                <button type="button" onclick="addToDisplay('4')">4</button>
                <button type="button" onclick="addToDisplay('5')">5</button>
                <button type="button" onclick="addToDisplay('6')">6</button>
                <button type="button" onclick="addToDisplay('*')">*</button>
                <button type="button" onclick="addToDisplay('1')">1</button>
                <button type="button" onclick="addToDisplay('2')">2</button>
                <button type="button" onclick="addToDisplay('3')">3</button>
                <button type="button" onclick="addToDisplay('-')">-</button>
                <button type="button" onclick="addToDisplay('0')">0</button>
                <button type="button" onclick="addToDisplay('.')">.</button>
                <button type="button" onclick="addToDisplay('+')">+</button>
                <button type="button" onclick="clearDisplay()">C</button>
                <button type="button" onclick="calculateResult()">=</button>
            </div>
        </form>
    </div>

    <script>
        function addToDisplay(value) {
            var display = document.forms['calculatorForm']['display'];
            if (display.value === '0' && value !== '.') {
                display.value = value;
            } else {
                display.value += value;
            }
        }

        function clearDisplay() {
            document.forms['calculatorForm']['display'].value = '0';
        }

        function calculateResult() {
            var display = document.forms['calculatorForm']['display'];
            var result = eval(display.value);
            display.value = result;
        }
    </script>
</body>
</html>

