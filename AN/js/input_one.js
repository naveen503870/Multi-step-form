
// ELEMENTS
const yesBtn = document.getElementById("yesbtn");
const noBtn = document.getElementById("nobtn");

const nameInput = document.getElementById("name")
const mobileInput = document.getElementById("mobile")


// FUNCTIONS
const state1 = {
    name: "Retransmite",
    // mobile: "1234567890"
}

const state2 = {
    name: "No",
    // mobile: "1234567890"
}

const updateDOM = obj => {
    const { name, mobile } = obj
    nameInput.value = name
    mobileInput.value = mobile
}

yesBtn.addEventListener("click", () => {
    updateDOM(state1)
})

noBtn.addEventListener("click", () => {
    updateDOM(state2)
})
yesBtn.checked = true
yesBtn.dispatchEvent(new Event('click'))