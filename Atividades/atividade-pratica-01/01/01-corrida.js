let competitors = []

function insertData() {
  let start = document.getElementById('start').value
  let competitor = document.getElementById('competitor').value
  let time = document.getElementById('time').value

  const tbody = document.getElementById('tbody1')

  const lines = tbody.getElementsByTagName('tr')

  if (lines.length < 6) {
    if (start.length == 0 || competitor.length == 0 || time.length == 0 || isNaN(parseInt(time))) {
      window.alert('Preencha os campos corretamente!')

      document.getElementById("start").value = ""
      document.getElementById("competitor").value = ""
      document.getElementById("time").value = ""
    } else {
      const tr = document.createElement('tr')

      const td1 = document.createElement('td')
      const td2 = document.createElement('td')
      const td3 = document.createElement('td')

      tr.appendChild(td1)
      tr.appendChild(td2)
      tr.appendChild(td3)

      tbody.appendChild(tr)

      td1.innerHTML = start
      td2.innerHTML = competitor
      td3.innerHTML = time

      const person = {
        start: start,
        competitor: competitor,
        time: time,
        result: ''
      }

      competitors.push(person)

      document.getElementById("start").value = ""
      document.getElementById("competitor").value = ""
      document.getElementById("time").value = ""

      if (lines.length == 6) {
        document.getElementById('btnShowResults').hidden = false
      }
    }
  } else {
    window.alert('Máximo de competidores inscritos!')
  }
}

function sortCompetitors() {
  competitors.sort((i, j) => (i.time > j.time ? 1 : -1))

  console.log(competitors)

  for (let index = 0; index < competitors.length; index++) {
    if (competitors[0].time === competitors[index].time) {
      competitors[index].result = 'Vencedor(a)'
    } 
  }
}

function showResults() {
  sortCompetitors()

  document.getElementById('tableResults').hidden = false
  document.getElementById('btnShowResults').hidden = true

  const tbody = document.getElementById('tbody2')

  let position = 1

  for (index in competitors) {
    const tr = document.createElement('tr')

    const td1 = document.createElement('td')
    const td2 = document.createElement('td')
    const td3 = document.createElement('td')
    const td4 = document.createElement('td')
    const td5 = document.createElement('td')

    tr.appendChild(td1)
    tr.appendChild(td2)
    tr.appendChild(td3)
    tr.appendChild(td4)
    tr.appendChild(td5)

    tbody.appendChild(tr)

    td1.innerHTML = position
    td2.innerHTML = competitors[index].start
    td3.innerHTML = competitors[index].competitor
    td4.innerHTML = competitors[index].time
    td5.innerHTML = competitors[index].result

    position++
  }
}