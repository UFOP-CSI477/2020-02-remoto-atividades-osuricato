let cars = []
let totalFuel = 0
let totalKM = 0
let mediaTotalPerformance = 0

function registerVehicle() {
  let name = document.getElementById('name')
  let fuel = document.getElementById('fuel')
  let km = document.getElementById('km')

  formattedFuel = parseFloat(fuel.value)
  formattedKM = parseFloat(km.value)

  if (
    name.value.length === 0 ||
    fuel.value.length === 0 ||
    km.value.length === 0 ||
    isNaN(formattedFuel) ||
    isNaN(formattedKM)
  ) {
    alert('Preencha corretamente todos os dados!')
  } else {
    cars.push({
      name: name.value,
      fuel: formattedFuel,
      km: formattedKM
    })
  
    name.value = ''
    fuel.value = ''
    km.value = ''
  
    insertValues()
    
    document.getElementById('report').style.display = 'flex'
  }
}

function insertValues() {
  const data = document.getElementById('data')

  data.innerHTML = ''
  totalFuel = 0
  totalKM = 0
  mediaTotalPerformance = 0

  for (let index = 0; index < cars.length; index++) {
    const name = document.createElement('p')
    name.innerHTML = `Nome do carro: ${cars[index].name}`

    const fuel = document.createElement('p')
    fuel.innerHTML = `Quantidade de combustível: ${cars[index].fuel}`
    totalFuel += cars[index].fuel

    const km = document.createElement('p')
    km.innerHTML = `Quantidade de quilômetros rodados: ${cars[index].km}`
    totalKM += cars[index].km

    const performance = document.createElement('p')
    performance.innerHTML = `= Desempenho em quilômetros por litro (km/l) ${(cars[index].km / cars[index].fuel).toFixed(2)}`
    mediaTotalPerformance += (cars[index].km / cars[index].fuel)

    const br = document.createElement('br')

    data.appendChild(name)
    data.appendChild(fuel)
    data.appendChild(km)
    data.appendChild(performance)
    data.appendChild(br)
  }
}

function finishReport() {
  document.getElementById('main').style.display = 'none'
  document.getElementById('report2').style.display = 'flex'

  const data = document.getElementById('data2')

  data.innerHTML = ''

  const totalFuelTag = document.createElement('p')
  totalFuelTag.innerHTML = `= Quantidade total de combustível utilizado: ${totalFuel.toFixed(2)}`

  const totalKMTag = document.createElement('p')
  totalKMTag.innerHTML = `= Quantidade total de quilômetros rodados: ${totalKM.toFixed(2)}`

  const mediaFuelTag = document.createElement('p')
  mediaFuelTag.innerHTML = `= Média de consumo de combustível: ${(totalFuel / cars.length).toFixed(2)}`
  
  const mediaKMTag = document.createElement('p')
  mediaKMTag.innerHTML = `= Média quilômetros rodados: ${(totalKM / cars.length).toFixed(2)}`

  const mediaPerformanceTag = document.createElement('p')
  mediaPerformanceTag.innerHTML = `= Média de desempenho em quilômetros por litro (km/l): ${(totalKM / totalFuel).toFixed(2)}`

  data.appendChild(totalFuelTag)
  data.appendChild(totalKMTag)
  data.appendChild(mediaFuelTag)
  data.appendChild(mediaKMTag)
  data.appendChild(mediaPerformanceTag)
}