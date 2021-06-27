function insertNumber(number) {
  document.getElementById('result').value += number
}

function insertOperator(operator) {
  const result = document.getElementById('result').value
  const lastChar = result.substr(result.length - 1)

  if (lastChar == '%' ||
    lastChar == '/' ||
    lastChar == 'x' ||
    lastChar == '-' ||
    lastChar == '+'
  ) {
    deleteCharacter()
    document.getElementById('result').value += `${operator}`
  } else {
    if (result.length == 0) {
      document.getElementById('result').value = 0 + `${operator}`
    } else {
      document.getElementById('result').value += `${operator}`
    }
  }
}

function deleteCharacter() {
  let value = document.getElementById('result').value.slice(0, -1)

  document.getElementById('result').value = value
}

function deleteAllCharacters() {
  document.getElementById('result').value = ""
}

function operation() {
  const result = document.getElementById('result').value

  let prevNumber = ''
  let currentNumber = ''
  let operator = ''

  for (index in result) {
    if (isNaN(Number(result[index]))) {
      operator = result[index]
    }
  }

  [prevNumber, currentNumber] = result.split(operator)

  prevNumber = Number(prevNumber)
  currentNumber = Number(currentNumber)

  switch (operator) {
    case '+':
      document.getElementById('result').value = prevNumber + currentNumber
      break;

    case '-':
      document.getElementById('result').value = prevNumber - currentNumber
      break;

    case 'x':
      document.getElementById('result').value = prevNumber * currentNumber
      break;

    case '/':
      document.getElementById('result').value = prevNumber / currentNumber
      break;

    case '%':
      document.getElementById('result').value = prevNumber % currentNumber
      break;

    default:
      break;
  }
}