let send = 0.0
let received = 0.0
let balance = 0.0

function limparSelect(campo) {
  while (campo.length > 1) {
    campo.remove(1)
  }
}

function fillSelectBanks(data) {
  let banks = document.getElementById("banks")
  limparSelect(banks)

  for (let index in data) {
    const { code, name } = data[index]

    let option = document.createElement('option')

    option.value = `${name} - ${code}`
    option.innerHTML = `${name} - ${code}`

    banks.appendChild(option)
  }
}

function loadBanks() {
  fetch('https://brasilapi.com.br/api/banks/v1')
    .then(response => response.json())
    .then(data => fillSelectBanks(data))
    .catch(error => console.log(error))
}

function changePlaceholderValueKey() {
  const keySelect = document.getElementById('key')
  const keyOptionIndex = keySelect.selectedIndex
  const keyOptionValue = keySelect.options[keyOptionIndex].value

  switch (keyOptionValue) {
    case '1':
      document.getElementById('valueKey').placeholder = '000.000.000-00 *'
      break;

    case '2':
      document.getElementById('valueKey').placeholder = '00.000.000/0000-00 *'
      break;

    case '3':
      document.getElementById('valueKey').placeholder = 'exemplo@exemplo.com *'
      break;

    case '4':
      document.getElementById('valueKey').placeholder = '(00)00000-0000 *'
      break;

    case '5':
      document.getElementById('valueKey').placeholder = 'Cole sua chave aleatória *'
      break;

    default:
      break;
  }
}

function verifyCorrectData() {
  const keySelect = document.getElementById('key')
  const keyOptionIndex = keySelect.selectedIndex
  const keyOptionValue = keySelect.options[keyOptionIndex].value

  const valueKey = document.getElementById('valueKey').value

  const bankSelect = document.getElementById('banks')
  const bankOptionIndex = bankSelect.selectedIndex
  const bankOptionValue = bankSelect.options[bankOptionIndex].value

  const money = document.getElementById('money').value

  const date = document.getElementById('dateValue').value

  const typeOperationSelect = document.getElementById('banks')
  const typeOperationOptionIndex = typeOperationSelect.selectedIndex
  const typeOperationOptionValue = typeOperationSelect.options[typeOperationOptionIndex].value

  const validateDate = new Date(date.toString()) < new Date(new Date().toDateString())

  console.log(validateDate)

  if (
    keyOptionValue.length === 0 ||
    valueKey.length === 0 ||
    bankOptionValue.length === 0 ||
    money.length === 0 ||
    isNaN(parseFloat(money)) ||
    date.length === 0 ||
    typeOperationOptionValue.length === 0 
  ) {
    window.alert('Preencha os campos corretamente!')

    return false
  } if (validateDate) {
    window.alert('Informe uma data válida!')

    return false
  }

  return true
}


function calculateSend() {
  send += parseFloat(document.getElementById('money').value)
}

function calculateReceived() {
  received += parseFloat(document.getElementById('money').value)
}

function calculateBalance() {
  balance = received - send
}

function showReport() {
  const verifyData = verifyCorrectData()

  if (verifyData) {
    document.getElementById('report').removeAttribute('style')

    const operationSelect = document.getElementById('operation')
    const operationOptionsIndex = operationSelect.selectedIndex
    const operationValue = operationSelect.options[operationOptionsIndex].value

    if (operationValue === '1') {
      calculateSend()
    } else {
      calculateReceived()
    }

    calculateBalance()

    document.getElementById('send').value = `R$ ${send.toFixed(2)}`
    document.getElementById('received').value = `R$ ${received.toFixed(2)}`
    document.getElementById('balance').value = `R$ ${balance.toFixed(2)}`
  }
}