// let plus = document.querySelector(".main__add")
// plus.addEventListener('click', () => {
//   const  cards = document.querySelector(".main__cards")
//   cards.prepend(document.createElement("div"))
//   const card = document.createElement("div").classList.add("main__card");
//   card.prepend(document.createElement("input").setAttribute('type', 'text'))
// })

let plus = document.querySelector(".main__add")
const xz = []
plus.addEventListener('click', () => {
  const wrap = document.querySelector(".main__cards")
  const newDiv = document.createElement("div")
  const input = document.createElement("input")
  const btn = document.createElement("button")
  newDiv.classList.add("main__card")
  wrap.prepend(newDiv)
  newDiv.prepend(input)
  btn.textContent = "Добавить"
  btn.addEventListener("click",  ()  => {
    xz.push(input.value)
    const divRes = document.createElement("div")

    const pResponse = document.createElement("p")

    const p = document.createElement("p")
    const inputResponse = document.createElement("input")
    const btnResponse = document.createElement("button")

    btnResponse.addEventListener("click", () => {
      localStorage.setItem(input.value, inputResponse.value)
      
      pResponse.textContent = "Ответ: " + inputResponse.value

      inputResponse.style.cssText = "display: none"
      btnResponse.style.cssText = "display: none"

      divRes.append(pResponse)
    })

    btnResponse.textContent =  "Сохранить"
    p.textContent = input.value;
    newDiv.prepend(divRes)
    divRes.append(inputResponse)
    divRes.append(btnResponse)
    divRes.prepend(p)
    console.log(xz);
    // input.value = ""
  })
  newDiv.append(btn)
})

if(xz.length > 0) {
  xz.map((data) => {
    console.log(" ");
  })
}

// const mutationBtn = new MutationObserver(() => {
//   formBtn.removeAttribute("disabled");
// });

// mutationBtn.observe(priceField, {
//   attributes: true,
//   characterData: true,
//   childList: true,
//   subtree: true,
//   attributeOldValue: true,
//   characterDataOldValue: true,
// });